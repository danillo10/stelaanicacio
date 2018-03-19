@extends('layout.site')

@section('titulo', '.:: Contato ::.')

@section('conteudo')

<script>
	$('nav').find('.active').removeClass('active');
	$('#contato').addClass('active');
</script>

<div class="container-fluid p-0 mt-0">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.0538187405123!2d-47.501928685852405!3d-4.947703996408007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92c5f45a554bad61%3A0x26015f352fb9b9a8!2sStela+Anic%C3%A1cio+%26+Advogados+Associados!5e1!3m2!1spt-BR!2sbr!4v1519905127516" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="container contato">
	<div class="d-flex-column-center">
		<h2>Fale Conosco</h2>
		<div class="col-sm-12 col-lg-12 col-xl-12 d-flex flex-row flex-wrap mt-4">
			<div class="col-sm-12 col-lg-4 col-xl-4">
				<address>
					<h4>Endereço</h4>
					<p>Av. Des. Tácito de Caldas, 277 - Centro, Açailândia - MA, 65930-000</p>
					<p class="phone"><i class="fas fa-phone" style="transform: rotate(100deg);"></i>(99) 3538-8902</p>
					<p class="phone"><i class="fas fa-mobile"></i>&nbsp;(99) 0000-0000</p>
					<p class="phone"><i class="fas fa-envelope"></i><a href="mailto:faleconosco@stelaanicacio.com.br">faleconosco@stelaanicacio.com.br</a></p>
				</address>
			</div>
			<div class="col-sm-12 col-lg-4 col-xl-4">
				<!-- <h4>Webchats</h4> -->
			</div>
			<div class="col-sm-12 col-lg-4 col-xl-4">
				<h4>Atendimento</h4>
				<p>Segunda à Sexta - 08:00 às 18:00</p>
				<p>Sábado - Fechado</p>
				<p>Domingo - Fechado</p>
			</div>
		</div>
	</div>

	<div class="d-flex-column-center">
		<div class="col-lg-12 col-xl-12 d-flex flex-row mt-4">
			<form class="d-flex flex-column w-100" id="contatoForm" method="post">
				{{csrf_field()}}
				<div class="d-flex flex-row flex-wrap">
					<div class="col-sm-12 col-lg-4 col-xl-4">
						<div class="form-group">
							<label for="nome">Nome *</label>
						    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" required>
						    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
						</div>
					  	<div class="form-group">
						    <label for="email">E-mail *</label>
						    <input type="email" class="form-control" id="email" name="email" required>
						</div>
						<div class="form-group">
							<label for="assunto">Assunto *</label>
						    <input type="text" class="form-control" id="assunto" name="assunto" aria-describedby="emailHelp" required>
						</div>
						<div class="form-group">
							<label for="fone">Fone</label>
						    <input type="text" class="form-control" id="fone" name="fone" aria-describedby="emailHelp">
						    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
						</div>
					</div>
					<div class="col-sm-12 col-lg-6 col-xl-6">
						<div class="form-group h-100">
						   <label for="mensagem">Mensagem</label>
						   <textarea class="form-control" id="mensagem" name="mensagem" rows="3" required></textarea>
						</div>
					</div>
				</div>
				<div class="d-flex flex-row mt-3 pl-3">
					<div class="col-lg-12 col-xl-6">
						<button class="enviar" type="submit" class="btn btn-primary">Enviar Mensagem</button>
					</div>
					<div class="col-lg-12 col-xl-6">
						<div class="g-recaptcha" data-sitekey="6LcLf0oUAAAAAACq_bD5zpf7BV5_klvNL_azaIA4"></div>
					</div>
				</div>

				<div class="d-flex flex-row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						@if($errors->any())
						<div class="alert alert-danger" role="alert">
							@foreach($errors->all() as $error)
						  		{{ $error }}
						  	@endforeach
						</div>
						@endif

						
					    <div class="alert alert-success" role="alert" style="display: none;">
						  	<!-- {{ session('status') }} -->
						  	Agradecemos o seu contato, em breve retornaremos!
						</div>

						<div class="alert alert-danger" role="alert" style="display: none;">
						  	<!-- {{ session('status') }} -->
						</div>
						
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection