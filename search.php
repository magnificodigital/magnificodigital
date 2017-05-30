<?php get_template_part('blognovo/header','blog'); ?>
<section id="search-page">
	<div class="headerWrapper" style="background-image: url('<?php bloginfo('template_url') ?>/blognovo/img/search.jpg');">
		<div class="container">
			<p class="before-query">Olá, veja o que encontramos para:</p>
			<h1 class="result verde"><?php echo get_search_query() ?></h1>
		</div>
	</div>


	<div class="container">

		<div class="row">
			
	        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
	            
	            	<div class="col-md-3 col-sm-6 col-xs-12">
						<figure class="post">
							<a href="<?php the_permalink(); ?>">
								<div class="thumbnail" style="background-image: url('<?php the_post_thumbnail('index_row1_2'); ?>')"></div>
							</a>
							<div class="title-wrapper">
								<a href="<?php the_permalink(); ?>"><h4><?php the_title() ?></h4></a>
							</div>
						</figure>
					</div>

	        <?php endwhile; endif ?>

        </div>

    </div>


</section>
<?php get_template_part('blognovo/footer','blog'); ?>

