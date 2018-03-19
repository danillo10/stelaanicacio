@extends('layout.site')

@section('titulo', '.:: Direito Imobiliário ::.')

@section('conteudo')

<script>
	$('nav').find('.active').removeClass('active');
	$('#areasdeatuacao').addClass('active');
</script>

<div class="container-fluid p-0">
	<div class="secao-header d-flex-row-center p-0">
		<h1>Direito Imobiliário</h1>
	</div>
</div>

<div class="container mt-5">
	<div class="secao-conteudo">
		<h2>Descrição</h2>
		<div class="d-flex flex-row flex-wrap">
			<div class="col-lg-9 col-xl-9 p-0">
				<figure class="effect-apollo mb-4">
					<img src="{{asset('img/imobiliario.jpg')}}" alt="foto1" class="img-fluid">
					<div class="effect-apollo__overlay 1"></div>
				</figure>
				<p>O escritório é fortemente especializado em direito imobiliário, tanto na advocacia consultiva - através de notas técnicas sobre propriedade e posse de bens imóveis e sobre outros direitos reais, do acompanhamento de lavratura de escrituras públicas e da elaboração de outros instrumentos de alienação imobiliária, da cessão ou gravame de bens imóveis; do acompanhamento de registros e averbações perante os cartórios de registro de imóveis; da elaboração de contratos concernentes a negócios imobiliários - como na área contenciosa, mediante a representação em processos administrativos ou judiciais, que tenham por objeto conflitos referentes a negócios imobiliários.</p>

				<p>O escritório Stela Anicácio &amp; Advogados Associados realiza assessoria para todas as etapas da incorporação imobiliária, em suas diversas modalidades, seja no desenvolvimento, acompanhamento e registro de incorporações imobiliárias, bem como obtenção de certidões e alvarás e por fim averbação da construção com a transferência das escrituras definitivas aos adquirentes finais dos imóveis, atendendo aos diversos tipos e formatos de empreendimentos, tais como shopping centers, hotéis, fundos imobiliários, inclusive quanto ao pleno atendimento das regras urbanísticas que disciplinam o exercício das atividades empresariais no solo urbano.</p>

				<h4>Oferecemos os seguintes serviços em assessoria jurídico-imobiliária:</h4>

				<ul class="p-0">
					<li>Consultoria em compra e venda de imóveis</li>
					<li>Consultoria em constituição de hipotecas, alienações fiduciárias e outras garantias de pagamento de obrigações</li>
					<li>Elaboração de incorporações para desenvolvimentos imobiliários</li>
					<li>Elaboração de acordos que envolvam permuta física ou financeira</li>
					<li>Elaboração de contratos que envolvam dação em pagamento</li>
					<li>Elaboração de pareceres nos mais diversos temas envolvendo o Direito Imobiliário</li>
					<li>Defesa em ações judiciais que envolvam o Direito Imobiliário</li>
				</ul>
			</div>
			<div class="col-lg-3 col-xl-3">
				
			</div>
		</div>
	</div>
</div>

@endsection