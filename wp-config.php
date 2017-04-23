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
define('DB_NAME', 'burger-king-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '%T?`V}IbL/)y&}tjM1tX<)L.s2s)+]t8WMN*#$Vw Cj;]5.<aBoV2;V<ixqFTe)W');
define('SECURE_AUTH_KEY',  '>D>@]Bl-j=hBl@6!:--O;`;[r;D1T44YR@X2$+B|}{.r7X|^&ZsMfuk;-JScG$Yh');
define('LOGGED_IN_KEY',    'LJ;aIu{DOgxC)tuv|MTOq^-U,oG<bF6~QPP(DCr8|4efoGb&$LT~<HC%K9FugWUV');
define('NONCE_KEY',        '`mG~Ak{y_xQK::%^0fI}+n^3zYxC-,PAQtiW1-*sI(Hn[~OJ/Fe8J-4AsHoWL##~');
define('AUTH_SALT',        'd9EHfR-3dIWY0Gp5dHYw<jD9E|)Rv+3g8f5Zb*r&{Zk;;UV`XHr#D>nf&TTQck-z');
define('SECURE_AUTH_SALT', 'XoUu76H<r,%+0A@3tJ}lVoke)Md{l{04_2Zm{G;K.QZpo;e!F~<+,,or+#A4m Ee');
define('LOGGED_IN_SALT',   'xlA0Z)T>lN^FrSstUg!`30*hUGK?jQJjuz=J+44%}@aZcZVHFi>},7le+/Dqcan_');
define('NONCE_SALT',       'Hj2UkzuXL3n3pr|u>:Rbe3!kY}XfPOw&($epBm^=j4|a+[o3V*~g|W?+Km7Y]3gL');

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
