@extends('layout.site')

@section('titulo', '.:: Direito da Família ::.')

@section('conteudo')

<div class="container-fluid p-0">
	<div class="secao-header d-flex-row-center p-0">
		<h1>Stela Anicácio</h1>
	</div>
</div>

<div class="container mt-5 advogados">
	
	<div class="col-12 d-flex flex-row flex-wrap">
		<div class="col-sm-12 col-xs-12 col-md-8 col-lg-4 col-xl-4">
			<div class="team-person relative">
				<div class="team-person__img effect-apollo relative">
					<img src="{{asset('img/stela.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" style="min-width: 300px;">
					<div class="effect-apollo__overlay"></div>
				</div>
				<!-- <a href="{{route('site.advogados')}}" class="team-person__link">Advogada <i class="fas fa-arrow-right"></i></a> -->
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 contato">
			<h2>Stela Anicácio</h2>
			<p>Advogada</p>

			<p style="margin-top:15px;"><i class="fas fa-phone"></i> <span>+55 99 3538-8902</span></p>
			<p><i class="fas fa-envelope"></i> <span style="color: #303133;">stela@stelaanicacio.com.br</span></p>
			
			<div class="d-flex flex-row align-items-end redessociais">
	 			<a href="#" class="null twitter" target="_blank"><i class="fab fa-twitter text-center"></i><span class="fade-social fade-social-twitter"></span></a>
				<a href="https://www.facebook.com/stelaanicacioadvogados/" class="null facebook" target="_blank"><i class="fab fa-facebook-f text-center"></i><span class="fade-social fade-social-facebook"></span></a>
				<a href="#" class="null in" target="_blank"><i class="fab fa-linkedin-in text-center"></i><span class="fade-social fade-social-in"></span></a>
				<a href="#" class="null google" target="_blank"><i class="fab fa-google-plus-g text-center"></i><span class="fade-social fade-social-google"></span></a>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-0 col-lg-4 col-xl-4 d-flex flex-row justify-content-center align-items-start">
			<!-- <a href="{{route('site.home')}}"><img src="{{asset('img/logo.png')}}" alt="LOGOMARCA" class="logo"></a> -->
		</div>
	</div>

</div>

<div class="container mt-4 setores secao-conteudo">	
	<h4>Formação</h4>
</div>

@endsection