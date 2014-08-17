<?php get_header(); ?>
<section class="content content_single">
    <h1 class="content__title">
        <?php the_title(); ?>
    </h1>
    <div class="content__text">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <div class="center text__image">
         	<a href="<?php echo wp_get_attachment_url($post->ID); ?>">
         		<?php echo wp_get_attachment_image( $post->ID, 'large' ); ?>
         	</a>
         </div>   
        <?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(); ?>