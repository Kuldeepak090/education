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
define( 'DB_NAME', 'education' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'vCT{Gt-U/@{3Pw)%)~&;& _AT|m1acg3MkK.S`1z/Z?QPc>VgS~MBNZ[JJ6[O.:N' );
define( 'SECURE_AUTH_KEY',  '6/[8KtNC r96AVhO5cGukm.;tZNx2jstaN-(4p,}QN`c*YfIqT@#GI{Z EBY3(}I' );
define( 'LOGGED_IN_KEY',    'wxehsl(L-Sd@wmYuT?FhT^$98g)]p4j|:c}%n+*_XgVKt_E=M@J|r+#7p^2]bJ[H' );
define( 'NONCE_KEY',        'iV!q+?;+ft:]D rz%G64)hxInu?(=:Q0Q^48^C<0#YPCk-UTfk,k=Pl~>k.A^ePn' );
define( 'AUTH_SALT',        '68$+%{2F7wYNK.[xBhHQ)(w$7X^F4#V1$Zhw]@8ZJjfFJjNUo=C?U0p+jZBv_#j!' );
define( 'SECURE_AUTH_SALT', 'rN3/4jm5m8s<IydaMMKT}suk0%-@f]:-,$&$_.tD[qS=QXa#V*y*6Ku^d{PH2L=H' );
define( 'LOGGED_IN_SALT',   'e9>-o0DZ*PS/zaqgRdl4M36< l2XK+P9[=A!]7-d_/vLV#&*utkxYNjzLOHan8=6' );
define( 'NONCE_SALT',       'x9E&p:zzI&r!PbH_;rvWK7l=v@6SBObo6Muj?,-ckx~km:pJFFJ1(dc$%!J^<#tB' );

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
