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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'optin_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'v~C(wi)&v(4x^&D<Px3<Agp.QU(5uqu#TY5JjqOH@C,-@vJ9A}4SoBz5Ereft:]b' );
define( 'SECURE_AUTH_KEY',  'g;A1&n1Vcz>K3J1wE;>W [ccb2pq#B$O3[*3tp|efm/O17pk~VQm :y3O?{%gvgC' );
define( 'LOGGED_IN_KEY',    '#JbHSOeg8^+UO:^yp>@XdL3%2B>rnO{cgR))WPDk>ZFOz~~sAvlO0XB[yGM2Ru:#' );
define( 'NONCE_KEY',        'FeyYaGXW8bUdEFn<5Y/,ogG7$1=i%x_Ka_28Q$L!C 8n~fIP7Oy,F||&Q5.lu9t]' );
define( 'AUTH_SALT',        '<QMFD Fl[VtI`/U%@EX*~+wV1)Jk_BsdP^?;`g/c@:)Qgs$Hm$MK*jO?/##rf q ' );
define( 'SECURE_AUTH_SALT', 'eS#~A+QysDiyM341&|6]/*}oDhobq^j#mmy4OOc(v[2pWs$)Pv0~+Vhm:GQ}E/Ny' );
define( 'LOGGED_IN_SALT',   '1O[~Q0N;`sU`LB!g`/N5T=f7kU9,FF_ o]Y|R;DDXN4ndWDu``+_,<O1P/&*}hcm' );
define( 'NONCE_SALT',       'Os#F#I&;AZPd)[|#6J`CT%n[e4a5}oM8$%o(RiCK5<w=D0seoS[9bg.CdiSb~!BX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
