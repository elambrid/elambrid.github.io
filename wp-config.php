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
define( 'DB_NAME', 'spacebio' );

/** MySQL database username */
define( 'DB_USER', 'erini' );

/** MySQL database password */
define( 'DB_PASSWORD', '1Erinilamb' );

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
define( 'AUTH_KEY',         'x2I6tQCpRAT2*C^:o!yFNYTMN;=p~j+]atd`!GYealdc,Lb{9)4ga<WIbm]a+(KR' );
define( 'SECURE_AUTH_KEY',  'm3}`3F1{Wc]4%{G;v;x@YoeEAurkicC`5M6O~;^}02c}qCqvj/NK*@66K|CPgo=v' );
define( 'LOGGED_IN_KEY',    '}$.sIv/}iLhL-g/9&:t;1.`0J@k@j&zg2&H!MPqz;(re9%[sYNQAnIYA[@/+FGj7' );
define( 'NONCE_KEY',        '52}<:;4ZrAg6jgAP+w&*(ra=G _:-t ff^i3W?R_txA)/`:DhDL.Y4Gzi0 F2WlJ' );
define( 'AUTH_SALT',        '~#E~MxiHY@SK*]+5R77J?`hsg]1S?BBGcBX7iH^AavnUN}#+A/k TI1|c{&EZAh/' );
define( 'SECURE_AUTH_SALT', 'rXyqk^s]wD,B5!zJpvk1wUmw4I3]1Xt>qHbCZ%]nK]V42VKzYcKzJ@xiXcQh1`a5' );
define( 'LOGGED_IN_SALT',   'NiMoz:_O2guG;}X5&D6zC2nC02$Vy5EU->+,[#YMGhi4.&G-|4Kpbb1a6VKqlHkf' );
define( 'NONCE_SALT',       'i-]kT3!K-j@qU<]6JGiRNm]W3.gtL~(r4APh?76:y6VUJmDhTXe!$=N>0HOF~YN:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_sb';

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

define('FS_METHOD','direct');
