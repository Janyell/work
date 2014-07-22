<?php get_header(); ?>
<section class="content">
	<?php echo do_shortcode('[nggallery id=1]'); ?>
	<!--div class=""></div-->
</section>
<script type="text/javascript">
	(function($){
		$(document).ready(function() {
			var count_of_images = $('.ngg-gallery-thumbnail-box').size();
			if ($('.ngg-navigation').size() == 1 && (count_of_images % 4 == 0 || count_of_images % 4 == 3)) {
				$('.content').append('<div class="post_empty post_empty_xxs"></div>');
			}
			$('.ngg-gallery-thumbnail-box').wrapAll('<div class="images"></div>');
		});
		var content = $('.content');
        content.on('click', '.ngg-navigation a', function(e){
        	e.preventDefault();
	        var link = $(this).attr('href');
			if ($('.current').contents().text() < $(this).contents().text()) {
  				$('.images').stop().animate({left : -980}, 300, function() {		
		        	content.load(link+' .content', function() {
		        		$('.ngg-gallery-thumbnail-box').wrapAll('<div class="images"></div>');
		        		$('.images').stop().css({'left' : '980px'}).animate({left : 0}, 300);
		        	});
		    	});
		    }
				else {
					$('.images').stop().animate({left: 980}, 300, function() {		
		        	content.load(link+' .content', function() {
		        		$('.ngg-gallery-thumbnail-box').wrapAll('<div class="images"></div>');s
		        		$('.images').stop().css({'left' : '-980px'}).animate({left : 0}, 300);
		        	});
		    	})
				};
    	});
	})(jQuery);
</script>
<?php get_footer(); ?>