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
define( 'DB_NAME', '' );

/** Database username */
define( 'DB_USER', '' );

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
define( 'AUTH_KEY',         ',m!3&{]9@>??(w`(U[.2[v&/P<f`E_[mZgh<.DFR!%eBLO+zo~i^o|,^sC}cbt[q' );
define( 'SECURE_AUTH_KEY',  'I+88lIg[3AcMbX)>?1V1nRK(Il[Nk6H^R!Q#r3t!khhAGRI^vVJp?QXdh|uX< gO' );
define( 'LOGGED_IN_KEY',    'tdxXX9 weR:e>D/HlS l+RWd))!5.&5clyLeUglU}i$8 ]>V&gkoftG}C*tG%cv[' );
define( 'NONCE_KEY',        'uL7jBO/Gj1;3Bg$+ ]oR9)k9JJ L`t,g(TMdcd.4l8s(,Pc_]A+QDxw,yHO.HTns' );
define( 'AUTH_SALT',        '(wto[ZLQ_Z^oheJ,<b|kc%Oy;~QY<SE:i4e$UljW8 |3.QRlRUiSvu6lN #bYCP6' );
define( 'SECURE_AUTH_SALT', 'XgX[|Eye~^kNP]vY<NQOAQZd!9/y?RZck?j L?)nkcm629kT}*B@Is?p1i|h .3a' );
define( 'LOGGED_IN_SALT',   'Ib?~tj!8s:MlTTz|h%TyP}a>z~)L:!b}$g~9U]*9PalAY2%5Cq]_7KUUSMKaU(3 ' );
define( 'NONCE_SALT',       'IH7x0&/s+FxHh)|`WqdVkE!qsjL8BR[MDKGGJ=eXja(5Y7[9fVX_TR4OKq:+oqEq' );

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
