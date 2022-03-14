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
define( 'DB_NAME', 'cms_project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' % BXd$lPK;7<t4)()5H,KNZ<-n>BP2c;ScrB~~5e@)~x<#a;y-i.]EGVXPhHeb:' );
define( 'SECURE_AUTH_KEY',  'Bu#,g-5+PTTIwxwe6Rud9z3:MbCjqd9|}1d(LgiR*8~%yzr1h@@xdL:cY._ln(--' );
define( 'LOGGED_IN_KEY',    '+,:%JP?R]VY1}NxRB/qj}EWq0I0WwMp,A/jSB?qO$86TO,,:r oQ&,*3w|9~m>Cv' );
define( 'NONCE_KEY',        'OJ8Jv8)rePyJ}Gf>Jriu;Fu2iURE4d~x!enY||c#-};pf2)Zy5XkM9ugB|7R:i=f' );
define( 'AUTH_SALT',        'mhquaBNQA:m|c.2U<l{&_AO2Cvv#+E}~7 S!T[*QlUz@{$_fm_cUeB.6d%Ewt[p<' );
define( 'SECURE_AUTH_SALT', '`<MQ!(K,VQ!/Md^Gf;_9KL):<FVa|?$Uh:ABVMC!XM)Ai.|a8h=8Q72ISJ,Z*`K%' );
define( 'LOGGED_IN_SALT',   '4H,Rug@)^p%FCId;LgNzLBRaS#gO-z=aSY;!kBkha3iIH,d|5b7Ex/rNs0Dd5d(M' );
define( 'NONCE_SALT',       'x0]Y@bJjW><vx4+=+8eLu6eWA:K,!QF-2;ut^7>A+@6.i]9oq>^LIR|Yh$qN6 ]I' );

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
