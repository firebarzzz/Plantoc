<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '24AEV>GP9w%j/$[^JwmZ<k_9{h2BFu`WaH%vcB6GT{_N$WEd@2Bhf(3<VhkSFta#' );
define( 'SECURE_AUTH_KEY',   '^gzi~ 6rFM$O3,l?w4i]#_BT:$67vp/3/qIlnzB@bzh3)yv^97Bp;m{7Mz.%n)!M' );
define( 'LOGGED_IN_KEY',     '8cRn.tz4q,kQXQ0(S/<: T(%!yP;Ez7*g2)!uS^Ai.BQj7/v1qiSJBD71-xLfe%q' );
define( 'NONCE_KEY',         'W*`W:<%ow{v~z4l$R0bLXyF=c6Bgz wz80]>5%A11>Md>RVzg^eat-{|}B&C0A4#' );
define( 'AUTH_SALT',         'K;N@q#6l`jC7.MLZ=y){4dvTa5` <w^@XjuM!COH8zLzqCw,yv#Wt*,wmdDOjxMg' );
define( 'SECURE_AUTH_SALT',  'A*HPJ3psD7_ny;!B[KjBcI1+1$n3Id`H~7(UKnr1jE|ZJe[&X]@WN uKWyx>t0$>' );
define( 'LOGGED_IN_SALT',    '>:]^/`R6hzU,2tSUC5!jwj|ob`Zxi_OU<JocF(J;C]N@a0+evaQO%xOCK>:so/iV' );
define( 'NONCE_SALT',        'WTR?SB:Q<{0qe1smvhIa uNv>2*#-}XvgnQ1ZH!66Mdut(v+ip>37asm}r3D&#aG' );
define( 'WP_CACHE_KEY_SALT', 'C-4NVp7?#r#I@tU2%cT{OEzDP>(asFjR|@/Wem|m*l+ZXGlaMA[09X}X5v=:+DHb' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
