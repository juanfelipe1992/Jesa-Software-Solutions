<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>JESA Software Solutions</title>
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet"> 
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/lightbox.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo base_url(); ?>assets/css/presets/preset1.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicoon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(assets/images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Bienvenido A </h1>
            <h1 class="animated fadeInLeftBig"><span>JESA Software Solutions</span></h1>
            <p class="animated fadeInRightBig">Soluciones Informáticas</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Iniciar</a>
          </div>
        </div>
        <div class="item" style="background-image: url(assets/images/slider/4.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><span>JESA</span></h1>
            <h1 class="animated fadeInLeftBig">vive el cambio</h1>
            <p class="animated fadeInRightBig">Soluciones Informáticas</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Iniciar</a>
          </div>
        </div>
        <div class="item" style="background-image: url(assets/images/slider/5.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><span>JESA</span></h1>
            <h1 class="animated fadeInLeftBig">Experiencia en un solo lugar</h1>
            <p class="animated fadeInRightBig">Soluciones Informáticas</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Iniciar</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Inicio</a></li>
            <li class="scroll"><a href="#services">Servicios</a></li> 
            <li class="scroll"><a href="#about-us">Acerca</a></li>                     
            <li class="scroll"><a href="#portfolio">Portafolio</a></li>
            <li class="scroll"><a href="#team">Equipo</a></li>
            <li class="scroll"><a href="#contact">Contáctanos</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
