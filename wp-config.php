<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scholars' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>lZ4DFaVm+YV>{30IYfji40bLNhZ&6)}Zi*W*yv%wU>*o%1BM,Ep4qk8>_t-tH,R' );
define( 'SECURE_AUTH_KEY',  'Rw,a%[H clg|>o%tkh:@!$@_^6lPOs2>5)?z[}T9NE6QcGw9Z/L4-{7PD0Y+?=2?' );
define( 'LOGGED_IN_KEY',    '`dHEPtTF%Os|m5|>4BB_p@XFqH^GUoV_DGJJ$b_o^?6L96YHw!Bg;)|pfdD0HL2#' );
define( 'NONCE_KEY',        'F|OKDGfgW9fAON(&1#65>bhB%(nZN06PRkE/z{^2a[l7VgaRa3Hq*ZL#/}(z>B^2' );
define( 'AUTH_SALT',        'wBXfQ<Uv&C)@~9x9/C8&G{`oHUiw$HD/uz<AUdV%2OeRlKx!(4ZvN}/q`+6I0/kp' );
define( 'SECURE_AUTH_SALT', 'AIRM|7&DYaaDGGoX!++cB_P[Ja7Kp)lS/pK2k</C(PJ9b+_v8zc &AiR`+Gt7}M*' );
define( 'LOGGED_IN_SALT',   'gdet~hr{x?Qrc(98^b8Y}W?,;YP0&DU5h,e9}aezGs2>TQ]U8~M;GWmIQ^Qp)8rF' );
define( 'NONCE_SALT',       'Iz5C5&gL`>o}r*!wQ.3fOibW0@G]/ W()EeE04K};E-C64UM4eS4z6+(FS9p5]Rh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
