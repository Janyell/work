<?php get_header(); ?>
	<section class="content">
		<h1 class="title_production">
			Отличные товары
		</h1>	
		<div class="switch_production">
			<?php
			$switch = $_GET["switch"];
			if ($switch && $switch == "images") { ?>
				<div class="switch-images_active">
					<img class="images_active" src="<?php bloginfo('template_url'); ?>/images/images-active.png">
					cсылками
				</div><!--
				--><form class="switch-form" method="get">
					<input type="hidden" name="switch" value="list">
					<button type="submit" class="switch-list">
						<img class="list" src="<?php bloginfo('template_url'); ?>/images/list.png">
						списком
					</button>
				</form>
			<?php } else { 
				$switch = "list"; ?>
				<form class="switch-form" method="get">
					<input type="hidden" name="switch" value="images">
					<button type="submit" class="switch-list">
						<img class="images" src="<?php bloginfo('template_url'); ?>/images/images.png">
						ссылками
					</button>
				</form><!--
				--><div class="switch-list_active">
					<img class="list_active" src="<?php bloginfo('template_url'); ?>/images/list-active.png">
					списком
				</div>
			<?php } ?>	
		</div>
		<div class="catalog">
			<div class="catalog__title">Каталог</div>
				<ul>
					<li>
						<a class="catalog__item <?php if ($cat_ID == 9) echo "catalog__item_active"; ?>" href="<?php echo get_category_link(9); ?>">Водоводяные подогреватели</a>
					</li>
					<li>
						<a class="catalog__item <?php if ($cat_ID == 10) echo "catalog__item_active"; ?>" href="<?php echo get_category_link(10); ?>">Пароводяные подогреватели</a>
					</li>
					<li>
						<a class="catalog__item <?php if ($cat_ID == 11) echo "catalog__item_active"; ?>" href="<?php echo get_category_link(11); ?>">Трубные системы</a>
					</li>
					<li>
						<a class="catalog__item <?php if ($cat_ID == 12) echo "catalog__item_active"; ?>" href="<?php echo get_category_link(12); ?>">Емкостное оборудование</a>
					</li>
					<li>
						<a class="catalog__item <?php if ($cat_ID == 13) echo "catalog__item_active"; ?>" href="<?php echo get_category_link(13); ?>">Пластинчатые теплообменники</a>
					</li>
					<li>
						<a class="catalog__item <?php if ($cat_ID == 14) echo "catalog__item_active"; ?>" href="<?php echo get_category_link(14); ?>">Конвекторы</a>
					</li>
					<li>
						<a class="catalog__item <?php if ($cat_ID == 15) echo "catalog__item_active"; ?>" href="<?php echo get_category_link(15); ?>">Регистры отопительные</a>
					</li>
					<li>
						<a class="catalog__item <?php if ($cat_ID == 16) echo "catalog__item_active"; ?>" href="<?php echo get_category_link(16); ?>">Грязевик</a>
					</li>
					<li>
						<a class="catalog__item <?php if ($cat_ID == 17) echo "catalog__item_active"; ?>" href="<?php echo get_category_link(17); ?>">Воздухосборники А1И</a>
					</li>
					<li>
						<a class="catalog__item <?php if ($cat_ID == 18) echo "catalog__item_active"; ?>" href="<?php echo get_category_link(18); ?>">Элеваторы</a>
					</li>
				<ul>
		</div><!--
		--><?php if ($switch == "images") { ?><!--
		--><div class="posts_production">
			<?php $posts = query_posts($query_string . '&posts_per_page=2');
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!--
				--><div class="post post_production">
			<?php 
				$first_img = get_first_image();
				if (!empty($first_img)) { ?>
					<div class="post_production__img">
						<img class="post_production__first-img" src="<?php echo $first_img; ?>" alt="" />
					</div>	
				<?php } ?>
					<div class="post_production__content">
						<p class="post_production__title"><?php the_title(); ?></p>
						<a class="order" href="<?php the_permalink() ?>" title="Ссылка на: <?php the_title_attribute(); ?>">
							заказать
							<img class="more-img" src="<?php bloginfo('template_url'); ?>/images/more.png" />
						</a>
					</div>
				</div><!--
				--><?php
			endwhile; endif; if (count($posts) % 2 == 0) { ?><!--
			--><div class="post_empty post_empty_production"></div><!--
			--><?php } ?>
			<div class="pagination pagination_production">
				<?php wp_pagenavi(); ?>
			</div>
		</div>
		<?php } else { ?><!--
		--><div class="posts_production posts_production_list">
			<?php $posts = query_posts($query_string . '&posts_per_page=-1');
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!--
				--><div class="post_production_list">
				<div class="hr"></div>
			</div>
			<?php
			endwhile; endif; ?>
		</div>
		<?php } ?>
	</section>
	<?php get_footer(); ?>