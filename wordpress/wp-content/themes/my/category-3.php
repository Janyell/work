<?php get_header(); ?>
<section class="content">
	<div class="posts">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!--
			--><div class="post">
		<?php 
			$first_img = get_first_image();
			if (!empty($first_img)) { ?>
				<div class="post__img">
					<img class="post__first-img" src="<?php echo $first_img; ?>" alt="" />
				</div><!--	
				--><div class="post__content">
			<?php } else { ?>
				<div class="post__content_all">
			<?php } ?>
					<a class="post__title" href="<?php the_permalink() ?>" title="Ссылка на: <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					<div class="post__excerpt">
					   <?php the_excerpt(); ?>
					</div>
					<div class="post__date">
						<?php the_time('j F Y');
						echo " года"; ?>
					</div>
				</div>
			</div><!--
			--><?php
		endwhile; endif; if (count($posts) % 2 == 0) { ?><!--
		--><div class="post_empty"></div><!--
		--><?php } ?>
	</div>
	<div class="pagination">
		<?php wp_pagenavi(); ?>
	</div>
</section>
<?php get_footer(); ?>