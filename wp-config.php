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
define( 'DB_NAME', 'habib' );

/** Database username */
define( 'DB_USER', 'habibfcn' );

/** Database password */
define( 'DB_PASSWORD', 'u[iOmF(8[vj2oMJM' );

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
define( 'AUTH_KEY',         'E> eQ-*7Nlm34R?+u^6BAWv7UUOa,UU2y(p6hs#tcU|C33_xgG[TktybD5A~sNcH' );
define( 'SECURE_AUTH_KEY',  '1FV>3(=rUjYM(:9k.xbjDW Adq6%y1l3)RmsV}|qnOJi1dBGrdk+WP5H1qMe[<(5' );
define( 'LOGGED_IN_KEY',    'nHh5^XapVZ^qtN_Tr7R?8S`fuSO6fi=QWb.]7o4-#~@XC7iz@2cUW*hK;xc RK{c' );
define( 'NONCE_KEY',        '0FjYu@sSRPg`cG+gsKRL-yJV{~/?:GX&!n@MIjJ81ltu$>x}RW^z|t`G{]B`/tDl' );
define( 'AUTH_SALT',        'h67upmI0[!ubh!Bd0c/m({gdy^lP$u/6l-PIfD#}HC3jqTH8;SV`W3z6UXZSP`rF' );
define( 'SECURE_AUTH_SALT', '#@P87h/;u;7#Nd3Iw@fXl]cKCvf= dB7x/,kK_.Ay4qT9j3$)kq}?=3CNeL}xgRJ' );
define( 'LOGGED_IN_SALT',   'E0FCUcB,w$y~K#2X57U|@mvr:Bn<AN0>L{U>V~&V+0kk+u%K)@X?4oMAj,w4UYd2' );
define( 'NONCE_SALT',       '>pBHQaFM?[-o]96od-}#-ThaDv@F^gT3,WGM#hKFJ.^~] n}CA$Qb2HZ[Az;4GCe' );

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
