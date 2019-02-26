<?php
/*
Template Name: Dev Theme
*/
?>

<?php ## 1
/*
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}
*/
?>

<?php ## 2
/*
				
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'twentyninteen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
*/
?>
<?php ##3
/**
* Child Theme stylesheet einbinden => Original-Stylesheet
*/
function child_theme_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() .'/style.css' , array('parent-style'));
}
add_action( 'wp_enqueue_scripts', 'child_theme_styles' );
?>