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
define( 'DB_NAME', 'creativeagency' );

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
define( 'AUTH_KEY',         '{R3MY8pU9kEu&A@K4vhb0Fbl8Qb_1a>u>9^&>`@J%!Q:wI[778H)M FB*`{FiI H' );
define( 'SECURE_AUTH_KEY',  'NkoRi6q@;+@U.fAgzt&)BrXYC{1`S`6;Tj?+eg<m4|PN4N%$nJ7U3]DXUP?vF$dz' );
define( 'LOGGED_IN_KEY',    '@R8$OARHI4J<Yu(TZcpquiYCfV_,<l3RvxRC$*;*5se<;D(cFPG0^%XW(LiVw-0R' );
define( 'NONCE_KEY',        '.hhWpOx[tNoLP(xJ$8kiX[Cc|(~Q-(Ed%D1PJxTf@W[|#: : v(f/$,yDL:(0Itv' );
define( 'AUTH_SALT',        'c^ltzNZcrq7+GibX5[?s?ZFZ@}I19!+<Ks|XFvQ4xu@nw`=],#F1(?IAw>kW; p]' );
define( 'SECURE_AUTH_SALT', 'fB9z^rAwq6:u`c0|T@)EJ.1LflT7!Qk5W+M -S,LqS`$Me!Q2o0fnT&-s^,}woeX' );
define( 'LOGGED_IN_SALT',   'jH3n2Z_I~V0uocvV*$2NiEz:9o;T0!p/`_PfF3Ye*F~WCs)_+~5V+W3c9J8KiY7?' );
define( 'NONCE_SALT',       '~-b pQ>lqruc-+0rihx7JL*Y~.%V4z(#]j>ZDYB*d89JgRsQM-]/R0Bu9cWj; Q8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ca_';

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
