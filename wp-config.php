<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'Brainyladder' );

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
define( 'AUTH_KEY',         'CBJVF{Xb~<nLj_O{,7LJ;uNW3$aF4FgCRM~N%5=V{c{tt{y`yGW)YGlK_Q~@hCdM' );
define( 'SECURE_AUTH_KEY',  '` xu2_W]Y^i5HUWM0Rn3QXz)4>Bn7dhR*({v`lL`4%<{[;^?#6Q}#{H{*WAf9l<M' );
define( 'LOGGED_IN_KEY',    'cz>[^fVzW_aBVw>rCCSFuT20AvY5iEQZzB/XNJ4dPQ`,kvGDRGoEoe<UKj`Vk^WM' );
define( 'NONCE_KEY',        '>-h#CZ?c]t{r mAps;dXXadv}9F~2wtf[GgH}-]|5zFymfV-7iErVKsxI=JI,fLf' );
define( 'AUTH_SALT',        ']{qB ?Tc/Z4fF|6!JAGjDA?+AGlfE!=r<si?$JK+I0?B@.N66JgY??&zyXwkp7vt' );
define( 'SECURE_AUTH_SALT', 'QYm!v/pzT@pX[2opN,0@)e`% VEFBy#)jM$K?e@b4}T(4i}FI_W(P[vYzIztSmrz' );
define( 'LOGGED_IN_SALT',   'uEw)fn0E!{&<P+-k37o54@-*&GRh^W[YV!GC`:UObU,#AoN7Uh;Rn$kA9/&FjrJ&' );
define( 'NONCE_SALT',       '%~g!~#_|aV8IB/P%E{-+q;gYCIe+85{<7/CYQ: e4(lqJ+,`P[hcx;6sZ*1/$(`z' );

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
