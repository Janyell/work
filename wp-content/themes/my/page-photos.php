<?php get_header(); ?>
<section class="content content_photos">
	<?php 
	switch_to_blog(1);
	if (have_posts()): while (have_posts()): the_post();
        the_content();
    endwhile; endif; 
    restore_current_blog();
    ?>
</section>
<script type="text/javascript">
	(function($){
		var content = $('.content');
		$(window).load(function() {
			var images_on_page = 18,
				count_of_images = $('.gallery-item').size(),
				count_of_images_on_last_page = count_of_images % images_on_page; 
			if ((count_of_images < images_on_page) && (count_of_images_on_last_page % 4 == 0 || count_of_images % 18 % 4 == 3)) {
				content.append('<div class="post_empty post_empty_xxs"></div>');
			}
			$(".gallery-item").wrapAll('<div class="images"></div>');
			$('#peg-1').off( "click");
			var images = $('.images');
	       	content.on('click', '.pagination > span', function(){
	       		var to_page = $(this).contents().text(),
	       			from_page = $('.current-page').contents().text();
	       		if (from_page == to_page)
	       			return;
				if (from_page < to_page) {
					$('.current-page').removeClass('current-page');
	  				$(this).addClass('current-page');
	  				images.animate({left : -980}, 300, function() {
	  					i = 1;
	  					var gallery_items = $('.gallery-item'); 
	  					gallery_items.each(function() {
							if (i <= from_page * images_on_page && i > (from_page - 1) * images_on_page) {
								$(this).css({'display' : 'none'});
							} 
							else if (i <= to_page * images_on_page && i > (to_page - 1) * images_on_page) {
								$(this).css({'display' : 'block'});
								console.log(i);
							}
	  						++i;
	  					});
			        	images.stop().css({'left' : '980px'}).animate({left : 0}, 300);
			    	});
			    } else {
			    	$('.current-page').removeClass('current-page');
	  				$(this).addClass('current-page');
			    	images.animate({left: 980}, 300, function() {
	  					i = 1;
	  					var gallery_items = $('.gallery-item'); 
	  					gallery_items.each(function() {
							if (i <= to_page * images_on_page && i > (to_page - 1) * images_on_page) {
								$(this).css({'display' : 'block'});
							}
							else if (i <= from_page * images_on_page && i > (from_page - 1) * images_on_page) {
								$(this).css({'display' : 'none'});
							} 
	  						++i;
	  					});
			        	images.stop().css({'left' : '-980px'}).animate({left : 0}, 300);
			    	});
			    }
			});
		});

		$('.gallery-item a').bind('click', function(e) {
			e.preventDefault();
			var src = $(this).children('img').attr('src');
			var find_in = $('.es-carousel ul li img');
			find_in.each(function() {
				if (this.getAttribute('src') == src) {
					$(this).parent().click();
					return false;
				}
			});
			$('.gallery-wrap').css({'display' : 'none'});
			$('.pagination').css({'display' : 'none'});
			$('.content br').css({'display' : 'none'});
			$('.post_empty_xxs').css({'display' : 'none'})
			$('.rg-gallery').css({'display' : 'block'});
		});
	})(jQuery);
</script>
<?php get_footer(); ?>
