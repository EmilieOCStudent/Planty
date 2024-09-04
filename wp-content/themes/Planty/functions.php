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
    function planty_display_can_shortcode() {
    ob_start(); ?>
        <div class="can-container">
            <img src="<?php echo get_stylesheet_directory_uri();  ?>/images_planty/canette.png" alt="Planty Energy Drink" class="can">
            <div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_planty/gauche.png" alt="Gauche branches" class="branches gauche">
                <img src="<?php echo get_stylesheet_directory_uri();  ?>/images_planty/droite.png" alt="Droite branches" class="branches droite">
            </div>
        </div>
        <?php
    return ob_get_clean();
}
add_shortcode('planty_display_can', 'planty_display_can_shortcode');

function add_admin_link_to_menu($items, $args) {
    // Vérifie si l'utilisateur est connecté
    if (is_user_logged_in()&& $args->theme_location === 'menu-1') {
        // Ajoute le lien d'administration au début du menu
        $admin_link = '<li  id="lien-admin" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/Planty/wp-admin/">Admin</a></li>';


        $position = strpos($items, '</li>') + 5;
        $items = substr($items, 0, $position) . $admin_link . substr($items, $position);

    }

    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);
?>

