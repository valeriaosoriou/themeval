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
define( 'DB_NAME', 'themeval' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=} x>MI~sPhsO@AcpP@9sL:Ti@[xV5Lcs 8!wk[dx|z:r?kC^Ok=Y-9D3s_3Phjk' );
define( 'SECURE_AUTH_KEY',  'ufTW]I?@c3ILLz?fEcR?v:z2J6QArGkM&U)7eEr=@Wd(w<56fP>7g`5blv5)mI T' );
define( 'LOGGED_IN_KEY',    'QQZFXM|@Jdsxg>i7:XgL/,u$^d8@zVPK{x;eVf)}nE.)LBA8$+I?I1w;7iu5%xU=' );
define( 'NONCE_KEY',        '3yiHuen{GBT..]w^_w,OK 9`wE.ei7Jz!LQ=y(_<K.06[ZI|Mce~/O/53:bWr;<t' );
define( 'AUTH_SALT',        'N{|?ea2n%)#3R*/tkGSc#cH}aQI+%(SpU-_WN3.yWI*VpA;[m<jBY2f+dYEOP|%E' );
define( 'SECURE_AUTH_SALT', 'iho>vWXk)>545]5uY~wWq8:8#S1[{5@!O6!E]@a~3T$[+zlu21R)&/}MaT]uHI`K' );
define( 'LOGGED_IN_SALT',   'G5>A;@:] 2r;>fVZ}BIkc>r40^p<KvDbZ^JFc07Yv2)GcS )rnXk4&Uf#E8;VB{`' );
define( 'NONCE_SALT',       'F=mF]UuBvA,,Mrk-t ~gmWHo|alk@MI&{v>:Lhwv86Z3Mdh#AXP1=zS^8G0s<}A~' );

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
// define( 'WP_DEBUG', false );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
