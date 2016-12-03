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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'startup_travelblog');

/** MySQL database username */
define('DB_USER', 'kevinw');

/** MySQL database password */
define('DB_PASSWORD', 'newage3k');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/aA[m>WmCH5<c0kUcpuYZzBQ!/.yI:c~fwOl/_0!l^vg:`sGlHyDlOR@diSN2c7#');
define('SECURE_AUTH_KEY',  'q*%5ttQJ,d#rdZ2O/uT-D`IAY]IDP%#>WFzDnTcB)uVU,LbzRp(EJ>Q;^;ix!p*#');
define('LOGGED_IN_KEY',    '.,9*~df!u+$vUff{PC@Q`=r]Siwk,%/[[q+SjIV!zkY.2+&NsQue#MC$MLji;CM_');
define('NONCE_KEY',        '=M;Z]HV;WgHuU8VYC(,)Qhx;0bl}tA#JS>_:<<Jb;n;U=2HdUXXrCs*NA:16)*lM');
define('AUTH_SALT',        't96l-lZ[6i/iT(Z?&q.nNBx+p=2fyXu^@hK6HF~%t-r`)dB{N_Fuj|AYr#FL[@}p');
define('SECURE_AUTH_SALT', 'R/&X:<K^EA3:uMG}@`52ps>1O)j-#n;6{m4M.?PgA@j8hVtB75]zua3>7+/y y1&');
define('LOGGED_IN_SALT',   'tb*03 Qn&//VLrp=BO R1us]a4lnba/,{DhP!=(Di*8Qm*NO}XM#AexWR^Uo|:|C');
define('NONCE_SALT',       'P*uR160>]o0s_g8LjbrE8cwp&$!R}OZ1:d<e_z( r-tlq!c8|FU_e^Jdx{{pI=qM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kwtb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
