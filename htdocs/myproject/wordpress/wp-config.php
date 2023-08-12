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
define( 'DB_NAME', 'TH_WordPress' );

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
define( 'AUTH_KEY',         'M`Q(JOVV8t^xr^(Z4?ciY8xx Que,.$MyDlB%UYi$w9ppH6 <B{G/i/9lGb7(`[P' );
define( 'SECURE_AUTH_KEY',  '6I!t:-]cDC90{P7lTLk|VP2d(!ec<^5Z$!FONZMF}tf@-7C:#`IV(xdRm#h]urHD' );
define( 'LOGGED_IN_KEY',    'ZE:Rf7CQ $n>4.4#?kshG4Kv|F@^X%Idi<vP3k&iW515C{*2yd>s(Ov~;Qv83&Iv' );
define( 'NONCE_KEY',        '[*uI2yqNHB,dKn>?Z$_!aT94y:5o!fT1aLo-_.z4MrZ}PQ(:NvYjXx?*Jlv~Plbr' );
define( 'AUTH_SALT',        '~HPOHYDEFm&sD~X17|Gm<Y+)%Z4FIH9QLHOqJ6};Y9RT (l)4 gH&+}Ovnk,7Q{+' );
define( 'SECURE_AUTH_SALT', '[8-g(EP1K~Zh0eG^flbS-JsEFOfi-I;ySp;HA2vKv0UVkP9:JZ+9rjC5U&XAZTEr' );
define( 'LOGGED_IN_SALT',   'b0j&0<V0Wu(lwO8bxB_R+f7c0}arWa(*}+5l&WHiw<BO*KMPG_1s{`wjqGndt?5x' );
define( 'NONCE_SALT',       'S-XHR8k:c*0AbO%2pv;(c&Q|[[Y,jl#M%PNC]OIHAayB$O*iGlF(j.R&zO`~(JA<' );

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
