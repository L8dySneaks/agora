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

// define('WP_HOME', 'http://agora-dev1.dayawebdevelopment.com');
// define('WP_SITEURL', 'http://agora-dev1.dayawebdevelopment.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'agora');

/** MySQL database username */
define('DB_USER', 'agora');

/** MySQL database password */
define('DB_PASSWORD', 'agora');

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
define('AUTH_KEY',         '[DSmwIp |KDegx*o7h2pa*),U}$8*fC8Rw!x=`-:@-* /u)$?AY^~EV pc-nI$Cp');
define('SECURE_AUTH_KEY',  '&OTX|qeT16i/;wp(xDU$fDU%+&^+nJmnHsntMnQxG&#xf-->.i35Ph*wr;wo6R.,');
define('LOGGED_IN_KEY',    's69cR)wt(QVB6afT`]zj`~{% v|}},(tnCC<!7V]f zxsg>fxL5Ff`eryz4UH(14');
define('NONCE_KEY',        'Rx>o=K5J*aPJ2~IBGfJia35F[RWm.A>c/iSn}L#(Z2IVh,E)S<Xdw/T.o3@5k?VU');
define('AUTH_SALT',        'Q|~]l95C)omM34#1tLZ%{NiD)%rFZl3s04a{*=|?mz:Hz,;HGt*@I>`KYwBtm|[,');
define('SECURE_AUTH_SALT', 'rzZsOVzr3R$.E[;B+e{plPFTB(di^)W&.2#C hO,1{jlQOj`he67y/UaqGVHcJE@');
define('LOGGED_IN_SALT',   '0p_}.9>*Tv*mq?_<bh$^8o[QhS4km>[>N4Y:r0,xpLS[KaQ`u(XxtyF$p^`m03N/');
define('NONCE_SALT',       'J*15<squ2_0i8qm)?=*-.%kphpqN<3p9n1u^$+c`=>rOE2?8W1fs=+vUrE);x0[[');

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
