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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '1234567');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@^DD uT]|&jf3x -doWbkR(#1wGR`X| ,3zYs+fC|]F.fvO(x#w|si4K5KH&#`O&');
define('SECURE_AUTH_KEY',  'sBASDN9M?Zp~e+f!4tU8S0{s99*)-&#h@j>0 |b= L%VU~uqf)~&-=X>4Q;N[zn1');
define('LOGGED_IN_KEY',    'fhXFmD_0rh|b7h|{SAHw-A~WzGUWh#ILenF9n_3-aaP7JUF~0v0+]`aFM128QG{j');
define('NONCE_KEY',        'fM0*OW&ge{LEM{#>k<sjt AP{[SD7sH=*<]}|o;JBi$lM|[9%q.E%At0`G1JwTc/');
define('AUTH_SALT',        'bdlWp|I^pGaB@yeg47SWjr{[mYiy3w)w?RM}BzYJ#O#}}[,11fh7x3T!U6jhEn-2');
define('SECURE_AUTH_SALT', '&y/{.Y zgxy^+r2WcTlr{rdv5yZt^$92h-aAt`4!E&mZp!%>JK-zjT21aWc lPjX');
define('LOGGED_IN_SALT',   't6cI{xquW+Ets=lDi!x5z(eL!)@j*B3mE){&slGmszY09vk+Q+::tvtK=M(I:qhX');
define('NONCE_SALT',       '^O:iqLYmje:nWG;GStkMplg=Q8!JiN``VL{d@74qZ27sI[biwje&6-{jQ-/eWf?:');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
