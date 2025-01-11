<?php
/**
 * The footer for Astra Theme.
 *
 * This is the template that displays all of the footer section and everything after <div id="content">
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined ( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<footer>
    <div class="footer-container">
        <!-- Lien vers les mentions légales -->
        <div class="footer-content">
            <ul>
                <li>
                    <a href="<?php echo esc_url(get_permalink(432)); ?>"><?php _e('Mentions Légales', 'astra-child'); ?></a>
                </li>
            </ul>
        </div>
        
    </div> <!-- .footer-container -->
</footer>

<?php wp_footer(); ?>
</body>
</html> 