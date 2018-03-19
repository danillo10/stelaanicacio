@extends('layout.site')

@section('titulo', '.:: Direito Trabalhista ::.')

@section('conteudo')

<script>
	$('nav').find('.active').removeClass('active');
	$('#areasdeatuacao').addClass('active');
</script>

<div class="container-fluid p-0">
	<div class="secao-header d-flex-row-center p-0">
		<h1>Direito Trabalhista</h1>
	</div>
</div>

<div class="container mt-5">
	<div class="secao-conteudo">
		<h2>Descrição</h2>
		<div class="d-flex flex-row flex-wrap">
			<div class="col-sm-12 col-lg-8 col-xl-8 p-0">
				<figure class="effect-apollo mb-4">
					<img src="{{asset('img/trabalhista.jpg')}}" alt="foto1" class="img-fluid">
					<div class="effect-apollo__overlay 1"></div>
				</figure>
				
				<p>Em um ambiente notoriamente litigioso como é o da advocacia trabalhista no Brasil, acreditamos que o êxito judicial é resultado direto do conhecimento e da experiência dos advogados envolvidos. Na Stela Anicácio &amp; Advogados Associados, nossos especialistas em direito trabalhista são amplamente reconhecidos por sua habilidade em prestar consultoria jurídica integrada e desenhar estratégias para obter o melhor resultado para seus clientes.</p>

				<h4>Nossa equipe tem sólida experiência no assessoramento a grandes grupos empresariais dos mais diversos setores da economia em questões tais como:</h4> 
				<ul>
					<li>Reclamações individuais</li>
					<li>Ações coletivas e ações civis públicas propostas por sindicatos e pelo Ministério Público do Trabalho (MPT)</li>
					<li>Contencioso administrativo e judicial sobre aspectos sujeitos à fiscalização do Ministério Público do Trabalho, como terceirização.</li>
				</ul>
				<p>Nossa atuação caracteriza-se pela abordagem multidisciplinar e integração com outras áreas do direito, como societário, tributário, contratos cíveis e propriedade intelectual, relevantes para as empresas contratantes de mão de obra no Brasil.</p>
	
				<p>Por exemplo, nossa equipe presta assessoria completa em auditorias trabalhistas e possui uma tradição de trabalhar em estreita colaboração com advogados especializados em fusões e aquisições e tributário, bem como com auditores contáveis, para facilitar uma avaliação precisa das rotinas trabalhistas e do contencioso de nossos clientes.</p>

				<p>Atuando com ética, transparência e respeito recíproco, Stela Anicácio &amp; Advogados Associados goza de excelente reputação por sua atuação em negociações sindicais em vários setores, sem prejuízo de litigar quando o impasse resultar em greve.</p>

				<!-- <p>É frequente a nossa colaboração com escritórios estrangeiros e empresas multinacionais em casos de expatriação e transferências internacionais, casos em que a nossa experiência com harmonização de leis e culturas diferentes representa uma vantagem singular.</p> -->

				<!-- <p>A equipe da Stela Anicácio &amp; Advogados Associados presta assessoria jurídica com relação à oferta de empregos a executivos, talentos especiais e outros profissionais. Oferecemos consultoria sobre implantação e gestão de política salarial, planos de cargos e salários e normas de equiparação, e somos pioneiros no aconselhamento e implantação de planos de opção de compra de ações (stock options).</p> -->

				<!-- <h4>A rescisão de contratos de executivos e talentos, seja por dispensa ou pedido de demissão, é uma tarefa complexa que exige um equilíbrio entre firmeza de propósito e tratamento cortês. Nesse sentido, nossos serviços incluem:</h4> 
				
				<ul>
					<li>Orientação para demissões coletivas e preparação para negociações ou litígios decorrentes</li>
					<li>Assessoria em matéria de proteção de direitos de propriedade imaterial e assédio no local de trabalho</li>
					<li>Negociação e redação de acordos especiais de rescisão, tais como acordos de confidencialidade, limitações legítimas e razoáveis à competição e benefícios e obrigações para o empregado</li>
				</ul> -->

				<p>O Escritório oferece serviços relacionados à prevenção e à gestão de riscos relacionados ao ambiente de trabalho e à gestão de pessoas. Assessoramos empresas na compreensão e cumprimento das normas e padrões desejáveis de saúde e segurança no ambiente de trabalho de forma a prevenir riscos de acidentes ou de penalidades administrativas para as empresas. Colaboramos na redação de políticas ou adaptação de manuais internacionais às leis brasileiras evitando assim choques ou lacunas culturais. Também fornecemos consultoria e treinamento para prevenção de desvios de conduta que possam resultar em conflitos entre empregador e empregados ou entre empregados de diferentes hierarquias.</p>
			</div>
			<div class="col-lg-3 col-xl-3">
				
			</div>
		</div>
	</div>
</div>

@endsection