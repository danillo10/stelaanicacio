<!--

	PÁGINA PRINCIPAL COM TODOS OS COMPONENTES INCLUIDOS DINAMICAMENTE

-->

@extends('layout.site')

@section('titulo', 'Stela Anicacio Advogados Associados')

@section('conteudo')

<main>
	<section>
		<!-- SLIDER -->
		<div id="slider">
		   	<div class="slides">
		      	<!-- First slide --> 
		      	<div class="slider">
		         	<div class="legend"></div>
		         	<div class="content">
		            	<div class="content-txt">
		               		<h1> Eficiência, Experiência e Seriedade.</h1>
		               		<h2> Com mais de 18 anos de mercado, atendemos as demandas jurídicas de pessoas e empresas, suprindo diariamente suas expectativas. </h2>
		            	</div>
		         	</div>
		         	<div class="images"> 
		            	<img src="{{asset('img/1.jpg')}}" class="img-fluid"> 
		         	</div>
		      	</div>
		      	<!-- Second slide --> 
		      	<div class="slider">
		         	<div class="legend"></div>
		         	<div class="content">
		            	<div class="content-txt">
		               		<h1> Transparência e Credibilidade </h1>
		               		<h2> Um dos nossos diferenciais é disponibilizar ao cliente
		               		acesso total às suas informações, de forma segura e transparente  </h2>
		            	</div>
		         	</div>
		         	<div class="images"> 
		            	<img src="{{asset('img/2.png')}}" class="img-fluid"> 
		         	</div>
		      	</div>
		      	<!-- Third slide --> 
		      	<div class="slider">
		         	<div class="legend"></div>
		         	<div class="content">
		            	<div class="content-txt">
		               		<h1> Serviços </h1>
		               		<h2> Referência em atuação jurídica. Buscamos oferecer soluções jurídicas inovadoras e personalizadas, para oferecer o melhor resultado para os nossos clientes. </h2>
		            	</div>
		         	</div>
		         	<div class="images"> 
		            	<img src="http://kirbylawoffices.com/images/background/bg03.jpg" class="img-fluid"> 
		         	</div>
		      	</div>
		      	<!-- Fourth slide --> 
		      	<div class="slider">
		         	<div class="legend"></div>
		         		<div class="content">
		            		<div class="content-txt">
		               			<h1> Fale Conosco </h1>
		               			<h2> Oferecemos diversos canais de comunicação. Converse com a gente sempre que quiser. </h2>
		            	</div>
		         	</div>
		         	<div class="images"> 
		            	<img src="{{asset('img/4.jpg')}}" class="img-fluid"> 
		         	</div>
		      	</div>
		   	</div>
		</div>
		<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100 first" src="http://backgroundcheckall.com/wp-content/uploads/2017/12/law-background-1.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="http://backgroundcheckall.com/wp-content/uploads/2017/12/law-background-1.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="http://backgroundcheckall.com/wp-content/uploads/2017/12/law-background-1.jpg" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div> -->

		<!-- <div class="slider">
			<div class="slider-overlay-sombra"></div>
			<div class="slider-overlay"></div>
			<div class="slider-overlay-photo"></div>
			<div class="slider-text">
				
			</div>
			<div class="slider-01">
				
			</div>
			<div class="slider-02">
				
			</div>
			<div class="slider-03">
				
			</div>
		</div> -->
		<!-- FIM SLIDER -->

		<!-- SUB-SLIDER -->
		<div class="bg-oficial col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex flex-row flex-wrap">
			<div class="col-sm-0 col-md-0 col-lg-1 col-xl-1"></div>
			<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 d-flex-row-center b">
				<div class="d-flex-column-center">
					<i class="fa-2x fas fa-book"></i>
				</div>
				<div class="d-flex flex-column justify-content-center align-items-center pl-3">
					<h2>Compromisso</h2>
					<p>Acompanhamento de todo o processo</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 d-flex-row-center b">
				<div class="d-flex-column-center">
					<i class="fa-2x fas fa-balance-scale"></i>
				</div>
				<div class="d-flex flex-column justify-content-center align-items-center pl-3">
					<h2>Experiência</h2>
					<p>18 anos no mercado</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 d-flex-row-center b">
				<div class="d-flex-column-center">
					<i class="fa-2x far fa-thumbs-up"></i>
				</div>
				<div class="d-flex flex-column justify-content-center align-items-center pl-3">
					<h2>Credibilidade</h2>
					<p>Segurança para os nossos clientes</p>
				</div>
			</div>
			<div class="col-sm-0 col-md-0 col-lg-1 col-xl-1"></div>
		</div>
		<!-- FIM SUB-SLIDER -->
	</section>

	<!-- FRASE DESTAQUE -->
	<section id="frasedestaque">
		<div class="container p-5 text-center">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<blockquote>
					Teu dever é lutar pelo direito, mas se um dia encontrares o direito em conflito com a justiça, lute pela justiça. 
				</blockquote>
				<cite></cite>
			</div>
		</div>
	</section>
	<!-- FIM COMENTÁRIOS CLIENTES -->

	<!-- SERVIÇOS -->
	<!-- <section id="servicos">
		<div class="container d-flex flex-row">
			<div class="col-lg-3 col-xl-3 relative">
				<figure class="effect-apollo">
					<img src="http://lawyer.webtemplatemasters.com/wp-content/uploads/2017/07/service-item-thumb-1.jpg" alt="foto1">
					<div class="effect-apollo__overlay 1"></div>
				</figure>
				<div class="card-content p-2">
					<h4>Rapidez</h4>
					<p>Prestar serviços jurídicos personalizados com excelência técnica, cumprimento dos prazos administrativos e judiciais.</p>
				</div>
			</div>
			<div class="col-lg-3 col-xl-3 relative">
				<figure class="effect-apollo">
					<img src="http://lawyer.webtemplatemasters.com/wp-content/uploads/2017/07/service-item-thumb-2.jpg" alt="foto2">
					<div class="effect-apollo__overlay 2"></div>
				</figure>
				<div class="card-content p-2">
					<h4>Qualidade</h4>
					<p>Profissionais dedicados ao profundo conhecimento das dinâmicas e processos de cada cliente para melhor defendê-los, bem como alcançar seus interesses.</p>
				</div>
			</div>
			<div class="col-lg-3 col-xl-3 relative">
				<figure class="effect-apollo">
					<img src="http://lawyer.webtemplatemasters.com/wp-content/uploads/2017/07/service-item-thumb-3.jpg" alt="foto3">
					<div class="effect-apollo__overlay 3"></div>
				</figure>
				<div class="card-content p-2">
					<h4>Visão</h4>
					<p>Atuação preventiva, consultiva e contenciosa, auxiliando as empresas nas suas decisões diárias em contratos.</p>
				</div>
			</div>
			<div class="col-lg-3 col-xl-3 relative">
				<figure class="effect-apollo">
					<img src="http://lawyer.webtemplatemasters.com/wp-content/uploads/2017/07/service-item-thumb-4.jpg" alt="foto4">
					<div class="effect-apollo__overlay 4"></div>
				</figure>
				<div class="card-content p-2">
					<h4>Carreira</h4>
					<p>Atuando há quase vinte anos no mercado com uma vasta experiência na área jurídica, o nosso objetivo é prestar assessoria com excelência.</p>
				</div>
			</div>
		</div>
	</section> -->
	<!-- FIM SERVIÇOS -->

	<!-- EXPERIENCIAS -->
	<section id="experiencias">
		<div class="container text-center relative">
			<h2>Áreas de Atuação</h2>
			<div class="d-flex flex-row flex-wrap">
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
					<a href="{{route('site.direitodoconsumidor')}}">
						<section class="tile effect-bubba">
							<i class="fas fa-book fa-2x i"></i>	
							<h3 class="tile__title">Direito do Consumidor</h3>
							<p class="tile__description">A aplicação do Direito do Consumidor se dá em questões conflituosas entre consumidores e fornecedores de produtos e serviços...</p>
							<i class="tile__arrow icon-right-4"></i>
							<i class="fas fa-arrow-right"></i>
						</section>
					</a>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
					<a href="{{route('site.direitoimobiliario')}}">
						<section class="tile effect-bubba">
							<i class="fas fa-building fa-2x i"></i>	
							<h3 class="tile__title">Direito Imobiliário</h3>
							<p class="tile__description">Assessoria para todas as etapas da incorporação imobiliária, em suas diversas modalidades, seja no desenvolvimento...</p>
							<i class="tile__arrow icon-right-4"></i>
							<i class="fas fa-arrow-right"></i>
						</section>
					</a>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
					<a href="{{route('site.direitodafamilia')}}">
						<section class="tile effect-bubba">
							<i class="fas fa-gavel fa-2x i"></i>
							<h3 class="tile__title">Direito da Família</h3>
							<p class="tile__description">Prestamos serviços relativamente a regime de bens no casamento; elaboramos pacto antenupcial, contrato de união...</p>
							<i class="tile__arrow icon-right-4"></i>
							<i class="fas fa-arrow-right"></i>
						</section>
					</a>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
					<a href="{{route('site.direitodassucessoes')}}">
						<section class="tile effect-bubba">
							<i class="fas fa-balance-scale fa-2x i"></i>	
							<h3 class="tile__title">Direito de Sucessão</h3>
							<p class="tile__description">A sucessão implica sempre em uma mudança na titu­laridade de bens, direitos e obrigações, podendo ocorrer através de uma relação...</p>
							<i class="tile__arrow icon-right-4"></i>
							<i class="fas fa-arrow-right"></i>
						</section>
					</a>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
					<a href="{{route('site.direitoempresarial')}}">
						<section class="tile effect-bubba">
							<i class="fab fa-black-tie fa-2x i"></i>	
							<h3 class="tile__title">Direito Empresarial</h3>
							<p class="tile__description">O Direito de empresa é das áreas que mais alterações sofreram nos últimos anos. A mais drástica adveio com a entrada em vigor...</p>
							<i class="tile__arrow icon-right-4"></i>
							<i class="fas fa-arrow-right"></i>
						</section>
					</a>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
					<a href="{{route('site.direitotrabalhista')}}">
						<section class="tile effect-bubba">
							<i class="fas fa-briefcase fa-2x i"></i>	
							<h3 class="tile__title">Direito Trabalhista</h3>
							<p class="tile__description">Em um ambiente notoriamente litigioso como é o da advocacia trabalhista no Brasil, acreditamos que o êxito judicial é resultado direto do conhecimento...</p>
							<i class="tile__arrow icon-right-4"></i>
							<i class="fas fa-arrow-right"></i>
						</section>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- FIM EXPERIENCIAS -->

	<!-- NOTICIAS -->
	<section id="noticias">
		<div class="container mb-5">
			<div class="d-flex flex-row flex-wrap">
				<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
					<h2>Últimas Notícias</h2>

					<ul class="p-0">
						@for($i = 0;$i < 3;$i++)
						<li>
							<div class="justify-content-start">
								<a href="http://www.oab.org.br{{$noticias['link'][$i]}}" target="_blank" class="date">{{$noticias['data'][$i]}} {{$noticias['mes'][$i]}} de 2018</a>
								<a href="http://www.oab.org.br{{$noticias['link'][$i]}}" target="_blank" class="title-noticias"><h4>{{$noticias['noticia'][$i]}}</h4></a>
							</div>
						</li>
						@endfor
					</ul>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
					<h2>&nbsp;</h2>
					<ul class="p-0">
						@for($i = 0;$i < 3; $i++)
						<li>
							<div class="justify-content-start">
								<a href="{{$noticias2['link'][$i]}}" target="_blank" class="date">{{$noticias2['data'][$i]}} {{$noticias2['mes'][$i]}} de 2018</a>
								<a href="{{$noticias2['link'][$i]}}" target="_blank" class="title-noticias"><h4>{{$noticias2['noticia'][$i]}}</h4></a>
							</div>
						</li>
						@endfor
					</ul>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
					<h2>&nbsp;</h2>
					<ul class="p-0">
						@for($i = 3;$i < 6; $i++)
						<li>
							<div class="justify-content-start">
								<a href="{{$noticias2['link'][$i]}}" target="_blank" class="date">{{$noticias2['data'][$i]}} {{$noticias2['mes'][$i]}} de 2018</a>
								<a href="{{$noticias2['link'][$i]}}" target="_blank" class="title-noticias"><h4>{{$noticias2['noticia'][$i]}}</h4></a>
							</div>
						</li>
						@endfor
					</ul>
					<!-- <img src="{{asset('img/logo.png')}}" alt="LOGOMARCA" class="img-fluid"> -->
					<!-- <blockquote class="blockquote blockquotestyle-1 noticias-blockquote">Nossa empresa Laticinio Bethe só tem a agradecer pelo trabalho sério prestado por você Dra. Stela, pelas conquistas judiciais. Parabéns a nova arquitetura no seu escritório! Muito sucesso e que Senhor Jesus abençoe mais e mais, um grande abraço.</blockquote>
					<div class="d-flex-row-end author-client">
						<ul class="p-0">
							<li style="border:0">
								<div class="d-flex-row-end">
									<img src="http://via.placeholder.com/70x70" alt="foto1" width="70px;">
									<div class="text-center d-flex-column-center">
										<cite class="author">Latícinio Bethe</cite>
										<span class="funcao">
											Cliente
										</span>
									</div>
								</div>
							</li>
						</ul>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!-- FIM NOTICIAS -->
	<hr>
	<!-- PROFISSIONAIS -->
	<section id="profissionais">
		<div class="container mt-5">
			<div class="d-flex flex-row flex-wrap">
				<div class="col-sm-12 col-md-12 col-md-12 col-lg-9 col-xl-9 d-flex flex-row flex-wrap">
					<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center team">
						<div class="team-person relative">
							<div class="team-person__img effect-apollo relative">
								<img src="{{asset('img/stela.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">
								<div class="effect-apollo__overlay"></div>
							</div>
							<h5 class="team-person__name">Stela Anicácio</h5>
							<p class="team-person__position">Açailândia, Advogada</p>
							<a href="{{route('site.advogados')}}" class="team-person__link">Advogada <!-- <i class="fas fa-arrow-right"></i> --></a>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center team">
						<div class="team-person relative">
							<div class="team-person__img effect-apollo relative">
								<img src="http://via.placeholder.com/433x432" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">						<div class="effect-apollo__overlay"></div>
							</div>
							<h5 class="team-person__name">Advogado(a)</h5>
							<p class="team-person__position">Açailândia, Advogado(a)</p>
							<a href="{{route('site.advogados')}}" class="team-person__link">Advogado(a) <!-- <i class="fas fa-arrow-right"></i> --></a>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center team">
						<div class="team-person relative">
							<div class="team-person__img effect-apollo relative">
								<img src="http://via.placeholder.com/433x432" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">						<div class="effect-apollo__overlay"></div>
							</div>
							<h5 class="team-person__name">Advogado(a)</h5>
							<p class="team-person__position">Açailândia, Advogado(a)</p>
							<a href="{{route('site.advogados')}}" class="team-person__link">Advogado(a) <!-- <i class="fas fa-arrow-right"></i> --></a>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center team">
						<div class="team-person relative">
							<div class="team-person__img effect-apollo relative">
								<img src="http://via.placeholder.com/433x432" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">						<div class="effect-apollo__overlay"></div>
							</div>
							<h5 class="team-person__name">Advogado(a)</h5>
							<p class="team-person__position">Açailândia, Advogado(a)</p>
							<a href="{{route('site.advogados')}}" class="team-person__link">Advogado(a) <!-- <i class="fas fa-arrow-right"></i> --></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-xl-3">
						
				</div>	
			</div>
		</div>
	</section>
	<!-- FIM PROFISSIONAIS -->

</main>

@endsection