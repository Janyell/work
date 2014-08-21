<?php get_header(); ?>
	<section class="content">
		<div class="post__title post__title_padding_xl">
			<?php echo category_description(); ?>
		</div>
		<div class="content">
			<div class="posts">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!--
					--><div class="post post_xs">
				<?php
					$file = get_file();
					$ext = get_file_extension($file);
					if (!empty($ext)) { ?>
						<div class="post__file-ext">
						<?php if ($ext == 'pdf' || $ext == 'xsl' || $ext == 'doc' || $ext == 'docx') {?>
							<span class="ext <?php echo $ext ?>"><?php echo $ext ?></span>
						<?php }
						else  {?>
							<span class="ext"><?php echo $ext ?></span>
						<?php } ?>
						</div>
					<?php } ?>
						<div class="post__content_all">
							<a class="post__title_a" href="<?php echo $file ?>" title="Ссылка на: <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							<div class="post__date">
								<?php the_time('j F Y');
								get_lang_switch($cur_lang, ' года', '', ''); ?>
							</div>
						</div>
					</div><!--
					--><?php
				endwhile; endif; if (count($posts) % 2 == 0) { ?><!--
				--><div class="post_empty post_empty_xs"></div><!--
				--><?php } ?>
			</div>
			<div class="pagination pagination_bottom_xs">
				<?php wp_pagenavi(); ?>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>
