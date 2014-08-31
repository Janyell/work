<?php get_header(); ?>
<section class="main-menu">
	<img class="main-img" src="<?php bloginfo('template_url'); ?>/images/main-img.png" alt="Главная" />
	<?php wp_nav_menu('menu=home-menu'); ?>
</section>
<section class="main-content">
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</section>
<section class="main-last-news">
	<?php $posts = get_posts ("category_name=news&orderby=date&numberposts=1");
	if ($posts) :
	foreach ($posts as $post) : setup_postdata ($post); ?>
		<div class="last-post_news">
		<?php
			$first_img = get_first_image();
			if (has_post_thumbnail() || !empty($first_img)) { ?>
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
						get_lang_switch($cur_lang, ' года', '', ''); ?>
					</div>
				</div><!--
				--><?php if (has_post_thumbnail()) { ?><!--
					--><div class="post__img last-post__img">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php } else {
					if (!empty($first_img)) { ?><!--
					--><div class="post__img last-post__img">
						<img class="post__first-img" src="<?php echo $first_img; ?>" alt="" />
					</div>
				<?php } ?>
			<?php } ?>
			</div>
	<?php endforeach; endif; ?>
	<a class="more-news"href="<?php echo get_category_link(3); ?>">
		<?php $cur_lang = get_cur_lang(); 
		get_lang_switch($cur_lang, 'больше новостей', 'more news', 'mehr News'); ?>
		<img class="more-img" src="<?php bloginfo('template_url'); ?>/images/more.png" />
	</a>
</section>
<section class="main-last-production">
	<?php $posts = get_posts ("category_name=production&orderby=date&numberposts=1");
	if ($posts) :
	foreach ($posts as $post) : setup_postdata ($post); ?>
		<a class="order" href="<?php the_permalink() ?>" title="Ссылка на: <?php the_title_attribute(); ?>">
		<div class="last-post_production">

		<?php
			if (has_post_thumbnail()) { ?>
				<div class="last-post_production__img">
					<?php the_post_thumbnail('last-production-thumb'); ?>
				</div>
			<?php } else {
				$first_img = get_first_image();
				if (!empty($first_img)) { ?>
					<div class="last-post_production__img">
						<img class="last-post_production__first-img" src="<?php echo $first_img; ?>" alt="" />
					</div>
				<?php } ?>
			<?php } ?>	
			<div class="last-post_production__content">
				<h1 class="last-post_production__category-title">
					<?php $category = get_the_category();
					echo $category[0]->cat_name; ?>
				</h1>
				<p class="post_production__title last-post_production__title"><?php the_title(); ?></p>
					<span class="order-button"><?php get_lang_switch($cur_lang, 'заказать', 'order', 'bestellen'); ?></span>
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
			$('#menu-home-menu > .menu-item:first-child > a').before('<img class="lower-corner-img" src="<?php bloginfo('template_url'); ?>/images/lower-corner.png" />');
			$('#menu-home-menu > .menu-item:nth-child(3) > a').before('<img class="lower-corner-img" src="<?php bloginfo('template_url'); ?>/images/lower-corner.png" />');
			$('#menu-home-menu > .menu-item:nth-child(4) > a').before('<img class="lower-corner-img" src="<?php bloginfo('template_url'); ?>/images/lower-corner.png" />');
			$('#menu-home-menu > .menu-item:nth-child(2) > a').before('<img class="top-corner-img" src="<?php bloginfo('template_url'); ?>/images/top-corner.png" />');
			$('#menu-home-menu > .menu-item').bind('mouseover', function() {
				$(this).find(".lower-corner-img").attr("src","<?php bloginfo('template_url'); ?>/images/lower-corner-hover.png");
				$(this).find(".top-corner-img").attr("src","<?php bloginfo('template_url'); ?>/images/top-corner-hover.png");
			});
			$('#menu-home-menu > .menu-item').bind('mouseout', function() {
				$(this).find(".lower-corner-img").attr("src","<?php bloginfo('template_url'); ?>/images/lower-corner.png");
				$(this).find(".top-corner-img").attr("src","<?php bloginfo('template_url'); ?>/images/top-corner.png");
			});
		});
	})(jQuery);
</script>
<?php get_footer(); ?>
