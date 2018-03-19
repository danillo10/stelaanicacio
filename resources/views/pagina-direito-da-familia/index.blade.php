@extends('layout.site')

@section('titulo', '.:: Direito da Família ::.')

@section('conteudo')

<script>
	$('nav').find('.active').removeClass('active');
	$('#areasdeatuacao').addClass('active');
</script>

<div class="container-fluid p-0">
	<div class="secao-header d-flex-row-center p-0">
		<h1>Direito da Família</h1>
	</div>
</div>

<div class="container mt-5">
	<div class="secao-conteudo">
		<h2>Descrição</h2>
		<div class="d-flex flex-row flex-wrap">
			<div class="col-sm-12 col-lg-9 col-xl-9 p-0">
				<figure class="effect-apollo mb-4">
					<img src="{{asset('img/familia.jpg')}}" alt="foto1" class="img-fluid">
					<div class="effect-apollo__overlay 1"></div>
				</figure>
				<p>Prestamos serviços relativamente a regime de bens no casamento; elaboramos pacto antenupcial, contrato de união estável por instrumento público ou particular. Realizamos divórcios e inventários em cartório denotas e em juízo, nos casos previstos em lei. Promovemos a abertura de testamentos, de inventários, divórcio amigável ou litigioso, pedido de pensão alimentícia, guarda de filhos.
				</p>

				<h4>Confira os casos que mais são procurados em nosso escritório:</h4>

				<div class="d-flex flex-row">
					<div class="col-lg-6 col-xl-6">
						<ul class="p-0">
							<li>Constituição de união estável</li>
							<li>Reconhecimento de união estável</li>
							<li>Herança</li>
							<li>Escritura de inventário e partilha</li>
							<li>Inventário e partilha em juízo</li>
							<li>Arrolamento</li>
							<li>Testamento público e particular</li>
							<li>Revogação de testamento</li>
							<li>Responsabilidade do espólio</li>
							<li>Inventariante</li>
							<li>Testamenteiro</li>
							<li>Herdeiros</li>
							<li>Cônjuge sobrevivente</li>
							<li>Descendentes</li>
							<li>Ascendentes</li>
							<li>Colaterais</li>
							<li>Anulação de partilha</li>
							<li>Sobrepartilha</li>
							<li>Planejamento sucessório</li>
							<li>Regime de bens no casamento</li>
							<li>Comunhão universal de bens</li>
							<li>Comunhão parcial de bens</li>
							<li>Separação total de bens</li>
						</ul>
					</div>
					<div class="col-lg-6 col-xl-6">
						<ul class="p-0">
							<li>Pacto antenupcial</li>
							<li>União homoafetiva</li>
							<li>Divórcio consensual</li>
							<li>Divórcio litigioso</li>
							<li>Escritura de divórcio e partilha</li>
							<li>Dissolução de união estável</li>
							<li>Separação de corpos</li>
							<li>Arrolamento de bens</li>
							<li>Guarda de filhos</li>
							<li>Guarda compartilhada e alternada</li>
							<li>Alimentos</li>
							<li>Pensão alimentícia</li>
							<li>Revisão de pensão alimentícia</li>
							<li>Exoneração da obrigação de pagar pensão alimentícia</li>
							<li>Tutela</li>
							<li>Curatela</li>
							<li>Interdição</li>
							<li>Investigação de paternidade</li>
							<li>Reconhecimento de filho</li>
							<li>Direito de menor</li>
							<li>ECA – Estatuto da Criança e do Adolescente</li>
							<li>Emancipação</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-xl-3">
				
			</div>
		</div>
	</div>
</div>

@endsection