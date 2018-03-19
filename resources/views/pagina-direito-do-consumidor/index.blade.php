@extends('layout.site')

@section('titulo', '.:: Direito do Consumidor ::.')

@section('conteudo')

<script>
	$('nav').find('.active').removeClass('active');
	$('#areasdeatuacao').addClass('active');
</script>

<div class="container-fluid p-0">
	<div class="secao-header d-flex-row-center p-0">
		<h1>Direito do Consumidor</h1>
	</div>
</div>

<div class="container mt-5">
	<div class="secao-conteudo">
		<h2>Descrição</h2>
		<div class="d-flex flex-row flex-wrap">
			<div class="col-sm-12 col-lg-9 col-xl-9 p-0">
				<figure class="effect-apollo mb-4">
					<img src="{{asset('img/consumidor.jpg')}}" alt="foto1" class="img-fluid">
					<div class="effect-apollo__overlay 1"></div>
				</figure>
				<p>O escritório Stela Anicácio &amp; Advogados Associados oferece tanto atendimento consultivo, na prevenção e orientação do cliente sobre seus direitos e sobre as questões legais do assunto em discussão quanto atendimento contencioso, quando os conflitos instaurados já foram levados a juízo.</p>

				<p>A aplicação do Direito do Consumidor se dá em questões conflituosas entre consumidores e fornecedores de produtos e serviços. O Código de Defesa do Consumidor, cuja promulgação acabou por criar, no Direito, um ramo específico para atender às demandas que envolvem seus princípios e normas, tem como objetivos atender às necessidades dos consumidores, proteger seus interesses econômicos, garantir o respeito a sua dignidade, saúde e segurança, além de manter a transparência e harmonia nas relações de consumo.</p>

				<p>O escritório Stela Anicácio &amp; Advogados Associados também se destaca na defesa dos interesses de seus clientes frente a órgãos administrativos, como Procon e Agências Reguladoras.</p>
				
				<p>Atuando na defesa de interesses em questões relativas ao Direito do Consumidor, os serviços prestados pela Stela Anicácio &amp; Advogados Associados se destinam a causas movidas em Varas Cíveis, nas quais a exigência de advogado é obrigatória, como a processos que tramitam em Juizados Especiais, onde, apesar de não ser obrigatória, a presença de um advogado pode ser determinante para o êxito da causa.</p>

				<p>O Código de Defesa do Consumidor institui regras rígidas para as relações de consumo. Por isso, os advogados da Stela Anicácio &amp; Advogados Associados também atuam na prevenção de conflitos, orientando as partes envolvidas na redação e interpretação de contratos de consumo, além de indicarem as melhores práticas e condutas em assuntos que dizem respeito à relação entre consumidores e fornecedores, evitando, muitas vezes, o litígio.</p>

				<p>Considerando que o Código do Consumidor vem sendo aplicado às mais diversas relações empresariais, o escritório oferece sua sólida experiência e conhecimento para atuação nos mais diferentes ramos de negócios.</p>
			</div>
			<div class="col-lg-3 col-xl-3">
				
			</div>
		</div>
	</div>
</div>

@endsection