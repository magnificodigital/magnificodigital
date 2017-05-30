//Caixa de pesquisa
$(function(){
	var abre = $('.search span');
	var caixa = $('.searchbox');
	abre.click(function(){
		caixa.addClass('abre');
		caixa.find('#s').focus();
		$('.closebox span').click(function(){
			escondebusca();
		});
		document.onkeyup=function(e) {
			if(e.which == 27){
				escondebusca();
	  		}
		};

		function escondebusca () {
			caixa.addClass('fadeout').removeClass('abre');
		}

	});
});

//Menu mobile
$(function(){
	var botao = $('header#site .menuMobile i');
	var menu = $('header#site nav ul');
	botao.click(function(){
		menu.toggleClass('ativa');
	});
});

//Video parallax
$(document).ready(function () {
    $(window).on('load scroll', function () {
        var scrolled = $(this).scrollTop();
        $('.fullscreen-bg__video').css('transform', 'translate3d(0, ' + -(scrolled * -0.75) + 'px, 0)'); // parallax (25% scroll rate)
    });
});