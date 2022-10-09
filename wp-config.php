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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kursusonline' );

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
define( 'AUTH_KEY',         '2BnJ=i>6_64oC--*E)fs<SU^#8]LqJ%<cf%30`@`&c8*SStxl|I$OQolWq@+j{lF' );
define( 'SECURE_AUTH_KEY',  ',:P04FO96f9Av.idZT^Qsan-41YZ_wjqWnG^5uW(k2<H<z?G%Z8]G1w$XLILc^)k' );
define( 'LOGGED_IN_KEY',    'yz4yyH<Gc;>n.).dK>zBCfIJYBvRKwXdS?MqP>Q`IVbkV]t@6-;<.Yl0x&19x.u:' );
define( 'NONCE_KEY',        ':E10Qjj&~t$Cj|u(y>`b`!X/xdk$M=Zizt!0QE_~%},j_G$OndX|+Ahw|o^cHdU=' );
define( 'AUTH_SALT',        'M;|4RomRHDg(jvZ0>|oD6qfZwu{>w[<>sI4]{fDXjRjz[G!u>9;@(b^3@FEOE&wx' );
define( 'SECURE_AUTH_SALT', 'EKXin^PP<VcS]iy(M[j?m&hk~)D6S].( ;`qcKwd;Z#FSDTE>tJ8!8y3Erm,)e|B' );
define( 'LOGGED_IN_SALT',   'osI9WGjU`[zsX(PV %w6/ag37*v8JCq50Qrm;v/;bV6<@<idamw3F2bI:ENzF[@1' );
define( 'NONCE_SALT',       'V+-CXk&VISB}t~tqTAhF.brL912_>*:laGa5o9[``MJ%a$Q7q[AB1c(U@p::1_de' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
