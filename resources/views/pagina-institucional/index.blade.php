@extends('layout.site')

@section('titulo', '.:: Institucional ::.')

@section('conteudo')

<script>
	$('nav').find('.active').removeClass('active');
	$('#institucional').addClass('active');
</script>

<div class="container-fluid p-0">
	<div class="secao-header d-flex-row-center p-0">
		<h1>Institucional</h1>
	</div>
</div>

<div class="fotosobre">
	<img src="" alt="" class="fotoSlide">
	<div class="close-icon"><i class="fas fa-times fa-2x"></i></div>
</div>

<div class="container">
	<div class="secao-conteudo">
		<h2>O Escritório</h2>
		<div class="col-sm-12 col-lg-12 col-xl-12 d-flex flex-row">
			<div class="col-sm-12 col-lg-9 col-xl-9 p-0">
				<div class="col-sm-12 col-lg-12 col-xl-12">
					<figure class="effect-apollo mb-4">
						<img src="{{asset('img/fachada1.jpg')}}" alt="foto1" class="img-fluid">
						<div class="effect-apollo__overlay 1"></div>
					</figure>
			
					<p>A Stela Anicácio Advogados Associados preza pelo pleno entendimento das necessidades e atividades de seus clientes, buscando, através da análise e compreensão do mercado, assim como da atuação integrada entre equipe, fazer o diferencial da prestação de serviços oferecida. Ética, transparência e ações altamente personalizadas qualificam a atuação do escritório e garantem segurança e inovação dos serviços jurídicos oferecidos.</p>
				</div>

				<div class="d-flex flex-row p-0">
					<div class="col-sm-12 col-lg-12 col-xl-12 d-flex flex-row p-0">
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 p-0">
							<figure class="effect-apollo p-3 escritorio">
								<img src="{{asset('img/escritorio1.jpg')}}" alt="foto1" class="img-fluid">
								<div class="effect-apollo__overlay 1"></div>
							</figure>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 p-0">
							<figure class="effect-apollo p-3 escritorio">
								<img src="{{asset('img/escritorio2.jpg')}}" alt="foto1" class="img-fluid">
								<div class="effect-apollo__overlay 1"></div>
							</figure>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 p-0">
							<figure class="effect-apollo p-3 escritorio">
								<img src="{{asset('img/escritorio3.jpg')}}" alt="foto1" class="img-fluid">
								<div class="effect-apollo__overlay 1"></div>
							</figure>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

@endsection