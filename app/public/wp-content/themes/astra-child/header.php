<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>Planty</title>
    <?php astra_head_top(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if ( apply_filters( 'astra_header_profile_gmpg_link', true ) ) : ?>
        <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php endif; ?>

    <!-- Link to the child theme's CSS file -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

    <?php wp_head(); ?>
    <?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
    <?php astra_body_top(); ?>
    <?php wp_body_open(); ?>

    <!-- Skip Link for Accessibility -->
    <a class="skip-link screen-reader-text" href="#content" title="<?php echo esc_attr( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
        <?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
    </a>

    <div <?php echo astra_attr( 'site', array( 'id' => 'page', 'class' => 'hfeed site' ) ); ?>>
        <?php astra_header_before(); ?>

        <!-- Header with Logo and Menu -->
        <header class="site-header" role="banner">
            <div class="header-container">
                

                <!-- Logo -->
                <div class="logo">
                    <a href="http://plantoc.local/elementor-1127/" aria-label="Accueil">
                        <img 
                            src="http://plantoc.local/wp-content/uploads/2024/09/cropped-Logo-3.png" 
                            alt="Logo" 
                            style="width: 201px; height: auto;">
                    </a>
                </div>

                <!-- Burger Icon -->
                <div class="burger-icon" onclick="toggleMenu()">
                    &#9776;
                </div>

                <!-- Main Navigation Menu -->
                <nav class="main-menu" role="navigation" aria-label="Menu principal">
                    <ul class="nav-menu">
                        <li>
                            <a 
                                href="http://plantoc.local/page-nous-rencontrer-ultime-planty-1161/" 
                                class="link-rencontrer">
                                Nous rencontrer
                            </a>
                        </li>
                        <li>
                            <a 
                                href="<?php echo esc_url( home_url( '/admin' ) ); ?>" 
                                class="link-admin">
                                Admin
                            </a>
                        </li>
                        <li>
                            <a 
                                href="http://plantoc.local/page-commander-ultime-planty-1199/" 
                                class="commander-text">
                                Commander
                            </a>
                        </li>
                    </ul>
                </nav>

            </div> <!-- .header-container -->
        </header>

        <?php
        astra_header();
        astra_header_after();
        astra_content_before();
        ?>
    </div> <!-- #page -->
    

    <script>
        function toggleMenu() {
        const mainMenu = document.querySelector('.main-menu');
        mainMenu.classList.toggle('active');
    }
    
    </script>
    <?php wp_footer(); ?>
</body>
</html>