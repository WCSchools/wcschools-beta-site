<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');


/** MySQL database username */
define('DB_USER', 'root');


/** MySQL database password */
define('DB_PASSWORD', 'root');


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
define('AUTH_KEY',         ';=-T/:R:4O2Zrxb-/nA-.)N,a-8lAmFLolmt*:=-h*{%R:l*57.R+WWiw#-U[2P+');

define('SECURE_AUTH_KEY',  '=Jy|*2n+EnF 2+W>~fW9 |tq0|I61TK(1ZJygZRtqg@CSs $y?Qs<H|4C-+|xO}A');

define('LOGGED_IN_KEY',    '@Qa<>fz|U%ARYQL(Cd(f|XK>:<W&,mMWDI$}y-~ptL@y$QY4!^4r;R9--bu_/C$I');

define('NONCE_KEY',        'DA%_p,w%#f%]gc?.GZWNhrVPGa>JZ0bz+&t|ruhmXp^jC/%{x`HoUyO1<.g=g+1y');

define('AUTH_SALT',        'oD7fN0a|Uf$$E1.P|wg,MB,-V~sqE=OXt+WrTRhT~_$-#n;S/XhK258}|N&2-^x-');

define('SECURE_AUTH_SALT', 'H= Ssm7YzqHBB#0%r~M |b&mY+hB`iZJ0s+R$4Ae@L*6MCUeb#d@-EeeHGhOX$`q');

define('LOGGED_IN_SALT',   'm8uNa5+zzVt^I,V=}FxHK~O+^fs@hB&-@!*ll`d@u{v( =fEAH>C1cjYoOc^%J}r');

define('NONCE_SALT',       '~TxHa*EwM=(Su1Nq?@PrZ$-;Q@/W|{|<,Ho<azAt^s>qP2z7{ssOjdD8k8n2c<%n');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('JETPACK_DEV_DEBUG', true);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'localhost.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
