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
/** The name of the database for WordPress */
define('DB_NAME', 'db415481915');

/** MySQL database username */
define('DB_USER', 'dbo415481915');

/** MySQL database password */
define('DB_PASSWORD', 'tay10r12');

/** MySQL hostname */
define('DB_HOST', 'db415481915.db.1and1.com');

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
define('AUTH_KEY',         '^Hp=N#H6Wvxu:pjEydujl,.1J275``z%tQ,cnq:vf%Nm.[+8+s&tUiU#j|(+G#|]');
define('SECURE_AUTH_KEY',  'K48b}#Z33i#ZV`HQLA82=j?5np>:]DH$&GiI-z4h9TIj_@2mT %}NhMJ`s]vk_z!');
define('LOGGED_IN_KEY',    '+6fpvAr(G*VKA )EIA8zSU#b+>BfN^PKTk|Fp>+N#c5%K+LW.!qS!w(9noi@-+2L');
define('NONCE_KEY',        ',es[@8|57[0wBm)m/Ky(JLB}T< y%uB{~Y %:f-,^s&:H|[RwSF>#sj0/]I$~rzN');
define('AUTH_SALT',        '(;+EipHD]4I{^pMucsE=C<kWt#E5;Dw.3^~wWar:@:z&NF }EPZL~$1B7m=+N][}');
define('SECURE_AUTH_SALT', '+) ;#|<CBorr^pSIrR{,Pj.y36Y|krx%O02`5#`FR<n d-#s$F>{mbac3n=uYhrH');
define('LOGGED_IN_SALT',   '.Z$@0^$4uO,l+LZKRZ*_[K{4FymSuY!tL&ipojlIbI zUqSPAN^gwY;g[Yi[bWC^');
define('NONCE_SALT',       '0Be3ic=*/bvm.B2b`gUVtqocs.+J&uDD672F.-(o?v;EC)5|Ox#o}4v3L=(o|#h)');

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
