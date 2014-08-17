<?php get_header(); ?>
<section class="content clearfix">
    <div class="left_column">
        <h1 class="content__title"><?php printf( __( 'Поиск по: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        <hr class="divider orange">
    </div>
    <!-- Правая колонка для вывода контента -->
    <div class="right_column">
        <?php if ( have_posts() ) : ?>
        <h3>Результаты поиска:</h3>
        <ul class="accordion">
            <?php while ( have_posts() ) : the_post(); ?>
            <li class="accordion__item">
                <?php the_title(); ?>
                <div class="accordion__item__info">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">>></a>
                </div>
            </li>
        <?php endwhile;?>
        </ul>
        <?php else: ?>
            <p><strong>Ничего не найдено по Вашему запросу. Попробуйте еще раз.</strong></p>
        <?php endif;?>
    </div>
</section>
<?php get_footer(); ?>
