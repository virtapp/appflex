<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL

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
define( 'DB_NAME', 'appflex' );

/** MySQL database username */
define( 'DB_USER', 'xxxxxxx' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xxxxxxx' );

/** MySQL hostname */
define( 'DB_HOST', 'xxxxxxx' );

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
define( 'AUTH_KEY',         'XmkyRR#]Ap 2Cj{B{jT(.PT5]Hu-=Kh-V#mkF:?^k#<&S!d`e(ROy4b3KpN^D=EQ' );
define( 'SECURE_AUTH_KEY',  ']WfSW&gxl0|URCXvOSKaA,13F$KuzAFxtKbZx6%lNT*: :f;4b/E;b<Ap30ysIvJ' );
define( 'LOGGED_IN_KEY',    '^[oe^%ok7%ZG5^?~:/8J-e!`vj<iys!g|4q$[!kL-D1Vk=Dw]6nqjR>kQ `/QvSK' );
define( 'NONCE_KEY',        'Pv~K;/ITK5f$P;Ix6]tH/35dNcKcEC0@kyUM$[ma^X)vJ&l`~l}_<(&67|^w0UkG' );
define( 'AUTH_SALT',        '2e,8X=<mW^oEzyDvF5jg5D-Q,5}A8)3|$J+>ifz2]}nzvX&E.cx1rEF&<*R:fM|C' );
define( 'SECURE_AUTH_SALT', 'lI{PkvHy*(cjozUTw7o-xR,nzWj0]R8^<ue2a~N_7d/IMt;VvzD&1rGHn4b(jx2y' );
define( 'LOGGED_IN_SALT',   'eFd|I8yO)A?.Jw-G.PXYw$/UFv+@hxS]Dxrt1NSN`4dG4^,sPCi?~SHo[EklT_Ig' );
define( 'NONCE_SALT',       '!6Cw=c^L!R1(t/x)qB5q+ @KV/eM ];,ae%~K512z/!PGm[PU:lLwvZI6dguXu9k' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
