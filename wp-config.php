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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '65f2b3310a699e9e712fe2563c2af24b6a8ea64b1889739f' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/* Ativacao Multisite */
  define('WP_ALLOW_MULTISITE', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k&v(Q5W9/i5?.HpYE!ne[)f3wc)I}cxBVqRSF2_*!e?@=G-cp5nbn!/DVQ*5c5UC' );
define( 'SECURE_AUTH_KEY',  'NO-vH]jshJxfqv/+2]M5mSx+TA]&^}.7^{{;TzeU3JQu_Od-C^l[LIG.wP[,C*w=' );
define( 'LOGGED_IN_KEY',    'A}SwQS{d{UivJF&=`fZ:7Rb`:p82UZ=7mb: Y.f>KGS`8JKus&.i-BoO:54n&x<;' );
define( 'NONCE_KEY',        'hK hs4=LIO[,4h+L;f}q2TS}0=+lfb$g2MUo<eH+ZAkT~mG]B2L~9v8WpDCTTpWa' );
define( 'AUTH_SALT',        '-m(?c-2Dn: MqnJ1Z;(_}0Q6b+J%FXYK*L+{d+Mo3WFj2``gT^$/tO0/&e4V=]*-' );
define( 'SECURE_AUTH_SALT', 'd}/cC(WfU-G6is.yvL=5ni Zh0o_~(bJhziuUZ$}2lHP5&Tv$^Ljci1@1D$ sm<p' );
define( 'LOGGED_IN_SALT',   'w~DY7=i]kYamCN+3V PBKS?G}yyX`!0Xg2kr&Bo.mCrErMR8t$`MBAOLM<AIm>cr' );
define( 'NONCE_SALT',       'fX)?Og5yG^AcQB`RA)qK?Fy$[!aC8+6&||_N{U,c]T(=P@pf4 7iStl!y8{#c#L!' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '198.211.100.47');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
