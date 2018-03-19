@extends('layout.site')

@section('titulo', '.:: Direito das Sucessões ::.')

@section('conteudo')

<script>
	$('nav').find('.active').removeClass('active');
	$('#areasdeatuacao').addClass('active');
</script>

<div class="container-fluid p-0">
	<div class="secao-header d-flex-row-center p-0">
		<h1>Direito das Sucessões</h1>
	</div>
</div>

<div class="container mt-5">
	<div class="secao-conteudo">
		<h2>Descrição</h2>
		<div class="d-flex flex-row flex-wrap">
			<div class="col-sm-12 col-lg-9 col-xl-9 p-0">
				<figure class="effect-apollo mb-4">
					<img src="{{asset('img/sucessao.jpg')}}" alt="foto1" class="img-fluid">
					<div class="effect-apollo__overlay 1"></div>
				</figure>
				<p>A sucessão implica sempre em uma mudança na titu­laridade de bens, direitos e obrigações, podendo ocorrer através de uma relação entre pessoas vivas (inter vivos) ou em decorrência do falecimento de alguém (causa mortis).</p>

				<p>O momento da sucessão pode ser bastante delicado, especialmente nos casos de sucessão causa mortis, trazendo desafios e muitas vezes conflitos entre os familiares, que poderiam ser evitados se um planejamento sucessório tivesse sido elaborado.</p>

				<p>Neste contexto, um suporte jurídico especializado se torna fundamental para minimizar os conflitos familiares, a fim de se evitar longos processos judiciais e, consequentemente, o enfraquecimento dos laços familiares e a perda ou a deterioração do próprio patrimônio familiar.
				</p>

				<h4>A atuação do escritório Stela Anicácio &amp; Advogados Associados no Direito das Sucessões abrange:</h4>

				<div class="d-flex flex-row">
					<div class="col-lg-6 col-xl-6">
						<ul class="p-0">
							<li>Planejamento Sucessório</li>
							<li>Doação</li>
							<li>Elaboração de Testamentos</li>
							<li>Diretivas Antecipadas de Vontade (Testamento Vital)</li>
							<li>Inventário judicial e Extrajudicial</li>
							<li>Partilha e Sobrepartilha de bens</li>
							<li>Anulação de Partilha</li>
							<li>Colação</li>
							<li>Composição entre herdeiros</li>
							<li>Alvarás em geral</li>
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