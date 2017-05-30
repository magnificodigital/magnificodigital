<aside id="sidebar-blog"
	<?php
		if (is_single()) {

			echo 'class="col-md-3 pull-right"';
		} else {

			echo 'class="col-md-4"';
		}
	?>
>

	<?php if (is_single()) { ?>
	<div class="box">
		<p style="margin-bottom: 0;">Postado em <?php the_time('d/m/y') ?></p>
	</div>
	<?php } ?>

	<div class="news box">
		<h3>Inspire-se</h3>
		<p>Receba insights e novidades por e-mail.</p><br />
		<a href="#" class="button">Inscrever-se</a>
		<br /><br /><br />
		<p style="display: inline-block;">Siga</p>
		<ul class="socials">
			<li><a href="https://plus.google.com/104838788145699222701" target="_blank"><i class="fa fa-google"></i></a></li>
			<li><a href="https://www.instagram.com/magnificodigital/" target="_blank"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://www.facebook.com/magnificodigital/" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://www.linkedin.com/company-beta/9336208/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="https://www.youtube.com/channel/UCrgmB2mw5jyERmwCjc6R7CA" target="_blank"><i class="fa fa-youtube"></i></a></li>
			<!--<li><a href="#"><i class="fa fa-rss"></i></a></li>-->
		</ul>
	</div>

	<?php if (!is_single()) { ?>

	<!--
	<div class="box">
		<h3>Materiais Educativos</h3>
		<p>Ideias que misturam criatividade e tecnologia.</p>
	</div>-->

	<div class="box">
		<h3>Raio X Digital</h3>
		<p><strong>Vamos fazer um Raio X completo do seu negócio.</strong> Essa varredura vai buscar pontos críticos que estão te impedindo de executar a mais importante das estratégias digitais hoje em dia: a geração de leads para sua empresa.</p><br />
		<a href="<?php bloginfo('url') ?>/descobrir/" class="btn button">Receba uma análise gratuita</a>
	</div>

	<!--
	<div class="box">
		<h3>Funil de vendas</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nibh enim, mollis et sem non, cursus rutrum sapien. Integer id rutrum velit, a tincidunt ex.</p>
		<a href="#" class="btn button">Faça agora</a>
	</div>-->

	<div class="box">
		<h3>Leia também</h3>
		<section class="sidebar-posts">
			<?php
				$args = array(
					'orderby' => 'date',
					'order' => 'DESC',
					'showposts' => 4,
					//'offset' => 2
				);
				query_posts($args);
				if (have_posts()) : while (have_posts()) : the_post(); 
			?>
			<article class="post">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('post_sidebar'); ?>
				</a>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			</article>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</section>
	</div>

	<?php } ?>

</aside>