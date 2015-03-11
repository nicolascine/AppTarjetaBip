<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="dns-prefetch" href="//netdna.bootstrapcdn.com">
        <link rel="dns-prefetch" href="//maxcdn.bootstrapcdn.com">
        <link rel="dns-prefetch" href="//ajax.googleapis.com">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>bip! API REST</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <meta name="author" content="Nicolás Silva < nsilvasalinas@gmail.com >">
        <meta name="description" content="Tarjeta bip! API REST - Consulta estado de la tarjeta bip (medio de pago sistema de transporte Santiago de Chile">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">
    		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    		<link rel="stylesheet" href="<?php echo('assets/css/bipapirest.css'); ?>">
        <link rel="stylesheet" href="<?php echo('assets/css/prism.css'); ?>">
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
		<img src="<?php echo('assets/img/Logo-BIP-API.svg'); ?>" alt="BIP! API REST" width="150" height="auto">
      </a>
    </div>
    <div class="navbar-collapse collapse distmenu" id="navbar-collapsible">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#section1">Qué es</a></li>
        <li><a href="#section2">Documentación API</a></li>
        <li><a href="#section4">Cliente Web</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="container-fluid" id="section1">

  	<img id="logoHome" src="<?php echo('assets/img/Logo-BIP-API.svg'); ?>" alt="BIP! API REST">
  	<div class="container">
  		<div class="col-sm-6 col-sm-offset-3">
  			<form id="formuBip" class="navbar-form">
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
       

 <h1>Documentación API</h1>
        <br>
    <p class="lead">Existen dos alternativas. Consultar el estado de tu tarjeta bip! mediante el <a href="http://bip-cliente.herokuapp.com" target="_blank"> cliente web <i style="font-size:15px;" class="fa fa-external-link fa-5x"></i> </a> o utilizar el <b>sercivio REST API </b>y obtener la data en formato JSON para el uso que desees (como crear tu propia App)</p>
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
          <th scope="row" class="verdeGet">GET http://bip-servicio.herokuapp.com/api/consulta/tarjeta/{id}</th>
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
        <tr class="verdeGet">
          <th scope="row">id</th>
          <th scope="row">Corresponde al número de identificación de la tarjeta bip!</th>
        </tr>
      </tbody>
    </table>

  <br>
  <div class="ejemplo">
    <h4>Ejemplo REQUEST</h4>
    Al hacer una llamada GET se obtiene por defecto un JSON con la data del estado de la tarjeta
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
    <br>
    <h4><b>Restricciones</b></h4>
    <ul>
      <li>La App está optimizada para la consulta de estado de <b>la tarjeta bip! genérica</b>, con tarjetas propietarias de terceros (bancos, etc) cuyo uso está asociado a un RUT podrían haber errores</li>
      <li>El estado del servicio depende del <a href="http://www.tarjetabip.cl/" target="_blank">sitio oficial de la tarjeta bip!</a>, por lo tanto, si el servidor oficial de Transantiago está caído, esta API tambien lo estará =(</li>
    </ul>
  </div>


    </div>
  </div>
</section>

<section class="container-fluid" id="section4">
	<h2 class="text-center">Cliente web </h2>
  <h4 class="text-center">Consulta el saldo de la tarjeta bip! mediante el<a href="http://bip-cliente.herokuapp.com" target="_blank"> cliente web <i style="font-size:15px;" class="fa fa-external-link fa-5x"></i> </a></h4>
<br>
    <div class="row">

      <div class="col-sm-8 col-sm-offset-2">
      <img src="<?php echo('assets/img/bg_smartphones.jpg'); ?>" class="img-responsive center-block ">
      <p class="text-center">App en Angular + Materializecss optimizado para moviles</p>
      </div>
    </div>
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
<a class="hidden-xs" href="https://github.com/nicolascine/AppTarjetaBip.git"><img class="hide-xs" style="position: absolute; top: 0; right: 0; border: 0;z-index:999999;" src="https://camo.githubusercontent.com/a6677b08c955af8400f44c6298f40e7d19cc5b2d/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png"></a>
<div id="resultadoBusqueda" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Resultado de búsqueda</h4>
      </div>
      <div class="modal-body">
        <div id="loadingg"><img src="<?php echo('assets/img/loader.gif'); ?>" width="20" height="auto" alt="Buscando...">  Buscando...</div>
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Gracias!</button>
      </div>
    </div>
  </div>
</div>

<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type='text/javascript' src="<?php echo('assets/js/prism.js'); ?>"></script>
<script type='text/javascript' src="<?php echo('assets/js/util.js'); ?>"></script>
    </body>
</html>