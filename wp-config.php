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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'uA-}E &t-#u;YYo{U*!iE9ELywa<kT>2[~bDP2~F}1d?4e;gIg1NH&~h}k>O/!.R');
define('SECURE_AUTH_KEY',  'iWXFV2a L88:X4toRj/h75O0CHtAYny9@;l1YtjRa|t57w07 J9I>|37gU7$=^%E');
define('LOGGED_IN_KEY',    'G-t&gWF8|FXAJ;2` `0RmVv@!o6%^lQd)R^{30@8q4gsaFt)qeFDW||`j9R]d!PN');
define('NONCE_KEY',        'zJL3EkrAybY.5@AZ#?}=t1/Tk);<`(w%4$|Qw$^T>TqMkF!:GUFi1rL2y8W37Icc');
define('AUTH_SALT',        'XTz%U2KIv(.ud mbwnBh*lA1&$x>-+#6Nr-7bn8ja;b@G)K#xVv,2NDyFiEgf<at');
define('SECURE_AUTH_SALT', 'K9&[@@t($Um?]w<r5k>|T]-BH3h-OVpseKY&wtLZar68mU!h@kv&)BRDWB]AyV%o');
define('LOGGED_IN_SALT',   'tRT2#HLHP]o#5}d5^}gQT+*x;?6J+9%ust}~A^-fOJ>{H:E1N:h>4.]DmTH9g,b^');
define('NONCE_SALT',       'g{O1tD;0&D[Pbqn2?E!GEq@p<cs(thhX-p6,:0CUHTK9Le2>XsNG{)+Y/O_q*5 %');

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
