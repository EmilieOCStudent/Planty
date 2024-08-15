<?php /*

  This file is part of a child theme called Planty.
  Functions in this file will be loaded before the parent theme's functions.
  For more information, please read
  https://developer.wordpress.org/themes/advanced-topics/child-themes/

*/

// this code loads the parent's stylesheet (leave it in place unless you know what you're doing)

function your_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, 
      get_template_directory_uri() . '/style.css');
          wp_enqueue_style('theme-style',
    get_stylesheet_directory_uri() . '/css/theme.css',
    array(),
    filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


add_action('wp_enqueue_scripts', 'your_theme_enqueue_styles');

/*  Add your own functions below this line.
    ======================================== */ 

