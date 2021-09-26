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
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'gG/=?C2_5=DXC+5Vfumgbb_4/m$i=E(=kA;F`+lEYJn/RUIE-M/r)&6zlJ^}IObT' );
define( 'SECURE_AUTH_KEY',  '/32s&a(SY:cixkoALBEHK6Ha6OT@H?j0T,eP5/F~c13tt=;4#zO#Vvyj|x #liTG' );
define( 'LOGGED_IN_KEY',    'Mk(a?@-Y]<%.85G6b} NhJm1S&UpPhzhseDoi(FR2pgWHt#QP^Q,.-jZy3_:=I*|' );
define( 'NONCE_KEY',        ')QqG Q`JIyf(Hk!dI%OY/]DdZeugLnex]~Xblv;B^>)G]ed~bf9`xG;zD&~f$z>E' );
define( 'AUTH_SALT',        '&rNv+Nr{>eaAq*;CQtfI1b_K}nW8PD&,H63mbzK&R!co*?AG4[9lbR/LjIB%<ZO{' );
define( 'SECURE_AUTH_SALT', '[w&JRoxBb}F|WsomyNm423~$W,|qh5xsWf16Hh#YdvHZ9GL$x !4rl_{Lg}Q!NW{' );
define( 'LOGGED_IN_SALT',   '_:N(6S.dU$Ulz se3]1uf*x;yj?>6Qo<f>R=0 P;Bq.SRD0j={NB>w)*DTl0ReK.' );
define( 'NONCE_SALT',       '1al%{dAM6YzR?!z~p_Yp:;Ze1usSM$7*Y<?-aj?UY=3< YdCJl@sYF2-Xq-L%ja}' );

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
