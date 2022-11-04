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
define( 'DB_NAME', 'octravels' );

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
define( 'AUTH_KEY',         '>Ag!JUAPo|U.BByB[9Fs-xA)dzBhw_k9jq8Pw{/:SEDcHi^_IoH*E%aSrIkVexIZ' );
define( 'SECURE_AUTH_KEY',  '3Kv)hK57}q^c@FF~h-OX3;#+N)R0]_RQ7nT~2fw!4F1jR>:Hy~9#[dYx l;7l|SV' );
define( 'LOGGED_IN_KEY',    '(zpk(Xe;92<S4/2HQM+n)n~_`:gT?XfXzzfjtwf^DC;1m/9;Rqko?>2Z%8GUclQr' );
define( 'NONCE_KEY',        'n.CmZXj7;Ex@#x2jT0<m=HJ6_ijaf#GY y@ylY3>GPQtG%Rg;Oaxu 0E]e27@Vl3' );
define( 'AUTH_SALT',        'Z%4N8Lqo7!7qA(>fj)8$f:S%h<NTEb4a.ZICh|(hZ#,EmEgf|PZh94J!vXyW?E8{' );
define( 'SECURE_AUTH_SALT', '`FZ,-CUm`J!T7tB[d.%i+9V=%[-3=Rzw2W,}O+EREMfqRBpRL+[{)/l4d;IeZQ/c' );
define( 'LOGGED_IN_SALT',   'mJA+wD7|l+U3j4S-0i,03M.4@YugdF.j/UEM>rpm|&Gt@q2s_:AOE8j;U(jeFdJ8' );
define( 'NONCE_SALT',       '*RCDSZJ#a6f01yK&(gN>!+0AjgO4N|EJMS/zq)]p:C0kvbUH14 2ZB|A,b9q,R~F' );

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
