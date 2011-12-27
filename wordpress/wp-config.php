<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

$envjson = json_decode(file_get_contents("/home/dotcloud/environment.json"),true);

/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'hhWYTTI49NRMP0vpz5hL');

/** MySQL hostname */
define('DB_HOST', $envjson['DOTCLOUD_DB_MYSQL_HOST'].':'.$envjson['DOTCLOUD_DB_MYSQL_PORT']);

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
define('AUTH_KEY',         '{N2WSl()SPHJmpNyi 2eJvp;K^}dOhVj=~Y}j]S9>~k8=nM|0Q]6`qSctARuv:Id');
define('SECURE_AUTH_KEY',  ']+k+3>KK*/mHF;{A7lVl4l#H{~d.4EVb4=o_DG|^)cFIo^u1eFIir-7!;A=*RmAW');
define('LOGGED_IN_KEY',    'eW_~|>LzDH|^s,`LDC-nH/Z*U$upU<,6CI{53BYi?AR@6n,pK<%I `SvB^Sc]3tY');
define('NONCE_KEY',        'AA:Bxu8h^_?/ERZ[j!3-v}Kq$l?$V@yCM/5Rf!_i&Tpg;5MB9=6g7b.Flzsw&^zA');
define('AUTH_SALT',        's.oF}a>VzP7G9+/w(j+.UnN_RGM,Z +-Z]-rX@n,_){X(j8N`  0hK!SqsA=_W_7');
define('SECURE_AUTH_SALT', 'F~hfus4Q*^UaiiQ*{,*:Jg?U([vC8{8{iQ2{aJAOa`nq~#bjO,)Gq&Qbo?1^},KA');
define('LOGGED_IN_SALT',   '96ov|eU7ST,741XzE>D>fySD#-@bno$yep-V~Qq4d{5Hrg0bk,93]>h`u<dcNMN2');
define('NONCE_SALT',       'xHB>O2.`LX<$M.tn=[3x.?vgHXpqYgfXt`fHs}*$)msIfw,!>TD[K|f JmibG4NT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
