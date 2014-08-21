<?php get_header(); ?>
<section class="content content_single">
    <h1 class="content__title_xl">
        <?php the_title(); ?>
    </h1>
    <div class="content__text">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>   
    </div>
</section>
<script type="text/javascript">
    (function($){
        $(document).ready(function() {
            $(".gallery").after('<div class="gallery__full-image-wrapper"><div class="gallery__full-image"></div></div>');
            $('.gallery .gallery-item:first-child a').click();
        });
        $('.gallery .gallery-item a').bind('click', function(e) {
            e.preventDefault();
            $('.gallery .gallery-item.selected').removeClass('selected');
            $(this).parent('dt').parent('.gallery-item').addClass('selected');
            var link = $(this).attr('href');
            $('.gallery__full-image').fadeOut(300, function(){
                $(this).load(link + ' .text__image > a', function() {
                    var height = $(this).find('img').attr('height');
                    $('.gallery__full-image-wrapper').css({'height' : height});
                    $(this).fadeIn(300);
                });
            });
        });
    })(jQuery);
</script>
<?php get_footer(); ?>