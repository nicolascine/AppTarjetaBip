<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>BIP! API REST</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="author" content="Nicolás Silva <nsilvasalinas@gmail.com">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo(CSS.'bipapirest.css'); ?>">
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
      <a class="navbar-brand" href="<?php echo(URL); ?>">
		<img src="<?php echo(IMG.'Logo-BIP-API.svg'); ?>" alt="BIP! API REST" width="150" height="auto">
      </a>
    </div>
    <div class="navbar-collapse collapse distmenu" id="navbar-collapsible">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#section1">Qué es</a></li>
        <li><a href="#section2">Cómo usarlo</a></li>
        <li><a href="#section3">Cliente Web</a></li>
        <li><a href="#section4">Créditos</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="container-fluid" id="section1">

  	<img id="logoHome" src="<?php echo(IMG.'Logo-BIP-API.svg'); ?>" alt="BIP! API REST" width="400" height="auto">
  	<h1><? if($hola !== null){echo $hola;} ?></h1>
  	<div class="container">
  		<div class="col-sm-6 col-sm-offset-3">
  			<form id="formuBip" class="navbar-form" method="POST" action="<?php echo URL; ?>">
  			  <div class="form-group" style="display:inline;">
  			    <div class="input-group"> 
  			      <input type="text" class="form-control" placeholder="Ingresa el número de tu tarjeta BIP" name="numeroTarjetaBip">
  			      <span id="enviaForm" class="input-group-addon botonEnviar"><span class="glyphicon glyphicon-search"></span></span>
  			    </div>
  			  </div>
  			</form>
  		</div>  		
  		<div class="col-sm-6 col-sm-offset-3">
  			<pre><?= $resultado; ?></pre>
  		</div>
 	

  	</div>
  	<div class="container">
      <div class="row">
          <div class="col-sm-4">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-2 text-center"><h3>Robusto</h3><p>Construído en PHP 5 con la potencia de CodeIgniter</p><i class="fa fa-cog fa-5x"></i></div>
            </div>
          </div>
          <div class="col-sm-4 text-center">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1 text-center"><h3>Simple</h3><p>You may also want to create content that compells users to scroll down more..</p><i class="fa fa-user fa-5x"></i></div>
            </div>
          </div>
          <div class="col-sm-4 text-center">
            <div class="row">
              <div class="col-sm-10 text-center"><h3>Limpio</h3><p>Una interfaz de usuario amigable, el cliente BIP! está pensado para humanos</p><i class="fa fa-mobile fa-5x"></i></div>
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
		<p class="lead">Servicio REST-API para consultar el estado de tu tarjeta BIP! (Sistema de pago del servicio de transporte en Santiago de Chile)</p>
        <br> 
      	<i style="font-size:120px" class="fa fa-camera fa-5x"></i>
      	<p>Big 'ol Camera Icon</p>
    </div>
  </div>
</section>

<section class="container-fluid" id="section3">
	<h1 class="text-center">Bootstrap is Responsive</h1>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3 class="text-center">Vertical scrolling has become a popular and lasting trend in Web design.</h3>
        <div class="row">
          <div class="col-xs-4 col-xs-offset-1">Some brand-tacular designs even have home page content that is taller that 12,000 pixels. That's a lotta content.</div>
          <div class="col-xs-2"></div>
          <div class="col-xs-4 text-right">Anyhoo, this is just some random blurb of text, and Bootply.com is a playground and code editor for Bootstrap.</div>
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
          <p>Creado con ♥ por <a title="nsilvasalinas@gmail.com">nicolás silva</a> Santiago de Chile, 2015.</p>
        </div>
    </div><!--/row-->
  </div>
</footer>


<a href="https://github.com/nicolascine/AppTarjetaBIP"><img style="position: absolute; top: 0; right: 0; border: 0;z-index:999999;" src="https://camo.githubusercontent.com/a6677b08c955af8400f44c6298f40e7d19cc5b2d/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png"></a>
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        
<script type='text/javascript'>        
$(document).ready(function() {



	$( "#enviaForm" ).click(function( event ) {
		event.preventDefault();
	  $( "#formuBip" ).submit();
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', '123', 'bootply.com');
  ga('send', 'pageview');
</script>

    </body>
</html>