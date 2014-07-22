<?php get_header(); ?>
<section class="content">
    <h1 class="content__title">
        <?php the_title(); ?>
    </h1>
    <div class="content_left">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
    <div class="content_right">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
    <ul>
        <li><span>adhajdhajdh</span></li>
        <li>adhajdhajdh</li>
        <li>adhajdhajdh</li>
        <li>adhajdhajdh</li>
    </ul>
</section>
<script type="text/javascript">
$("#source")
    .appendTo("#destination");
</script>
<?php get_footer(); ?>