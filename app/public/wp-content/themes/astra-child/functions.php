<?php
// Empêcher l'accès direct au fichier
if ( !defined( 'ABSPATH' ) ) exit;

// Charger les styles du thème parent et enfant avec une version dynamique
function child_theme_configurator_css() {
    // Charger le style du thème parent
    wp_enqueue_style( 'astra-parent-style', get_template_directory_uri() . '/style.css' );

    // Charger le style du thème enfant
    $child_style_version = filemtime( get_stylesheet_directory() . '/style.css' );
    wp_enqueue_style( 'astra-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'astra-parent-style' ), $child_style_version );
}
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css' );

// Ajouter un lien "Admin" dans le menu principal pour les administrateurs
function ajouter_lien_admin_au_menu( $items, $args ) {
    if ( is_user_logged_in() && current_user_can( 'manage_options' ) && isset( $args->theme_location ) && $args->theme_location === 'primary' ) {
        $lien_admin = '<li class="menu-item menu-item-admin"><a href="' . esc_url( admin_url() ) . '">Admin</a></li>';
        $items .= $lien_admin;
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin_au_menu', 10, 2 );

// Enregistrer et ajouter le JavaScript pour le menu burger
function theme_enqueue_scripts() {
    // Charger le fichier JavaScript pour le menu burger
    wp_enqueue_script( 'menu-toggle', get_stylesheet_directory_uri() . '/js/menu-toggle.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

?>