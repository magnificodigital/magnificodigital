<?php get_template_part('blognovo/header','blog'); ?>

<?php if(have_posts()):?>
<?php while(have_posts()):the_post();?>			

<section id="single-post">
	<div class="headerWrapper" style="background-image: url('<?php the_post_thumbnail_url() ?>');">>
		<header class="titleWrapper">
			<div class="container">
				<h1><?php the_title(); ?></h1>
			</div>
		</header>
	</div>
	<article role="post">
		<div class="container">
			<div class="row">
				<div class="col-md-9 pull-right">
					<?php get_template_part('inc/breadcrumbs'); ?>
					<div class="content-post">
						<?php the_content() ?>
					</div>
				</div>	
				<?php get_template_part('blognovo/sidebar','blog') ?>
			</div>
		</div>
	</article>
	<div class="related-posts">
		<div class="container">

		<h3>Posts Relacionados</h3>

			<div class="row">

				<?php $categories = get_the_category();
				$category_id = $categories[0]->cat_ID; ?>

				<?php $args = array(
		            'showposts' => 4, 
		            'orderby' => 'date',
					'order' => 'DESC',
					'post_type' => 'post'
				); 
		        ?>
		        <?php $posts = get_posts($args); ?>
		        <?php foreach ($posts as $post) : ?>
		            <div class="post">
		            	<!--<h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>-->
		            	<!--<p><?php echo substr(get_the_content(),0,100 ); ?> (...)</p>-->
		            	<div class="col-md-3 col-sm-6 col-xs-6">
							<figure class="post">
								<a href="<?php the_permalink(); ?>">
									<div class="thumbnail" style="background-image: url('<?php the_post_thumbnail_url('index_row1_2'); ?>')"></div>
								</a>
								<div class="title-wrapper">
									<a href="<?php the_permalink(); ?>"><h4><?php the_title() ?></h4></a>
								</div>
							</figure>
						</div>
		            </div>
		        <?php endforeach; ?>

	        </div>

        </div>
	</div>
</section>

<?php endwhile;?>
<?php endif;?>

<?php get_template_part('blognovo/footer','blog'); ?>

