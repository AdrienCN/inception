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
define( 'DB_NAME', 'wordpress_database' );

/** MySQL database username */
define( 'DB_USER', 'adconsta' );

/** MySQL database password */
define( 'DB_PASSWORD', 'db_wp_password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define( 'AUTH_KEY',         '!o47mQXwr33:wd$~4*:EvAH0{_VEd)u1JEr?gzD6;4<1#dv}3%W/D*|}e.(6)sM|' );
define( 'SECURE_AUTH_KEY',  'n4{d}IaV/fJ8F6DSNnvqO42?ZC<{F$b5Ff_T~1TI<U_w3*_q0OqfzTRE-f|>m[5~' );
define( 'LOGGED_IN_KEY',    '2>M6W9Mq+Tl~yEGv>?pAr:0Inx6&W[vwQ(&Cp2Ypl=z5_!YPwC 1$3be^(+`ujtO' );
define( 'NONCE_KEY',        'nV]&wXACY`%!TM#at(/=X2u [8X4G)&4UgrJ7ssKFcW7%eM6wBbkcCDXZ)XH)Z-q' );
define( 'AUTH_SALT',        'P&WsS2ma:6,s2l,Wd+A%ePKESl|LEvyEWqI8jG^:C+Z_(Tb8c~s!:nM~AMsN~yv_' );
define( 'SECURE_AUTH_SALT', ';q7^EVJVO.NT/mr_F[W@]#0lwl,Flzq_%u-VR|Lt:nii=gfnnpWT/oSh3hBcW=xL' );
define( 'LOGGED_IN_SALT',   '}cmcighsbPnP!KUCe:GXD4}:-R%qR_MM{UOQ#_ W`qrHhkdX+c:DByIL#.I@0O;s' );
define( 'NONCE_SALT',       'pIQ?On(L,;K%ixX(xvd+mZ@B5+y_Rn6#h}^^T(9mSCarF|BS3>t:qVIEqAbk,W0O' );

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
