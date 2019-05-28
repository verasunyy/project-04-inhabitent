<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/* Remove "Editor" links from sub-menus */
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

/* change the logo on the WP login screen to be Inhabitent's logo */
function inhabitent_login_logo() {
	echo '<style type="text/css">                                                                   
		h1 a { background-image:url('.get_stylesheet_directory_uri().'/assets/images/logos/inhabitent-logo-text-dark.svg) !important; 
		background-size: contain !important;height: 70px !important; width: 320px !important;margin:0 !important;}                            
	</style>';
}
add_action('login_head', 'inhabitent_login_logo');

/* change the link on the WP login screen to be to the home page */
function inhaitent_home_link($url) {
	//return $url .= 'download';
	return get_bloginfo( 'url' );
	//return home_url();//home_url()is to go to the home page of the selected page
	//return get_info('siteurl');
}
add_filter( 'login_headerurl', 'inhaitent_home_link' );

/* Try adding this to inc/extras.php and you should see more body classes based on the page name */
function inhabitent_body_class_for_pages( $classes ) {
    if ( is_singular( 'page' ) ) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'inhabitent_body_class_for_pages' );

/* set up the excerpt length */
function inhabitent_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'inhabitent_excerpt_length', 999 );


/* To change archive-product.php number of posts to show */

function number_of_product_per_page($query){
	if ( is_post_type_archive( 'product' ) && 
		 !is_admin() && $query->is_main_query()) {
		$query->set( 'posts_per_page', 16);
		$query->set('order','ASC');
		$query->set('orderby', 'meta_value_num' );
		$query->set('meta_key', 'product_price');
		return;
	}
	elseif(is_tax('product-type')){//need to be the name of the taxonomy
		$query->set( 'posts_per_page', 4 );
		return;
	}elseif(is_post_type_archive('adventure') && 
	!is_admin() && $query->is_main_query()){
		$query->set( 'posts_per_page', 4 );
		$query->set('order','ASC');
		return;
	}
	elseif(is_search()){
		$query->set( 'posts_per_page', 6 );
		return;
	}
}	
add_action( 'pre_get_posts', 'number_of_product_per_page' );

/* get rid of archive label */
function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );
