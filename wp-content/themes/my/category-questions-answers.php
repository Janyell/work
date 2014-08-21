<?php get_header(); ?>
<section class="content">
	<?php $cat_ID = get_query_var('cat');  
	$posts = query_posts('cat='. $cat_ID . '&posts_per_page=-1'); ?>
	<table class="posts_questions-answers">
	    <tr class="first-tr">
	        <td class="questions"><h1><?php $cur_lang = get_cur_lang(); get_lang_switch($cur_lang, 'Вопросы', 'Questions', 'Fragen'); ?></h1></th>
	        <td class="answers"><h1><?php get_lang_switch($cur_lang, 'Ответы', 'Answers', 'Antworten'); ?></h1></th>
	    </tr>
	    <?php $posts = query_posts('cat='. $cat_ID . '&posts_per_page=-1');
	    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    <tr>
	        <?php 
	        $post_id = get_the_ID();
	        ?>
	        <td class="question">
                <?php 
                if (($meta_data = get_post_meta($post_id, 'question', 1)) == '') {
                    the_title();
                } else {
                    echo $meta_data; 
                } ?>
                <div class="author-date">
                	<?php echo get_post_meta($post_id, 'author', 1);
                	echo ' ';
					if (($meta_data = get_post_meta($post_id, 'date', 1)) == '') {
	                   	the_time('j F Y');
						echo " года";
	                } else {
	                    echo $meta_data; 
	                } 
	                ?> 
				</div>
	        </td>
	        <td class="answer">
	        	<?php 
                if (($meta_data = get_post_meta($post_id, 'answer', 1)) == '') {
                    the_content();
                } else {
                    echo $meta_data; 
                } ?>
	        </td>
	    </tr>
	    <?php
	    endwhile; endif; ?>
	</table>
	<div class="question-form">
		<div class="question-form__header">Задать вопрос</div>
		<?php if ($cur_lang == 'ru') {
		    echo do_shortcode('[contact-form-7 id="157" title="Контактная форма 1"]');
		} elseif ($cur_lang == 'en') {
		    echo do_shortcode('[contact-form-7 id="85" title="Untitled"]');
		}
		else {
	        echo do_shortcode('[contact-form-7 id="70" title="Ohne Titel"]');
		} ?>
	</div>
</section>
<script type="text/javascript">
	(function($){
		$(document).ready(function() {
			$('.your-name > input').attr("placeholder", "<?php get_lang_switch($cur_lang, 'Вас зовут', 'Your name', 'Ihren Namen'); ?>");
			$('.your-email > input').attr("placeholder", "<?php get_lang_switch($cur_lang, 'Ваш E-mail', 'Your E-mail', 'Ihre E-mail'); ?>");
			$('.your-message > textarea').attr("placeholder", "<?php get_lang_switch($cur_lang, 'Ваш вопрос', 'Your question', 'Ihre Frage'); ?>");
		});
	})(jQuery);
</script>
<?php get_footer(); ?> 