<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>BIP! API REST</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="author" content="Nicolás Silva < nsilvasalinas@gmail.com >">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">
    		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    		<link rel="stylesheet" href="<?php echo(CSS.'bipapirest.css'); ?>">
        <link rel="stylesheet" href="<?php echo(CSS.'prism.css'); ?>">

    		<!--[if lt IE 9]>
    		  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    		<![endif]-->
    </head>

<body>        
 <nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#section1">
		<img src="<?php echo(IMG.'Logo-BIP-API.svg'); ?>" alt="BIP! API REST" width="150" height="auto">
      </a>
    </div>
    <div class="navbar-collapse collapse distmenu" id="navbar-collapsible">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#section1">Qué es</a></li>
        <li><a href="#section2">Documentación API</a></li>
        <li><a href="#section4">Cliente Web</a></li>
        <li><a href="#section5">Créditos</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="container-fluid" id="section1">

  	<img id="logoHome" src="<?php echo(IMG.'Logo-BIP-API.svg'); ?>" alt="BIP! API REST">
  	<div class="container">
  		<div class="col-sm-6 col-sm-offset-3">
  			<form id="formuBip" class="navbar-form" method="POST" action="<?php echo (URL. 'index.php/buscaestado'); ?>">
  			  <div class="form-group" style="display:inline;">
  			    <div class="input-group"> 
  			      <input type="text" class="form-control" placeholder="Ingresa el número de tu tarjeta BIP" name="numeroTarjetaBip" id="numTarjetaInput">
  			      <span id="enviaForm" class="input-group-addon botonEnviar"><span class="glyphicon glyphicon-search"></span></span>
  			    </div>
  			  </div>
  			</form>
  		</div>  		
  		<div class="col-sm-6 col-sm-offset-3">
			<!-- nada ~ -->
  		</div>
 	

  	</div>
  	<div class="container cualidades">
      <div class="row">
          <div class="col-sm-4">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-2 text-center"><h3>Robusto</h3><p>Construído en PHP 5 con la potencia de CodeIgniter</p><i class="fa fa-cog fa-5x"></i></div>
            </div>
          </div>
          <div class="col-sm-4 text-center">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1 text-center"><h3>Simple</h3><p>Consigue el estado de tu bip! con un solo click</p><i class="fa fa-user fa-5x"></i></div>
            </div>
          </div>
          <div class="col-sm-4 text-center">
            <div class="row">
              <div class="col-sm-10 text-center"><h3>Limpio</h3><p>Cliente web con una interfaz Mobile First, pensada para humanos</p><i class="fa fa-mobile fa-5x"></i></div>
            </div>
          </div>
      </div><!--/row-->
    <div class="row"><br></div>
  </div><!--/container-->
</section>

<section class="container-fluid" id="section2">
  <div class="row">
  	<div class="col-sm-8 col-sm-offset-2 text-center">
       

 <h1>Cómo utilizarlo?</h1>
        <br>
    <p class="lead">Existen dos alternativas. Consultar el estado de tu tarjeta bip! mediante el <a href="http://cliente-bip.herokuapp.com"> cliente web <i style="font-size:15px;" class="fa fa-external-link fa-5x"></i> </a> o utilizar el sercivio REST API y obtener la data en formato JSON para el uso que desees (como crear tu propia App)</p>
        <br> 
<p class="text-left">El <b>único</b> método soportado por la API es <b>GET</b></p>


<table class="table table-bordered apiEjemplo">
      <thead>
        <tr>
          <th>MÉTODO</th>
          <th>ENDPOINT</th>
          <th>USO</th>
          <th>RETORNO</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" class="verdeGet">GET</th>
          <td>api/consulta/tarjeta/{id}</td>
          <td>Get bip! status</td>
          <td>Status tarjeta bip!</td>
        </tr>
      </tbody>
    </table>

    <table class="table table-bordered apiEjemplo">
      <thead>
        <tr>
          <th>ENDPOINT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">GET http://bip-servicio.herokuapp.com/api/consulta/tarjeta/{id}</th>
        </tr>
      </tbody>
    </table>    

    <table class="table table-bordered apiEjemplo">
      <thead>
        <tr>
          <th>PARÁMETROS REQUEST</th>
          <th>VALOR</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">id</th>
          <th scope="row">Corresponde al número de identificación de la tarjeta bip!</th>
        </tr>
      </tbody>
    </table>

  <br>
  <div class="ejemplo">
    <h4>Ejemplo REQUEST</h4>
    Al hacer una llamada GET se obtiene un JSON con la data del estado de la tarjeta
    <pre>http://bip-servicio.herokuapp.com/api/consulta/tarjeta/<b>123456</b></pre>
    donde <b>123456</b> corresponde al número de identificación de la tarjeta bip!<br><br>
    <h4>Ejemplo RESPONSE</h4>
    Siguiendo el ejemplo anterior, la respuesta obtenida sería la siguiente:
<pre><code class="language-javascript">
{
  "idTarjeta": "123456",
  "estadoContrato": "Contrato Activo",
  "saldoTarjeta": "$2.120",
  "fechaSaldo": "05/01/2005 20:14"
}
</code></pre>
    <br>
    <h4>Opciones adicionales</h4>
    <p>Puedes indicar mediante el parámetro <b>format</b> el formato de respuesta</p>
    <div id="boxMetodoGet" class="form-group has-success has-feedback">
      <div class="input-group">
        <span class="input-group-addon">JSON</span>
        <input type="text" class="form-control metodoGet" id="inputGroupSuccess4" value="/api/consulta/tarjeta/{id}?format=json" aria-describedby="inputGroupSuccess4Status">
      </div>      
      <br>
      <div class="input-group">
        <span class="input-group-addon">XML</span>
        <input type="text" class="form-control metodoGet" id="inputGroupSuccess4" value="/api/consulta/tarjeta/{id}?format=xml" aria-describedby="inputGroupSuccess4Status">
      </div>
    </div>
    <p>Ejemplo: Si indicamos como parámetro <b>?format=xml</b></p>
    <pre>http://bip-servicio.herokuapp.com/api/consulta/tarjeta/123456<b>?format=xml</b></pre>
    <br>
    <p>Obtendremos el siguiente resultado</p>
<pre><code class="language-markup">
<script type="prism-html-markup">
<xml>
  <idTarjeta>123456</idTarjeta>
  <estadoContrato>Contrato Activo</estadoContrato>
  <saldoTarjeta>$2.120</saldoTarjeta>
  <fechaSaldo>05/01/2005 20:14</fechaSaldo>
</xml>
</script>
</code></pre>

    <h4>Restricciones</h4>
    <ul>
      <li>El estado del servicio depende del <a href="http://www.tarjetabip.cl/" target="_blank">sitio oficial de la tarjeta bip!</a>, por lo que si su servidor está caído, esta API tambien lo estará =(</li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>


    </div>
  </div>
</section>

<section class="container-fluid" id="section4">
	<h2 class="text-center">Change this Content. Change the world.</h2>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
      <img src="<?php echo(IMG.'bg_smartphones.jpg'); ?>" class="img-responsive center-block ">
      <p class="text-center">Images will scale down proportionately as browser width narrows.</p>
      </div>
    </div>
</section>

<section class="container-fluid" id="section5">
  <div class="col-sm-12">
    <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-12">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                <h2 class="list-group-item-heading">Basic</h2>
                <h6>Free to get started</h6>
              </a>
              <a href="#" class="list-group-item">
                <p class="list-group-item-text">Option 100 - more about this</p>
              </a>
              <a href="#" class="list-group-item">
                <p class="list-group-item-text">Option 2 - this is more about this</p>
              </a>
              <a href="#" class="list-group-item">
                <p class="list-group-item-text">Option 3 GB</p>
              </a>
              <a href="#" class="list-group-item">
                <p class="list-group-item-text">Option 4</p>
              </a>
              <a href="#" class="list-group-item">
                <p class="list-group-item-text">Feature</p>
              </a>
              <a href="#" class="list-group-item">
                <p class="list-group-item-text">Feature</p>
              </a>
              <a href="#" class="list-group-item">
                <button class="btn btn-primary btn-lg btn-block">Get Started</button>
              </a>
            </div>
      </div> 
      
 
 
      
    </div><!--/row-->
    </div><!--/container--> 
  </div>
</section>

<section class="container" id="section7">
	<h1 class="text-center">Redes Sociales Transantiago</h1>
    <div class="row">
      <!--fontawesome icons-->
      <div class="col-sm-1 col-sm-offset-2 col-xs-4 text-center">
       <i class="fa fa-github fa-4x"></i>
      </div>
      <div class="col-sm-1 col-xs-4 text-center">
       <i class="fa fa-foursquare fa-4x"></i>
      </div>
      <div class="col-sm-1 col-xs-4 text-center">
       	<i class="fa fa-facebook fa-4x"></i>
      </div>
      <div class="col-sm-1 col-xs-4 text-center">
       <i class="fa fa-pinterest fa-4x"></i>
      </div>
      <div class="col-sm-1 col-xs-4 text-center">
       <i class="fa fa-google-plus fa-4x"></i>
      </div>
      <div class="col-sm-1 col-xs-4 text-center">
       <i class="fa fa-twitter fa-4x"></i>
      </div>
      <div class="col-sm-1 col-xs-4 text-center">
       <i class="fa fa-dribbble fa-4x"></i>
      </div>
      <div class="col-sm-1 col-xs-4 text-center">
       <i class="fa fa-instagram fa-4x"></i>
      </div>
  </div><!--/row-->
</section>

<footer id="footer">
  <div class="container">
    <div class="row">    
      <div class="col-xs-12 col-sm-12 col-md-12 column">          
          <p>Creado con ♥ por <a href="http://github.com/nicolascine" target="_blank">nicolás silva.</a> &nbsp; ~ &nbsp; Santiago de Chile, 2015.</p>
        </div>
    </div><!--/row-->
  </div>
</footer>


<a class="hidden-xs" href="https://github.com/nicolascine/AppTarjetaBIP"><img class="hide-xs" style="position: absolute; top: 0; right: 0; border: 0;z-index:999999;" src="https://camo.githubusercontent.com/a6677b08c955af8400f44c6298f40e7d19cc5b2d/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png"></a>

<div id="resultadoBusqueda" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Resultado de búsqueda</h4>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Gracias!</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type='text/javascript' src="<?php echo(JS.'prism.js'); ?>"></script>
<script type='text/javascript' src="<?php echo(JS.'util.js'); ?>"></script>

     
<script type='text/javascript'>        

$(document).ready(function() {

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
            url     : $("#formuBip").attr('action'),
            type    : $("#formuBip").attr('method'),
            //dataType: 'json',
            data    : {'numTarjetaInput' : numTarjeta},
            dataType: 'json',
            success : function( data ) {
                        console.log(' Submitted ');
                        console.log(data);
                        var html = data;
						$("#resultadoBusqueda .modal-body p").html(html);
						$('#resultadoBusqueda').modal('show');
                      },
            error   : function( xhr, err ) {
            			console.log(' Error ');
            			var html = data;
                        $("#resultadoBusqueda .modal-body p").html(json_decode(html));
						$('#resultadoBusqueda').modal('show');
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

</script>


    </body>
</html>