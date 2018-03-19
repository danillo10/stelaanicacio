	<footer>
		<div class="footer-01 mt-5 d-flex-row-between">
			<h3 class="bh3">Precisando de uma assistência jurídica especializada ?</h3>
			<div class="relative">
				<a href="{{route('site.contato')}}">
					<div class="btn-contatar d-flex-row-center p-3"><span>Contatar agora!</span></div>
				</a>
				<div class="overlay-button">
					
				</div>
			</div>
		</div>

		<div class="footer-02">
			<div class="container pt-5 pb-5 d-flex-row-start flex-wrap">
				<div class="col-sm-12 col-lg-3 col-xl-3">
					<h3>Contato</h3>
					<p>Av. Des. Tácito de Caldas, 277 - Centro, Açailândia - MA, 65930-000</p>
					<p class="phone">(99) 3538-8902</p>
					<a href="mailto:contato@stellaanicacio.com.br">contato@stelaanicacio.com.br</a>

					<h3 class="mt-5">Newsletter</h3>
					<p>Receba nossos informativos e fique pode dentro das novidades</p>
					<div class="d-flex flex-row">
						<input type="email" name="EMAIL" class="inp-oficial" placeholder="Seu e-mail" required="">
						<button class="submit"><i class="material-icons">send</i></button>
					</div>
				</div>
				<div class="col-sm-12 col-lg-3 col-xl-3">
					<h3 class="mp-site">Mapa do Site</h3>

					<ul id="menu-footer-nav" class="menu">
						<li><a href="{{route('site.home')}}">Home</a></li>
						<li><a href="{{route('site.institucional')}}">Institucional</a></li>
						<li><a href="#experiencias">Áreas de Atuação</a></li>
						<!-- <li><a href="#">Notícias</a></li> -->
						<li><a href="{{route('site.contato')}}">Contato</a></li>
					</ul>
				</div>
				<div class="col-sm-12 col-lg-3 col-xl-3">
					<h3>Áreas de Atuação</h3>

					<ul id="menu-footer-nav" class="menu">
						<li><a href="{{route('site.direitodoconsumidor')}}">Direito do Consumidor</a></li>
						<li><a href="{{route('site.direitoimobiliario')}}">Direito Imobiliário</a></li>
						<li><a href="{{route('site.direitodafamilia')}}">Direito da Família</a></li>
						<li><a href="{{route('site.direitodassucessoes')}}">Direito das Sucessões</a></li>
						<li><a href="{{route('site.direitoempresarial')}}">Direito Empresarial</a></li>
						<li><a href="{{route('site.direitotrabalhista')}}">Direito Trabalhista</a></li>
					</ul>
				</div>
				<div class="col-sm-12 col-lg-3 col-xl-3">
					<h3>Últimas Notícias</h3>

					<ul class="news">
						@for($i = 0;$i < 3;$i++)
						<li>
							<p class="date">{{$noticias['data'][$i]}} {{$noticias['mes'][$i]}} de 2018</p>
							<a href="http://www.oab.org.br{{$noticias['link'][$i]}}" target="_blank"><h4>{{$noticias['noticia'][$i]}}</h4></a>
						</li>
						@endfor
					</ul>
				</div>
			</div>

			<div class="container">
				<div class="footer-03 d-flex-row-center">
					<div class="col-lg-9 col-xl-9"><!-- <img src="{{asset('img/logofundo-negativo.png')}}" alt="Stela Anicácio"> --></div>
					<div class="col-lg-3 col-xl-3">
						<div class="row-social-footer w-100 d-flex flex-row justify-content-end align-items-center pr-5">
				 			<a href="#" class="null h-100 relative d-flex-row-center twitter" target="_blank"><i class="fab fa-twitter text-center"></i><span class="fade-social fade-social-twitter"></span></a>
							<a href="https://www.facebook.com/stelaanicacioadvogados/" class="null h-100 relative d-flex-row-center facebook" target="_blank"><i class="fab fa-facebook-f text-center"></i><span class="fade-social fade-social-facebook"></span></a>
							<a href="#" class="null h-100 relative d-flex-row-center in" target="_blank"><i class="fab fa-linkedin-in text-center"></i><span class="fade-social fade-social-in"></span></a>
							<a href="#" class="null h-100 relative d-flex-row-center p" target="_blank"><i class="fab fa-pinterest-p text-center"></i><span class="fade-social fade-social-p"></span></a>
							<a href="#" class="null h-100 relative d-flex-row-center rss" target="_blank"><i class="fas fa-rss text-center"></i><span class="fade-social fade-social-rss"></span></a>
							<a href="#" class="null h-100 relative d-flex-row-center google" target="_blank"><i class="fab fa-google-plus-g text-center"></i><span class="fade-social fade-social-google"></span></a>
			 			</div>
					</div>
				</div>

				<div class="copyright d-flex flex-row align-items-center">
					<div class="col-lg-9 col-xl-9">
						Todos os direitos reservados &copy; 2018
					</div>
					<div class="col-lg-3 col-xl-3">
						Desenvolvido por: <a href="#">INFORSYS</a>
					</div>
				</div>	
			</div>
		</div>
	</footer>

	<!-- Google Captcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- Optional JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="{{asset('js/home.js')}}"></script>
    
  </body>
</html>