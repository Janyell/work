<?php get_header(); ?>
<section class="content">
	<h1 class="post__title post__title_padding_xl">Наши клиенты - мировые лидеры</h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!--
		--><div class="post">
			<div class="post__header">
	<?php
		$logo = get_first_image();
		if (!empty($logo)) { ?>
				<a href="<?php the_permalink() ?>" title="Ссылка на: <?php the_title_attribute(); ?>"><img class="post__logo" src="<?php echo $logo; ?>" alt="<?php the_title_attribute(); ?>"/></a>
		<?php } else { ?>
				<a class="post__title post__title_bottom" href="<?php the_permalink() ?>" title="Ссылка на: <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		<?php } ?>
			</div>
			<div class="post__content_all">
				<div class="post__excerpt">
				   <?php the_excerpt(); ?>
				</div>
			</div>
		</div><!--
		--><?php
	endwhile; endif; ?>
</section>
<?php get_footer(); ?>
