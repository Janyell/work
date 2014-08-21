<?php get_header(); ?>
<section class="content content_contacts">
	<?php if (have_posts()): while (have_posts()): the_post(); 
        the_content();
    endwhile; endif;

    // change address here 
	if (($cur_lang = get_cur_lang()) == 'ru') {
        $addr = "ООО «Завод Триумф», г. Челябинск, ул. Автодорожная, д. 3"; 
    } elseif ($cur_lang == 'en') {
        $addr = "«Plant Triumph»";
    } else {
        $addr = "«Pflanzen Triumph»";
    } 
	get_modal_window(
		$phone_code = "351", 
		$phones = "729-99-47,  729-99-48,  247-63-64,  777-20-72", 
		$email = "opt@zavodtriumf.ru", 
		$address = $addr,
		$id = 'contacts', 
		$is_closed = "false", 
		$is_visible = "true",
		$position = 'absolute');
	?>
</section>
<script type="text/javascript">
	(function($){
		$('.contacts').bind('click', function(){
			if ($('#contacts').css("display") == 'none')
                $('#contacts').css({'display':'block'});
            else
            	$('#contacts').css({'display':'none'});
		});
    })(jQuery);
</script>
<?php get_footer(); ?>

