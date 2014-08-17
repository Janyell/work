<?php get_header(); ?>
<section class="content content_photos">
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</section>
<script type="text/javascript">
	(function($){
		$(document).ready(function() {
			$('.rg-gallery').css({'display' : 'none'});
			var images_on_page = 2,
				count_of_images = $('.gallery-item').size(),
				count_of_images_on_last_page = count_of_images % images_on_page; 
			if ((count_of_images < images_on_page) && (count_of_images_on_last_page % 4 == 0 || count_of_images % 18 % 4 == 3)) {
				$('.content').append('<div class="post_empty post_empty_xxs"></div>');
			}
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
		/*var gallery_wrap = $('.gallery-wrap');
			pages = $('.pagination > span');
			$('div #peg-1 .pagination').unbind('click');
       	pages.on('click', function(e){
       		alert(".[ea");
        	//e.preventDefault();
        	var number_of_page = $(this).contents().text()
			if ($('.current-page').contents().text() < number_of_page) {
  				gallery_wrap.stop().animate({left : -980}, 300, function() {
  					var gallery_items = $('.gallery-item');
  					i = 1;
  					gallery_items.each(function() {
  						if (this.css('display') == 'block') {
  							this.css({'display' : 'none'});
  						}
  						else {
  							if (i < number_of_page * images_on_page && i > number_of_page * (images_on_page - 1)) {
  								this.css({'display' : 'block'});
  							}
  						}
  						++i;
  						console.log(i);
  					});
		        	gallery_wrap.stop().css({'left' : '980px'}).animate({left : 0}, 300);
		    	});
		    }
		});
/*				else {
					$('.images').stop().animate({left: 980}, 300, function() {
		        	content.load(link+' .content', function() {
		        		var count_of_images = $('.ngg-gallery-thumbnail-box').size();
						if ($('.ngg-navigation').size() == 1 && (count_of_images % 4 == 0 || count_of_images % 4 == 3)) {
							$('.ngg-galleryoverview').append('<div class="post_empty post_empty_xxs"></div>');
						}
		        		$('.ngg-gallery-thumbnail-box').wrapAll('<div class="images"></div>');s
		        		$('.images').stop().css({'left' : '-980px'}).animate({left : 0}, 300);
		        	});
		    	})
			};
    	});
	content.on('click', '.ngg-gallery-thumbnail a', function(e){
		e.preventDefault();
*/
	})(jQuery);
</script>
<?php get_footer(); ?>
