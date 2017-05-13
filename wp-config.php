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
define('DB_NAME', 'propel_db');

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
define('AUTH_KEY',         'y>JH)5sy3QWfrlTWPrcYalLzbD/AI9h7z<qO/O=0`1M,K3[U]Iw?i;V:S2BQsypU');
define('SECURE_AUTH_KEY',  's@oFQr>l{ vIj7xM{[OF#fK;Xr$YL8[TGqk?J(6PTnR%qu_sm|2HaCMcznWq`(N.');
define('LOGGED_IN_KEY',    'ciY:w&l&)U4roc7$I!-.p443Wx[!`Ltg>j@-C/}~zP#OAW&?U%FSS}A)|e|/Hx=/');
define('NONCE_KEY',        'k>uq:P2ao7!V(&&uUN47} Q+%RpoFz{Ps;<0sl}>zmPsiMwX-|BaQksZr#!re7l?');
define('AUTH_SALT',        'veuK-wT:cb0P}W~IX,|AB ATC$gKsg^LUdT]#wRF&-OWz!]_[YvapN1(#Wk9|[<N');
define('SECURE_AUTH_SALT', 'g;]A&S5o!t5FX+/CdF6E9~z?kVX4o663]1<M8:(P|`-{@SIh*V;kfX{C^+^V`{h%');
define('LOGGED_IN_SALT',   '-It@NXgY:;;By#:q8$0 Dr.i.Et|)_|RT!Xnam?Xhe3^0n44Vw`4p710X%?65F->');
define('NONCE_SALT',       '_qB&cOS@E+:5*ZU<QJY%^?esmj#QK1Z?io}^ab(swKNFV15>`@`)^4==UqE5b1J%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pro_';

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
