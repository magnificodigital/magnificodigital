</main>
<div class="top-footer">
	<div class="container">
		<i class="fa fa-envelope" aria-hidden="true"></i>
		<h3>Inspire-se</h3>
		<p>Receba insights e novidades por e-mail.</p>
		<a href="#" class="button">Inscrever-se</a>
	</div>
</div>
<footer id="site">
	<div class="container">
		<div class="row">
			<div class="col-md-1">
				<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>">
					<img width="50" height="50" src="<?php bloginfo('template_url') ?>/blognovo/img/magnifico-cinza.svg" alt="<?php bloginfo('name') ?>">
				</a>
			</div>
			<div class="col-md-8">
				<?php wp_nav_menu() ?>
			</div>
			<div class="col-md-3">
				<ul class="socials">
					<li><a href="https://plus.google.com/104838788145699222701" target="_blank"><i class="fa fa-google"></i></a></li>
					<li><a href="https://www.instagram.com/magnificodigital/" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.facebook.com/magnificodigital/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.linkedin.com/company-beta/9336208/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCrgmB2mw5jyERmwCjc6R7CA" target="_blank"><i class="fa fa-youtube"></i></a></li>
					<!--<li><a href="#"><i class="fa fa-rss"></i></a></li>-->
				</ul>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer() ?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/blognovo/js/main.js"></script>
<script type="text/javascript">

	$('.readmore').on('click',function(){
		var header = $('header#site').outerHeight();
		var post = $('article.content-post').offset().top;
		var scroll = post - header;
		$.scrollTo((scroll) || 0, 750);
	});

	document.addEventListener('DOMContentLoaded', function(){
		Typed.new('.calltoaction article h1 span', {
			strings: ["Nós fazemos sua empresa <span class='verde'>vender cada vez mais.</span>","Faça um <a href='http://magnificodigital.com/descobrir/' target='_blank' class='verde'>Raio X Digital</span>"],
			typeSpeed: 50,
			loop: true,
			backDelay: 5000 //tempo que as palavras ficam sem ser apagadas.
		});
	});

</script>
<script type="text/javascript" src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script type="text/javascript">
	window.sr = ScrollReveal({

	// 'bottom', 'left', 'top', 'right'
	origin: 'top',

	// Can be any valid CSS distance, e.g. '5rem', '10%', '20vw', etc.
	distance: '-20px',

	// Time in milliseconds.
	duration: 300,
	delay: 0,

	// Starting angles in degrees, will transition from these values to 0 in all axes.
	rotate: { x: 0, y: 0, z: 0 },

	// Starting opacity value, before transitioning to the computed opacity.
	opacity: 0,

	// Starting scale value, will transition from this value to 1
	scale: 1,

	// Accepts any valid CSS easing, e.g. 'ease', 'ease-in-out', 'linear', etc.
	//easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
	easing: 'linear',

	// `<html>` is the default reveal container. You can pass either:
	// DOM Node, e.g. document.querySelector('.fooContainer')
	// Selector, e.g. '.fooContainer'
	container: window.document.documentElement,

	// true/false to control reveal animations on mobile.
	mobile: false,

	// true:  reveals occur every time elements become visible
	// false: reveals occur once as elements become visible
	reset: false,

	// 'always' — delay for all reveal animations
	// 'once'   — delay only the first time reveals occur
	// 'onload' - delay only for animations triggered by first load
	useDelay: 'once',

	// Change when an element is considered in the viewport. The default value
	// of 0.20 means 20% of an element must be visible for its reveal to occur.
	viewFactor: 0.2,

	// Pixel values that alter the container boundaries.
	// e.g. Set `{ top: 48 }`, if you have a 48px tall fixed toolbar.
	// --
	// Visual Aid: https://scrollrevealjs.org/assets/viewoffset.png
	viewOffset: { top: 0, right: 0, bottom: 2300, left: 0 },

	// Callbacks that fire for each triggered element reveal, and reset.
	beforeReveal: function (domEl) {},
	beforeReset: function (domEl) {},

	// Callbacks that fire for each completed element reveal, and reset.
	afterReveal: function (domEl) {},
	afterReset: function (domEl) {}


});
sr.reveal('.reveal');
</script>

</body>
</html>
