<?php get_header(); ?>
<section>
	<div class="post">
		<h1 class="questions">Вопросы</h1>
	</div><!--
	--><div class="post">
		<h1 class="answers">Ответы</h1>
	</div>
	<div class="posts">
		<?php $posts = query_posts($query_string . '&posts_per_page=-1');
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!--
			--><div class="post">
				<div class="hr pink"></div>
			</div>
		<?php
		endwhile; endif; ?>
	</div>
</section>
<?php get_footer(); ?> 