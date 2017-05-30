<?php get_template_part('blognovo/header','blog'); ?>
<section id="row1">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-xs-12 col">
				<div class="fullscreen-bg">
				    <video muted autoplay loop title="<?php bloginfo('name') ?>" class="fullscreen-bg__video">
						<source src="<?php bloginfo('template_url') ?>/blognovo/media/magnifico.mp4" type="video/mp4" />
						<source src="<?php bloginfo('template_url') ?>/blognovo/media/Video_magnifico.mp4.webm" type="video/webm" />
						<source src="<?php bloginfo('template_url') ?>/blognovo/media/Video_magnifico.mp4.ogv" type="video/ogg" />
					</video>
					<div class="maskVideo"></div>
				</div>
				<div class="calltoaction">
					<article>
						<h1><span></span></h1>
						<!--<a href="#" class="button">Saiba mais</a>-->
					</article>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col">
				<div class="container-fluid">
					<div class="row">

						<?php 

							if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
                            elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
                            else { $paged = 1; }

							$args = array(
								'showposts' => 2,
								'orderby' => 'date',
								'order' => 'DESC',
								'paged'=>$paged
							); 

							global $loop;
							$loop = new WP_query( $args );

						?>
						<?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
						<div class="col-md-12 col-sm-6 col-xs-12 col">
							<figure class="post">
								<a href="<?php the_permalink(); ?>">
									<div class="thumbnail" style="background-image: url('<?php the_post_thumbnail_url('index_row1_2'); ?>')"></div>
								</a>
								<div class="title-wrapper">
									<a href="<?php the_permalink(); ?>"><h2><?php the_title() ?></h2></a>
									<a href="<?php the_permalink(); ?>"><span class="read-more">Leia mais</span></a>
								</div>
							</figure>
						</div>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

					</div>	
				</div>
			</div>
		</div>
	</div>
</section>


<section id="row2">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php 

					$args = array(
						'orderby' => 'date',
						'order' => 'DESC',
						'showposts' => 10,
						//'offset' => 2,
						'paged'=>$paged
					);
					global $loop;
					$loop = new WP_query( $args );
					if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
				?>
			
				<article class="post reveal">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-5 thumb">
								<div class="thumbnail">
									<a href="<?php the_permalink() ?>">

										<?php if (has_post_thumbnail()) {
											$formato = substr(get_the_post_thumbnail_url(),-4,4);
											if ($formato == ".gif") {
												the_post_thumbnail();
											} else {
												the_post_thumbnail('index_row2');
											}
										} ?>

									</a>
								</div> 
							</div>
							<div class="col-sm-7">
								<div class="title-wrapper">
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
									<a href="<?php the_permalink(); ?>"><h3><?php the_title() ?></h3></a>
									<a href="<?php the_permalink(); ?>" class="read-more"><span>Leia mais</span></a>
								</div>
							</div>
						</div>
					</div>
				</article>
		
				<?php endwhile;

                $big = 999999999;
                $p = array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $loop->max_num_pages
                );

                echo '<div class="navigation">'.paginate_links($p).'</div>';
				endif; ?>


			</div>
				
			<?php get_template_part('blognovo/sidebar','blog') ?>
			
		</div>
	</div>
</section>
<?php get_template_part('blognovo/footer','blog'); ?>
