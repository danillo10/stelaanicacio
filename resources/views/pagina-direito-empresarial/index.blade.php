@extends('layout.site')

@section('titulo', '.:: Direito Empresarial ::.')

@section('conteudo')

<script>
	$('nav').find('.active').removeClass('active');
	$('#areasdeatuacao').addClass('active');
</script>

<div class="container-fluid p-0">
	<div class="secao-header d-flex-row-center p-0">
		<h1>Direito Empresarial</h1>
	</div>
</div>

<div class="container mt-5">
	<div class="secao-conteudo">
		<h2>Descrição</h2>
		<div class="d-flex flex-row flex-wrap">
			<div class="col-sm-12 col-lg-9 col-xl-9 p-0">
				<figure class="effect-apollo mb-4">
					<img src="{{asset('img/direito.jpg')}}" alt="foto1" class="img-fluid">
					<div class="effect-apollo__overlay 1"></div>
				</figure>
				
				<p>O Direito de empresa é das áreas que mais alterações sofreram nos últimos anos. A mais drástica adveio com a entrada em vigor da Lei 10.406/2002, o Novo Código Civil, que unificou dois diplomas legais (Código Civil e Código Comercial), e introduziu definitivamente em nossa legislação à Teoria da Empresa, abolindo a Teoria dos Atos de Comércio.</p>

				<p>Também a entrada em vigor da Nova Lei de Falências revogou toda uma legislação ultrapassada e arcaica, priorizando a preservação da fonte produtiva geradora de emprego e tributos, e garantindo a rápida execução concursal nos casos em que a falência seja inevitável.</p>

				<p>Por fim, recentes alterações no Código de Processo Civil puseram fim à dicotomia processo de conhecimento-processo de execução, agilizando a execução não só de títulos judicias como também e principalmente de títulos extrajudiciais.</p>

				<p>O Direito Empresarial brasileiro, hoje, está de acordo com as principais legislações de tradição romanística do mundo, fornecendo um arcabouço legal suficientemente sólido para os desafios do novo século.</p>

				<p>Nessa área, a atuação do escritório concentra-se na recuperação de ativos financeiros nas esferas judicial e extrajudicial, inclusive e através de requerimentos de falência, ações executiva, monitória e de cobrança, além de habilitações de crédito em falências já decretadas e assessoria em processos de recuperação judicial ou extrajudicial.</p>

				<p>Patrocínio, também, dos interesses de empresas que se encontram em estado falimentar ou em recuperação judicial/extrajudicial, de forma consultiva ou contenciosa, com a análise e elaboração de planos de recuperação.</p>

				<h4>Confira a lista de casos mais procurados em nosso escritório:</h4>

				<div class="d-flex flex-row">
					<div class="col-lg-6 col-xl-6">
						<ul class="p-0">
							<li>Constituição e registro de empresas</li>
							<li>Sociedade limitada</li>
							<li>Sociedade anônima</li>
							<li>Sociedade por ações</li>
							<li>Sociedade simples</li>
							<li>Unipessoalidade superveniente</li>
							<li>Eireli</li>
							<li>Cooperativa</li>
							<li>Sociedade entre cônjuges</li>
							<li>Respons. dos sócios e dos administradores</li>
							<li>Blindagem societária</li>
							<li>Reorganização societária</li>
							<li>Transformação das sociedades</li>
							<li>Incorporação, fusão e cisão</li>
							<li>Holding</li>
							<li>Joint venture</li>
							<li>Dissolução da sociedade</li>
							<li>Exclusão de sócio</li>
							<li>Retirada de sócio</li>
							<li>Participacão de capital estrangeiro no Brasil</li>
							<li>Estabelecimento empresarial</li>
							<li>Proteção ao ponto da atividade empresarial</li>
							<li>Nome empresarial</li>
							<li>Propriedade industrial</li>
							<li>Marca</li>
							<li>Patente, desenho e modelo industrial</li>
							<li>Concorrência desleal</li>
							<li>Atos confusórios</li>
							<li>Títulos de crédito</li>
							<li>Nota promissória</li>
							<li>Cheque</li>
							<li>Duplicata</li>
							<li>Duplicata eletrônica</li>
							<li>Letra de câmbio</li>
							<li>Endosso</li>
							<li>Protesto</li>
							<li>Contratos comerciais</li>
							<li>Compra e venda mercantil</li>
							<li>Locação comercial</li>
							<li>Alienação fiduciária de móveis (Decreto 911/1969)</li>
						</ul>
					</div>
					<div class="col-lg-6 col-xl-6">
						<ul>
							<li>Conversão em ação de depósito, Habilitação e Impugnação de crédito</li>
							<li>Pedido de restituição</li>
							<li>Ação revocatória</li>
							<li>Respons. das distribuidoras de valores</li>
							<li>Recuperação judicial e extrajudicial de empresas</li>
							<li>Falência</li>
							<li>Preferências e privilégios creditórios</li>
							<li>Alienação fiduciária de imóveis (Lei nº 9.154/1997)</li>
							<li>Mora e retomada de imóvel</li>
							<li>Garantias reais e pessoais em operações bancárias</li>
							<li>Representação comercial</li>
							<li>Comissão mercantil</li>
							<li>Mandato mercantil</li>
							<li>Contrato de transporte</li>
							<li>Seguro</li>
							<li>Arrendamento mercantil – leasing</li>
							<li>Consórcio</li>
							<li>Desconto – factoring</li>
							<li>Franquia – franchising</li>
							<li>Adiantamento de contrato de câmbio – ACC</li>
							<li>Adiantamento de Cambiais Entregues – ACE</li>
							<li>Contrato de câmbio</li>
							<li>Contrato de vendor</li>
							<li>Remessa de valores ao exterior</li>
							<li>Operacões com recursos externos</li>
							<li>Contratos bancários</li>
							<li>Cessão de direito industrial</li>
							<li>Licença de uso de direito industrial</li>
							<li>Software</li>
							<li>Transferência de tecnologia</li>
							<li>Mercado de capitais</li>
							<li>Ações</li>
							<li>Debêntures</li>
							<li>Cotas de fundos de investimento</li>
							<li>Acordo de acionistas</li>
							<li>Custódia</li>
							<li>Securitização</li>
							<li>Respons. das companhias na oferta de ações</li>
							<li>Respons. dos gestores e controladores</li>
							<li>Respons. das corretoras de investimentos</li>
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