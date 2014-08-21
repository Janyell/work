<?php get_header(); ?>
<section class="content content_representation">
	<?php $cur_lang = get_cur_lang(); 
	if (have_posts()): while (have_posts()): the_post();
        the_content();
    endwhile; endif; ?>
	<div class="representation">
		<img class="representation__chelyabinsk" src="<?php bloginfo('template_url'); ?>/images/representation_icon.png" alt="<?php get_lang_switch($cur_lang, 'Челябинск', 'Chelyabinsk', 'Chelyabinsk'); ?>" />
		<img class="representation__moscow" src="<?php bloginfo('template_url'); ?>/images/representation_icon.png" alt="Москва" />
		<img class="representation__nizhny-novgorod" src="<?php bloginfo('template_url'); ?>/images/representation_icon.png" alt="Нижний Новгород" />
		<img class="representation__samara" src="<?php bloginfo('template_url'); ?>/images/representation_icon.png" alt="Самара" />
		<img class="representation__ekaterinburg" src="<?php bloginfo('template_url'); ?>/images/representation_icon.png" alt="Екатеринбург" />
		<img class="representation__omsk" src="<?php bloginfo('template_url'); ?>/images/representation_icon.png" alt="Омск" />
	</div>
		<?php
	get_modal_window(
		$phone_code = "351",
		$phones = "729-99-47,  729-99-48,  247-63-64,  777-20-72",
		$email = "opt@zavodtriumf.ru",
		$address = lang_switch($cur_lang, 'ООО «Завод Триумф», г. Челябинск, ул. Автодорожная, д. 3', 'Chelyabinsk', 'Chelyabinsk'), // use lang_switch($cur_lang, ru, en, de)
		$id = "chelyabinsk",
		$is_closed = "false",
		$is_visible = "false",
		$position = 'absolute'
	);
	get_modal_window(
		$phone_code = "",
		$phones = "",
		$email = "",
		$address = "ООО «Завод Триумф», г. Москва",
		$id = "moscow",
		$is_closed = "false",
		$is_visible = "false",
		$position = 'absolute'
	);
	get_modal_window(
		$phone_code = "",
		$phones = "",
		$email = "",
		$address = "ООО «Завод Триумф», г. Нижний Новгород",
		$id = "nizhny-novgorod",
		$is_closed = "false",
		$is_visible = "false",
		$position = 'absolute'
	);
	get_modal_window(
		$phone_code = "",
		$phones = "",
		$email = "",
		$address = "ООО «Завод Триумф», г. Самара",
		$id = "samara",
		$is_closed = "false",
		$is_visible = "false",
		$position = 'absolute'
	);
	get_modal_window(
		$phone_code = "",
		$phones = "",
		$email = "",
		$address = "ООО «Завод Триумф», г. Екатеринбург",
		$id = "ekaterinburg",
		$is_closed = "false",
		$is_visible = "false",
		$position = 'absolute'
	);
	get_modal_window(
		$phone_code = "",
		$phones = "",
		$email = "",
		$address = "ООО «Завод Триумф», г. Омск",
		$id = "omsk",
		$is_closed = "false",
		$is_visible = "false",
		$position = 'absolute'
	);
	?>
</section>
<script type="text/javascript">
	(function($){
		var curModalWindow ='';
		$('.representation').bind('click', function(){
			if (curModalWindow != '')
				$('#' + curModalWindow).css({'display':'none'});
		});
	 	$('.representation__chelyabinsk').bind('click', function(event){
	 		if (curModalWindow != '')
				$('#' + curModalWindow).css({'display':'none'});
           	$('#chelyabinsk').css({'display':'block'});
           	curModalWindow = 'chelyabinsk';
           	event.stopPropagation ? event.stopPropagation() : (event.cancelBubble=true);
        });
        $('.representation__moscow').bind('click', function(event){
	 		if (curModalWindow != '')
				$('#' + curModalWindow).css({'display':'none'});
           	$('#moscow').css({'display':'block'});
           	curModalWindow = 'moscow';
           	event.stopPropagation ? event.stopPropagation() : (event.cancelBubble=true);
        });
        $('.representation__nizhny-novgorod').bind('click', function(event){
	 		if (curModalWindow != '')
				$('#' + curModalWindow).css({'display':'none'});
           	$('#nizhny-novgorod').css({'display':'block'});
           	curModalWindow = 'nizhny-novgorod';
           	event.stopPropagation ? event.stopPropagation() : (event.cancelBubble=true);
        });
        $('.representation__samara').bind('click', function(event){
	 		if (curModalWindow != '')
				$('#' + curModalWindow).css({'display':'none'});
           	$('#samara').css({'display':'block'});
           	curModalWindow = 'samara';
           	event.stopPropagation ? event.stopPropagation() : (event.cancelBubble=true);
        });
		$('.representation__ekaterinburg').bind('click', function(event){
	 		if (curModalWindow != '')
				$('#' + curModalWindow).css({'display':'none'});
           	$('#ekaterinburg').css({'display':'block'});
           	curModalWindow = 'ekaterinburg';
           	event.stopPropagation ? event.stopPropagation() : (event.cancelBubble=true);
        });
        $('.representation__omsk').bind('click', function(event){
	 		if (curModalWindow != '')
				$('#' + curModalWindow).css({'display':'none'});
           	$('#omsk').css({'display':'block'});
           	curModalWindow = 'omsk';
           	event.stopPropagation ? event.stopPropagation() : (event.cancelBubble=true);
        });
    })(jQuery);
</script>
<?php get_footer(); ?>
