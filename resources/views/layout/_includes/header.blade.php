<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="csrf-token" content="{{ csrf_token() }}">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>@yield('titulo')</title>


	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- font-awesome 5 -->
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

     <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

	<!-- Estilo -->
	<link href="css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="css/slider-def.css">

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>	

</head>
<body>

 	<div class="container-fluid p-0">
 		<div class="row-social w-100 d-flex flex-row justify-content-end align-items-center">
 			<a href="#" class="null h-100 relative d-flex-row-center twitter" target="_blank"><i class="fab fa-twitter text-center"></i><span class="fade-social fade-social-twitter"></span></a>
			<a href="https://www.facebook.com/stelaanicacioadvogados/" class="null h-100 relative d-flex-row-center facebook" target="_blank"><i class="fab fa-facebook-f text-center"></i><span class="fade-social fade-social-facebook"></span></a>
			<a href="#" class="null h-100 relative d-flex-row-center in" target="_blank"><i class="fab fa-linkedin-in text-center"></i><span class="fade-social fade-social-in"></span></a>
			<a href="#" class="null h-100 relative d-flex-row-center p" target="_blank"><i class="fab fa-pinterest-p text-center"></i><span class="fade-social fade-social-p"></span></a>
			<a href="#" class="null h-100 relative d-flex-row-center rss" target="_blank"><i class="fas fa-rss text-center"></i><span class="fade-social fade-social-rss"></span></a>
			<a href="#" class="null h-100 relative d-flex-row-center google" target="_blank"><i class="fab fa-google-plus-g text-center"></i><span class="fade-social fade-social-google"></span></a>
 		</div>
 	</div>

	<div class="topo d-flex flex-row align-items-end flex-wrap">
		<div class="col-xs-12 col-sm-12 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1 d-flex flex-row">
			<div class="col-xs-9 col-sm-9">
				<a href="{{route('site.home')}}"><img src="{{asset('img/logo.png')}}" alt="LOGOMARCA" class="logo"></a>
				<!-- <img src="http://via.placeholder.com/180x50" alt="LOGOMARCA" class="logo1"> -->
			</div>
			<div class="col-xs-3 col-sm-3 d-flex flex-row justify-content-center align-items-center">
				<nav class="navbar navbar-expand-lg navbar-light x-mobile">
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				  	</button>
				</nav>
			</div>
		</div>
		<div class="col-xs-12 col-sm-0 col-lg-8 col-xl-8 d-flex flex-row justify-content-end align-items-end p-0 h-100 desktop">
			<nav class="nav-main">
				<div class="nav-menu d-flex flex-row">
					<div class="col-lg-1 col-xl-1"></div>
					<div class="col-lg-10 col-xl-10">
						<ul class="p-0 d-flex flex-row justify-content-end">
							<li id="home" class="active"><a class="null e" href="{{route('site.home')}}">Home</a></li>
							<li id="institucional"><a class="null e" href="{{route('site.institucional')}}">Institucional</a></li>
							<li id="areasdeatuacao" class="aa">
								<a class="null e" href="#experiencias">Áreas de Atuação</a>
								<div class="menu-invisible">
									<ul class="d-flex flex-column p-0">
										<li><a class="null" href="{{route('site.direitodoconsumidor')}}">Direito do Consumidor</a></li>
										<li><a class="null" href="{{route('site.direitoimobiliario')}}">Direito Imobiliário</a></li>
										<li><a class="null" href="{{route('site.direitodafamilia')}}">Direito da Família</a></li>
										<li><a class="null" href="{{route('site.direitodassucessoes')}}">Direito das Sucessões</a></li>
										<li><a class="null" href="{{route('site.direitoempresarial')}}">Direito Empresarial</a></li>
										<li><a class="null" href="{{route('site.direitotrabalhista')}}">Direito Trabalhista</a></li>
									</ul>
								</div>
							</li>
							<!-- <li id="noticias"><a class="null e" href="#">Notícias</a></li> -->
							<li id="contato"><a class="null" href="{{route('site.contato')}}">Contato</a></li>
						</ul>
					</div>
					<div class="col-lg-1 col-xl-1"></div>
				</div>
			</nav>
		</div>
		<div class="col-xs-12 col-sm-12 x-mobile nav pt-0 pb-0">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto pl-3 pr-3">
			      	<li class="nav-item active">
			        	<a class="nav-link" href="{{route('site.home')}}">Home<!-- <span class="sr-only">(current)</span> --></a>
			      	</li>
			      	<li class="nav-item active">
			        	<a class="nav-link" href="{{route('site.institucional')}}">Institucional<!-- <span class="sr-only">(current)</span> --></a>
			      	</li>
			      	<li class="nav-item dropdown">
			        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          	Áreas de Atuação
			        	</a>
			        	<div class="dropdown-menu pt-0 pb-0" aria-labelledby="navbarDropdown">
			        		<ul>
			        			<li><a class="dropdown-item" href="{{route('site.direitodoconsumidor')}}">Direito do Consumidor</a></li>
			        			<li><a class="dropdown-item" href="{{route('site.direitoimobiliario')}}">Direito Imobiliário</a></li>
			        			<li><a class="dropdown-item" href="{{route('site.direitodafamilia')}}">Direito da Família</a></li>
			        			<li><a class="dropdown-item" href="{{route('site.direitodassucessoes')}}">Direito das Sucessões</a></li>
			        			<li><a class="dropdown-item" href="{{route('site.direitoempresarial')}}">Direito Empresarial</a></li>
			        			<li><a class="dropdown-item" href="{{route('site.direitotrabalhista')}}">Direito Trabalhista</a></li>
			        		</ul>
			          		<!-- <div class="dropdown-divider"></div>
			          			<a class="dropdown-item" href="#">Nossa História</a>
			        		</div> -->
			      	</li>
				    <li class="nav-item active">
			        	<a class="nav-link" href="#">Contato<!-- <span class="sr-only">(current)</span> --></a>
			      	</li>
			    </ul>
			</div>
		</div>
	</div>