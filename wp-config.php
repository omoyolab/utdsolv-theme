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
/** The name of the database for WordPress */
if (strstr($_SERVER['SERVER_NAME'], 'utdsolv.local')){
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
	}else{
		define( 'DB_NAME', 'dbf1xvsrgstorf' );
		define( 'DB_USER', 'uh2hidgucqyol' );
		define( 'DB_PASSWORD', 'hg1esyw9mlzj' );
		define( 'DB_HOST', '127.0.0.1' );
	}
	 
	

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
define( 'AUTH_KEY',          'x`6Tw_9!H=<i:Bei{Yw.6q)h3Q!Bx~,_ Ko9?_-tb8$K,]}c*2?nEWC(:Q+C7hOC' );
define( 'SECURE_AUTH_KEY',   'yyaowD447^p:.e8EeYb[MBUMmbw*PP/$|#A-q!N=@ht|7 :ZAorzv+VD|1lpjHQa' );
define( 'LOGGED_IN_KEY',     ')rq+AZ-Xv90/yId=d$~iv_Ni:O8?V(+J3&KBt%z!s=I!oNNR#YR+ /bJg0,}Z_m`' );
define( 'NONCE_KEY',         '97D^vRSU%+L- fck^Op>N!kWF*srOgzb:PYWr(YUB3QzQy+tH5j&~e|&+d&Hx{A!' );
define( 'AUTH_SALT',         'cq?w.s$}jxFa}E{[+X1nLf;[IFb8K<K<*vDoUc@eKt2T<boS];DrFG,O_=Y@VQXV' );
define( 'SECURE_AUTH_SALT',  'vWitk-(l*wP^f+&6]7I,)Y|4UZZESkkU{XfMgzu;[NIR~6RE}i4bVwpDRPsOL3d=' );
define( 'LOGGED_IN_SALT',    '<*2sSjur`.dEH_fmjqo:vqb9|vA#vSh.?NrD!JV,>Cg r;QOzna[P9J>!0HR.FSb' );
define( 'NONCE_SALT',        'i,Y!$oe^Lg,s_YJ,40?/{zz{vR!G,;s}(MH*E)B{Zy-UT94n]U[t+g9D,1N&|/]1' );
define( 'WP_CACHE_KEY_SALT', 'HM3/.v;C_m+QCL:/d;G1GO$]T=CQjqYBy>Z]s.,2rs? D:l:3AGT#G;G&>-*(&IE' );


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
