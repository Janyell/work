<?php get_header(); ?>
<section class="title">
    <h1 class="title_production">
        <?php echo category_description(); ?>
    </h1>
</section>
<section class="menu">    
    <div class="switch_production">
        <?php
        $switch = $_GET["switch"];
        if ($switch && $switch == "images") { ?>
        <div class="switch-images_active">
            <img class="images_active" src="<?php bloginfo('template_url'); ?>/images/images-active.png">
            cсылками
        </div><!--
        --><form class="switch-form" method="get">
            <input type="hidden" name="switch" value="list">
            <button type="submit" class="switch-list">
            <img class="list" src="<?php bloginfo('template_url'); ?>/images/list.png">
            списком
            </button>
        </form>
        <?php } else {
        $switch = "list"; ?>
        <form class="switch-form" method="get">
            <input type="hidden" name="switch" value="images">
            <button type="submit" class="switch-list">
            <img class="images" src="<?php bloginfo('template_url'); ?>/images/images.png">
            ссылками
            </button>
        </form><!--
        --><div class="switch-list_active">
            <img class="list_active" src="<?php bloginfo('template_url'); ?>/images/list-active.png">
            списком
        </div>
        <?php } ?>
    </div>
    <div class="catalog">
        <?php $cat_ID = get_query_var('cat'); ?>
        <div class="catalog__title">Каталог</div>
        <?php wp_nav_menu('menu=production-menu'); ?>
    </div>
</section><!--
--><section class="content content_production">
    <?php if ($switch == "images") { ?><!--
    --><div class="posts posts_production">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!--
        --><div class="post post_production">
            <?php
            if (has_post_thumbnail()) { ?>
                <div class="post_production__img">
                    <?php the_post_thumbnail('production-thumb'); ?>
                </div>
            <?php } else {
                $first_img = get_first_image();
                if (!empty($first_img)) { ?>
                    <div class="post_production__img">
                        <img class="post_production__first-img" src="<?php echo $first_img; ?>" alt="" />
                    </div>
                <?php } ?>
            <?php } ?>  
            <div class="post_production__content">
                <p class="post_production__title text-overflow"><?php the_title(); ?></p>
                <a class="order" href="<?php the_permalink() ?>" title="Ссылка на: <?php the_title_attribute(); ?>">
                    заказать
                    <img class="more-img" src="<?php bloginfo('template_url'); ?>/images/more.png" />
                </a>
            </div>
        </div><!--
        --><?php
        endwhile; endif; if (count($posts) % 2 == 0) { ?><!--
        --><div class="post_empty post_empty_production"></div><!--
        --><?php } ?>
    </div>
    <div class="pagination pagination_production">
        <?php wp_pagenavi(); ?>
    </div>
    <?php } else { ?><!--
    --><table class="posts_production posts_production_list">
        <tr class="first-tr">
            <th class="production_list__title">Название</th>
            <th class="production_list__title">Свойство 1</th>
            <th class="production_list__title">Свойство 2</th>
            <th class="production_list__title">Свойство 3</th>
            <th class="production_list__title">Свойство 4</th>
            <!--th class="production_list__title_empty"></th-->
            <th class="production_list__title production_list__title_price">Цена</th>
        </tr>
        <?php $posts = query_posts('cat='. $cat_ID . '&posts_per_page=-1');
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <tr>
            <?php 
            $post_id = get_the_ID();
            ?>
            <td class="production_list__value">
                <a class="production_list__name" href="<?php the_permalink() ?>" title="Ссылка на: <?php the_title_attribute(); ?>">
                    <?php 
                    if (($meta_data = get_post_meta($post_id, 'name', 1)) == '') {
                        the_title_attribute();
                    } else {
                        echo $meta_data; 
                    } ?>
                </a>
            </td>
            <?php $titles = array('prop1', 'prop2', 'prop3', 'prop4');
            foreach ($titles as $title) { 
            ?>
                <td class="production_list__value">
                    <?php if (($meta_data = get_post_meta($post_id, $title, 1)) == '') {
                        echo '-';
                    } else {
                        echo $meta_data;
                    } ?>
                </td>
            <?php } ?>
            <td class="production_list__value production_list__price">
                <?php if (($meta_data = get_post_meta($post_id, 'price', 1)) == '') {
                    echo '-';
                } else {
                    echo $meta_data;
                } ?>
            </td>
        </tr>
        <?php
        endwhile; endif; ?>
    </table>
    <?php } ?>
</section>
<script type="text/javascript">
    (function($){
        $(document).ready(function() {
            if ($('#menu-production-menu > .active').size()) {
                $('#menu-header-menu > .menu-item:first-child').addClass('active');
            }
        });
    })(jQuery);
</script>
<?php get_footer(); ?>