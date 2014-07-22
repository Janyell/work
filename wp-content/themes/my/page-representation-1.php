<?php get_header(); ?>
<section class="content">
	<div class="representation">
		<img class="representation__chelyabinsk" src="<?php bloginfo('template_url'); ?>/images/representation_icon.png" alt="Челябинск" />
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
		$address = "ООО «Завод Триумф», г. Челябинск, ул. Автодорожная, д. 3",
		$id = "chelyabinsk",
		$is_closed = "false" 
	); 
	get_modal_window(
		$phone_code = "", 
		$phones = "", 
		$email = "", 
		$address = "ООО «Завод Триумф», г. Москва",
		$id = "moscow",
		$is_closed = "false"  
	);
	get_modal_window(
		$phone_code = "", 
		$phones = "", 
		$email = "", 
		$address = "ООО «Завод Триумф», г. Нижний Новгород",
		$id = "nizhny-novgorod",
		$is_closed = "false"  
	);
	get_modal_window(
		$phone_code = "", 
		$phones = "", 
		$email = "", 
		$address = "ООО «Завод Триумф», г. Самара",
		$id = "samara",
		$is_closed = "false"  
	);
	get_modal_window(
		$phone_code = "", 
		$phones = "", 
		$email = "", 
		$address = "ООО «Завод Триумф», г. Екатеринбург",
		$id = "ekaterinburg",
		$is_closed = "false"  
	);
	get_modal_window(
		$phone_code = "", 
		$phones = "", 
		$email = "", 
		$address = "ООО «Завод Триумф», г. Омск",
		$id = "omsk",
		$is_closed = "false"  
	);
	?>
</section>
	<script type="text/javascript">
	(function($){
		 	$('.representation__chelyabinsk').bind('mouseover', function(){
               	$('#chelyabinsk').css({'display':'block'}); 
            });
            $('.representation__chelyabinsk').bind('mouseout', function(){
               	$('#chelyabinsk').css({'display':'none'}); 
            });
            $('.representation__moscow').bind('mouseover', function(){
               	$('#moscow').css({'display':'block'}); 
            });
            $('.representation__moscow').bind('mouseout', function(){
               	$('#moscow').css({'display':'none'}); 
            });
            $('.representation__nizhny-novgorod').bind('mouseover', function(){
               	$('#nizhny-novgorod').css({'display':'block'}); 
            });
            $('.representation__nizhny-novgorod').bind('mouseout', function(){
               	$('#nizhny-novgorod').css({'display':'none'}); 
            });
            $('.representation__samara').bind('mouseover', function(){
               	$('#samara').css({'display':'block'}); 
            });
            $('.representation__samara').bind('mouseout', function(){
               	$('#samara').css({'display':'none'}); 
            });
            $('.representation__ekaterinburg').bind('mouseover', function(){
               	$('#ekaterinburg').css({'display':'block'}); 
            });
            $('.representation__ekaterinburg').bind('mouseout', function(){
               	$('#ekaterinburg').css({'display':'none'}); 
            });
            $('.representation__omsk').bind('mouseover', function(){
               	$('#omsk').css({'display':'block'}); 
            });
            $('.representation__omsk').bind('mouseout', function(){
               	$('#omsk').css({'display':'none'}); 
            });
        })(jQuery);
	</script>
<?php get_footer(); ?>