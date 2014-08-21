<?php get_header(); ?>
<section class="content">
    <h1 class="content__title">
        <?php $cur_lang = get_cur_lang(); 
        get_lang_switch($cur_lang, 'Поиск по ', 'Search by ', 'Suche nach '); 
        echo get_search_query(); ?>
    </h1>
    <?php if ( have_posts() ) : ?>
    <h3>Результаты поиска:</h3>
    <ul class="search-result">
        <?php while ( have_posts() ) : the_post(); ?>
        <li class="search-result_post">
            <?php the_title(); ?>
            <div>
                <?php the_excerpt(); ?>
                <a class="read-more" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <?php get_lang_switch($cur_lang, 'читать дальше', 'read more', 'weiterlesen'); ?>
                    <img class="more-img" src="<?php bloginfo('template_url'); ?>/images/more.png" />
                </a>
            </div>
        </li>
    <?php endwhile;?>
    </ul>
    <?php else: ?>
        <p>
            <strong>
                <?php get_lang_switch($cur_lang, 
                    'Ничего не найдено по Вашему запросу. Попробуйте еще раз.', 
                    'Nothing was found on your request. Try again.', 
                    'Wurde nichts auf Ihre Anfrage gefunden. Versuchen Sie es erneut.'); ?>
            </strong>
        </p>
    <?php endif;?>
</section>
<?php get_footer(); ?>
