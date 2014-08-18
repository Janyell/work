<?php get_header(); ?>
<section class="content content_contacts">
	<img class="contacts" src="http://localhost:8000/wordpress/wp-content/uploads/2014/07/contacts.png" alt="Контакты" />
	<?php get_modal_window(
		$phone_code = "351", 
		$phones = "729-99-47,  729-99-48,  247-63-64,  777-20-72", 
		$email = "opt@zavodtriumf.ru", 
		$address = "ООО «Завод Триумф», г. Челябинск, ул. Автодорожная, д. 3",
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

