// remueve right spaces
function Rtrim(sTmp1) {
    var iTmp1 = 0;
    var oTmp1 = sTmp1;

    if (typeof(oTmp1) == "string") {
        if (oTmp1.length > 0) {
            iTmp1 = oTmp1.length - 1;
            while (oTmp1.charAt(iTmp1) == " ") {
                iTmp1 -= 1;
            }
            oTmp1 = oTmp1.slice(0, iTmp1 + 1);
        }
    }
    sTmp1 = oTmp1;
    return(sTmp1);
}
// remove left spaces
function Ltrim(sTmp1) {
    var iTmp1 = 0;
    var oTmp1 = sTmp1;

    if (typeof(oTmp1) == "string") {
        if (oTmp1.length > 0) {
            while (oTmp1.charAt(iTmp1) == " " && iTmp1 < oTmp1.length) {
                iTmp1 += 1;
            }
            oTmp1 = oTmp1.slice(iTmp1);
        }
    }
    sTmp1 = oTmp1;
    return(sTmp1);
}
// remove right - left spaces
function Trim(sTmp1) {
    return(Rtrim(Ltrim(sTmp1)));
}


//
$(document).ready(function() {

    $('#numTarjetaInput').keypress(function(e){
        if ( e.which == 13 ) return false;
    });


$("#enviaForm").click(function( event ) {
    event.preventDefault();
    
    /**
     * refresco contenido modal
     * @type {String}
     */
    var html = '';
    $("#resultadoBusqueda .modal-body p").html(html);

    /**
     * VALIDA NUMERO TARJETA
     */
    
    var numTarjeta = $("#numTarjetaInput").val();
    if (!$.isNumeric( numTarjeta )){
        html = 'ID de la tarjeta inválido. Ingresa sólo numeros';
        $("#loadingg").hide();
        $("#resultadoBusqueda .modal-body p").html(html);
        $('#resultadoBusqueda').modal('show');
        return false;
    }

     if (Trim(numTarjeta) != "") {
         numTarjeta = Trim(numTarjeta);
         var iPrimerCaracterValido = -1;
         for (var iTmp1 = 0; iTmp1 <= numTarjeta.length - 1; iTmp1++) {
             if (numTarjeta.substr(iTmp1, 1) != "0") {
                 iPrimerCaracterValido = iTmp1;
                 break;
             }
         }
         if (iPrimerCaracterValido >= 0) {
             numTarjeta = numTarjeta.substring(iPrimerCaracterValido);
         } else {
             numTarjeta = "";
         }
     }
     if (Trim(numTarjeta) == "") {
         $("#numTarjetaInput").val("");
         alert("Por favor, ingrese el número de su tarjeta bip!");
         $("#numTarjetaInput").focus();
         return false;
     }
    $("#numTarjetaInput").val(numTarjeta);

    if($('#numTarjetaInput').val() === ''){
        alert("debes completar el campo");
    }else{
        $.ajax({
            url     : './index.php/buscaestado',
            type    : 'POST',
            //dataType: 'json',
            data    : {'numTarjetaInput' : numTarjeta},
            dataType: 'json',
            beforeSend: function(){
                $("#loadingg").show();
                $('#resultadoBusqueda').modal('show');
            },
            success : function( data ) {
                      $("#loadingg").hide();
                      var html   = '<b>Saldo tarjeta bip: </b>'+data.saldoTarjeta+'<br>';
                          html  += '<b>Fecha saldo: </b>'+data.fechaSaldo+'<br>';
                          html  += '<b>ID Tarjeta: </b>'+data.idTarjeta+'<br>';
                          html  += '<b>Estado contrato: </b>'+data.estadoContrato+'<br>';
                      if(data === 'ID de la tarjeta invalido'){html = 'ID de la tarjeta inválido'};
                                $("#resultadoBusqueda .modal-body p").html(html);
                                
          }, error   : function( xhr, err ) {
                        $("#loadingg").hide();
                        console.log(' Error =( ');
                        var html = data;
                        $("#resultadoBusqueda .modal-body p").html(json_decode(html));
                     }
           });      
        }
    });

    /* activate scrollspy menu */
    $('body').scrollspy({
      target: '#navbar-collapsible',
      offset: 50
    });
    /* smooth scrolling sections */
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 50
            }, 500);
            return false;
          }
        }
    });        
});