<?php
/*
Plugin Name: use_parent_category_template
Plugin URI: http://blog.portal.kharkov.ua/
Description: Use parent category template if exists
Author: Yuri 'Bela' Belotitski
Version: 1.0 beta
Author URI: http://blog.portal.kharkov.ua/
*/ 

add_action('template_redirect', 'use_parent_category_template');
function use_parent_category_template() {
	global $cat;
	if (!is_category()) return;
	$category = get_category($cat);
	while ($category->cat_ID) {
        if ( file_exists(TEMPLATEPATH . "/category-" . $category->slug . '.php') ) {
            include(TEMPLATEPATH . "/category-" . $category->slug . '.php');
            exit;
        }
		$category = get_category($category->category_parent);
    }
}
?>