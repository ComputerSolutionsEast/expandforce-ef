<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'expanforce-live' );

/** MySQL database username */
define( 'DB_USER', 'expanforce-live' );

/** MySQL database password */
define( 'DB_PASSWORD', '8tSSQX8o1e6OrXqm' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'gTIHP)_)]w&403-sLkQzYHK8d!_S-R-]A<=0o~/QVueHoEsfS:80[4h:]DiRpyyG' );
define( 'SECURE_AUTH_KEY',  '5(b3b.dii`! ~0H&#$pU _@`}$5)^pRbkx|pu6FJ]q,CRx31_wx* Y~9=z9) ~{K' );
define( 'LOGGED_IN_KEY',    '.OM8RIk j.sB/wN5+q0U y[~Yg$S^TK$zk`=?K&q(.]jiJo}s#qg~MI*nGvVlqu ' );
define( 'NONCE_KEY',        'p~Vd)?!Hnfz87`ee1Fw/|]./DeBT2w2!Yua-:L<9bcgG,Kzn?L[tI.ixLvu]=lJq' );
define( 'AUTH_SALT',        'Q+UhnK,h8 hbs&%bBW[.^psNEW/n9?ve=NPmyh]LR!.f< XujKCt<oGZLRCzUN~c' );
define( 'SECURE_AUTH_SALT', '5WZBh:4kmjt}J$i8://[^;2j{uKJ~h8q;5;NMkr(Q)PMG5pHR%7nw<w/zE8_7vG<' );
define( 'LOGGED_IN_SALT',   'EsCs_[M61,5!{()dS}w*%=HRO&os},X&J9DDSF&bFy VLj&3n9X8)H~B>C~}x^Ns' );
define( 'NONCE_SALT',       '|1%~.6>]q7e<^^bN2 &tejawu/aw5qX15Ej<u,9J@IJkvgJB67F6wl1KBEczw]1)' );
define('FS_METHOD', 'direct');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cse_';

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
