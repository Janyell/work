<?php
/*
Template Name: My Custom Page
*/
get_header(); ?>
<section class="main-menu">
	<img class="main-img" src="<?php bloginfo('template_url'); ?>/images/main-img.png" alt="Главная" />
	<a class="main-menu__installation" href="#installation">
		<img class="lower-corner-img" src="<?php bloginfo('template_url'); ?>/images/lower-corner.png" />
		Монтаж
	</a>
	<a class="main-menu__delivery" href="#delivery">
		<img class="top-corner-img" src="<?php bloginfo('template_url'); ?>/images/top-corner.png" />
		Доставка
	</a>
	<a class="main-menu__about-us" href="#about-us">
		<img class="lower-corner-img" src="<?php bloginfo('template_url'); ?>/images/lower-corner.png" />
		О компании
	</a>
	<a class="main-menu__repair" href="#repair">
		<img class="lower-corner-img" src="<?php bloginfo('template_url'); ?>/images/lower-corner.png" />
		Ремонт
	</a>
</section>
<section class="main-content">
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</section>
<section class="main-last-news">
	<?php $posts = get_posts ("category=3&orderby=date&numberposts=1"); /* news */
	if ($posts) :
	foreach ($posts as $post) : setup_postdata ($post); ?>
		<div class="last-post_news">
		<?php
			$first_img = get_first_image();
			if (!empty($first_img)) { ?>
				<div class="post__content last-post__content">
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
				</div><!--
				--><?php if (!empty($first_img)) { ?><!--
				--><div class="post__img last-post__img">
					<img class="post__first-img" src="<?php echo $first_img; ?>" alt="" />
				</div>
			<?php } ?>
			</div>
	<?php endforeach; endif; ?>
	<a class="more-news"href="<?php echo get_category_link(3); ?>">
		больше новостей
		<img class="more-img" src="<?php bloginfo('template_url'); ?>/images/more.png" />
	</a>
</section>
<section class="main-last-production">
	<?php $posts = get_posts ("category=4&orderby=date&numberposts=1");
	if ($posts) :
	foreach ($posts as $post) : setup_postdata ($post); ?>
<a class="order" href="<?php the_permalink() ?>" title="Ссылка на: <?php the_title_attribute(); ?>">
		<div class="last-post_production">

		<?php
			$first_img = get_first_image();
			if (!empty($first_img)) { ?>
				<div class="last-post_production__img">
					<img class="last-post_production__first-img" src="<?php echo $first_img; ?>" alt="" />
				</div>
			<?php } ?>
				<div class="last-post_production__content">
					<h1 class="last-post_production__category-title">
						<?php $category = get_the_category();
						echo $category[0]->cat_name; ?>
					</h1>
					<p class="post_production__title last-post_production__title"><?php the_title(); ?></p>
						<span class="order-button">заказать</span>
						<img class="more-img" src="<?php bloginfo('template_url'); ?>/images/more.png" />
				</div>
			</div></a><!--
			--><?php
		endforeach; endif; ?>
</section>
<script type="text/javascript">
	(function($){
		$(document).ready(function() {
			$('.wrapper').css({'overflow' : 'visible'});
		});
	})(jQuery);
</script>
<?php get_footer(); ?>
