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
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Miriismail2002' );

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
define( 'AUTH_KEY',         '.! >a0&{9E*c/.BZkf0rY!GwW5t yo(Z|S]PGqD@Jx qng(w68L-1*W$n/]6l^5o' );
define( 'SECURE_AUTH_KEY',  '@t1-Cw{wf>O(*wDaFZY)y{_d$>ba7)R!@&P|KXiE+0z#os`j!d1: ]N_Zxr`h%at' );
define( 'LOGGED_IN_KEY',    'vY&*7J0hGP5o#yTIeSHPC6bI|sTMyI#GdoLq2W|ae9yq*_O|2T.$J,}.mrVuCOSq' );
define( 'NONCE_KEY',        ')<:qgzaXUY4b?vfW%J aHa{XWYIzKV){VeR]ekIe,6K|.f-kSiIA1M>Vd7kZv*,/' );
define( 'AUTH_SALT',        '-ED5N5MYGUK(A4_XLthDQ>bW:NhkhyXyxtk=tPE{D~h,TC_Zn/C[e($87QAb$9P$' );
define( 'SECURE_AUTH_SALT', '^H9tTK:p?JiKBP?vK3HOSksXL%t;f3N~XsQl&lA!d!Kqjwk$Hgt+-wO&nG1uQhE.' );
define( 'LOGGED_IN_SALT',   'gi_v.A$)9x<!$&|8{5Bjur#E{d>~>Y !/F7ws0V|mRSsp:VB_@=Ci1cQ W%|n:!$' );
define( 'NONCE_SALT',       'N8aux}U8;_v3}tYj6dQKVx$W`=z;C3<)(^fDlFp>VFW?`fXZZ!zwNXgNP=3X[v/`' );

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
