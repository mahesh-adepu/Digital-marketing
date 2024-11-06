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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\New folder\htdocs\clinic\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'clinic' );

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
define( 'AUTH_KEY',         'fgOH7p$&?En}]y5j`1nst3{g5PJt./GkS 1uT2 #)$l`) MRdZioQ!6YHI5 ?N j' );
define( 'SECURE_AUTH_KEY',  'o2R{gW,qTD/>aD}>r1@ZoWCZSp_F;hcI:I|Sft-1(K~QRFT*KlMaDi-/&.jq(2h]' );
define( 'LOGGED_IN_KEY',    ';@m~RegVf*^eV}.{<H1rvjBwCZ9#M>81j^!S >T}I20goA<*58`:e`BDt*R/.H3<' );
define( 'NONCE_KEY',        '#P)SS+Rt`%W0gX,u%>;WT~wYC[.6.74qnU@PI(y_{pZ2W~6ku0z.i@Ij6vuA rcJ' );
define( 'AUTH_SALT',        'Zsil.k7WewJjW/lu4N2cn-Xe($cWDf0]z86i=??$r|}.YDbut]IV8-L2tYZg,N!2' );
define( 'SECURE_AUTH_SALT', 'Y,9lt Pb;]X}:95TptwSZ^B[C0|A93#n48Uq`:g47C=<IQVbeoYciZlk$yQ,i`T]' );
define( 'LOGGED_IN_SALT',   'QPTV?h0m;4J+q(FMrRjD>Wt<K/>a[FWV7r32A&`,R19-~Z[iQVE;<yQ2s^idy6kU' );
define( 'NONCE_SALT',       'Xo!?Dx@D.*?vL|/<:Mli~oT%m5MB2g9*68%Ph}@jm(q^DB7O|kkhh$mAm$eB_qW>' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
