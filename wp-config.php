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
define('DB_NAME', 'oversubscribed_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'wu:Eznfk,D&52cU %{rZ(mC{B#oHw@wkOp9m}O<[K7]zJK$`_p.;a,D+KK@]=q,k');
define('SECURE_AUTH_KEY',  '9ThyB5f~Dzp2VYO?XYo)$H:le.[eP,Y6GN^c59a;I!ldm,VCT{fUb.mMk/xIC~T_');
define('LOGGED_IN_KEY',    'XFicaEK[vg57(naKRAl~5+FTU9=C&hV=PDDZjXApMig=2p#w,C&< !0-u<([x @I');
define('NONCE_KEY',        '~k#OROhC>bt^Y-dM}i;RX*X.sM_T2Gr;mxusI3]<j_IU5Y|@)dolQ<a wc^l3:{O');
define('AUTH_SALT',        'Adf[.^<6<f@a/~[PYUo&OmD>>|fl~;)xuW`zkJm=fX][Q[c(X&&-MqR3nm+}b@Yf');
define('SECURE_AUTH_SALT', '3dQ{&a8O`UJvk;%}qBW*W#@?y*oQ${H.b?emMjXNt6`+_v;|N.Ab3<f_k4uIezF}');
define('LOGGED_IN_SALT',   'nrSx |P;(`I?aJS5 %,kZo61fw^T-b=OCAyc&f k/F]9zyn2;+v=Z(4@6I5%3c|[');
define('NONCE_SALT',       '@gcW>iO4MU<ZMkfXJ w/N=6mBS&hj_Spto)FRM 4mwB2T=DE6O@vRcROc*i@G%FF');

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
