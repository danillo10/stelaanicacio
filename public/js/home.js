var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content')

// MENU COLADO NO TOPO
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('.nav-main').addClass('fixed');
    } else {
        $('.nav-main').removeClass('fixed');
    }
});

$('.escritorio').on('click', function(){
	var img = $(this).find('img').attr('src')
	$('.fotosobre').fadeIn(1000).css('display','flex')
	$('.fotoSlide').attr('src',img).css({'max-height':'99%','max-width':'100%'})
})

$('.close-icon, .fotosobre').on('click', function(){
	$('.fotosobre').fadeOut(1000)
})


/** 
  Formulário de Contato
*/ 

$('#contatoForm').on('submit', function(e){

  e.preventDefault()

  var recaptcha = grecaptcha.getResponse()

  if(grecaptcha.getResponse() == '') return alert("Preencha o recaptcha...");

  $.ajax({
    url:'/enviaContato',
    type: 'POST',
    data: {
      'nome': $('#nome').val(),
      'email': $('#email').val(),
      'assunto': $('#assunto').val(),
      'fone': $('#assunto').val(),
      'mensagem': $('#mensagem').val(),
      'g-recaptcha-response': recaptcha,
      _token: CSRF_TOKEN
    },
    dataType: 'json',
    success: function(data){
      if(data.status == 0) return alert(data.mensagem)
      $('.alert-success').css('display','flex')
    },
    error: function(error){
      $('.alert-danger').css('display','flex').html(error.mensagem)
    }
  })

})

/* ANCORA */

$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {

    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - 100
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          // $target.focus();
          // if ($target.is(":focus")) { // Checking if the target was focused
          //   return false;
          // } else {
          //   $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          //   $target.focus(); // Set focus again
          // };
        });
      }
    }
})