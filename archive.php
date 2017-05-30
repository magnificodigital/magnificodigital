<?php get_template_part('blognovo/header','blog'); ?>
<section id="single-post">
	<div class="headerWrapper" style="background-image: url(<?php the_post_thumbnail_url() ?>);">
		<div class="container">
			<h1><?php echo single_cat_title() ?></h1>
		</div>
	</div>

	<section class="posts-grid">
		<div class="container">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article class="post">
					<div class="row">
						<div class="col-md-8 thumb">
							<div class="">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('post_archive'); ?>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="title">
								<ul class="categories">
									<?php
										$categorias = get_the_category(get_the_ID());
										foreach ($categorias as $categoria) {
											$id = get_cat_ID( $categoria->cat_name );
											$link = get_category_link($id);
											echo '<li><a href="'.$link.'">'.$categoria->cat_name.'</a></li>';
										}
									?>
								</ul>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><a href="<?php the_permalink(); ?>"><?php echo substr(get_the_content(),0,100 ); ?> [...]</a></p>
								<a href="<?php the_permalink(); ?>"><span class="read-more">Leia mais</span></a>
							</div>
						</div>
					</div>
				</article>

			<?php endwhile; endif; ?>

		</div>
	</section>

</section>
<?php get_template_part('blognovo/footer','blog'); ?>

