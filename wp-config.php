<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'tharaa' );

/** Database password */
define( 'DB_PASSWORD', 'test1234' );

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
define( 'AUTH_KEY',         'X+@+>9x`R 4v2`T5C]9ZbTv[`U@P&s!tQZtV5&ia#lR&4{p:QD,fy[W>r{v}mBO,' );
define( 'SECURE_AUTH_KEY',  ':t^#(IQ/HRd;E6(0Tw8X_bcL5&c:/*voaL3Cn_J1W*mY#azt1;pZAWE>[H~`|Bag' );
define( 'LOGGED_IN_KEY',    '}ivlOJ6rdI(L}bY=k4t,#~]$RjL?fO;#7et,`qo6z&wPIUr0~}2E6H9Z;,tF 5MT' );
define( 'NONCE_KEY',        '#Y^dDC%hJ@px!C;uUBZUi>EK|;*id?3CD4!j21`GUsm2]aql_-Enop]Z8QP()#C7' );
define( 'AUTH_SALT',        '0P1WhZ0a{Q^?;Nz)#5$W;.91B+C{omZR[dLVw!T|yQ^^]6ZrF6QxM{@G0% bE(b}' );
define( 'SECURE_AUTH_SALT', '>-zGx6wSK?=7hrQVa! xRqVHB1cgTe)CbvignC,=|EAF4([zqa])S.%:W,RDP^Bv' );
define( 'LOGGED_IN_SALT',   '=/ghcJ`$hky8|q]zVf&:<-HHp0Abw k,V&<FXvwP45;Uyk^-[1.##Qe6^fUU4xxG' );
define( 'NONCE_SALT',       't07,1V^:KMj{fFW~`=v#[YS~?1vxdk2LPJei`1OQLM-AH4-c@R_dwvS9tlDNCOQV' );

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
