<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rodeo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h8@Rd][3c_<+k_(n#5BXvo%.os-5CGaa5<(?egv:}$BZ.FQS,}bMK@Cp-<4}yH:k' );
define( 'SECURE_AUTH_KEY',  'gBubh?g-k}i/::Jg:2BLf#FJz}TjF]5A1,dFX}d{4up%kRA<B,3RH~]<*rBA5B$b' );
define( 'LOGGED_IN_KEY',    'Ga73vkTHFW?.)f3D#fr&i)Ed3f<+Jwy)wygKLRfkWrzjOKEr,B)G^BpZ0VA}wL3=' );
define( 'NONCE_KEY',        'Q#^~L4=|lc(4wg^&p)PEFo*hS }{*tynA]9#4;zc@do~3e %]2LM[b>h90DXo75O' );
define( 'AUTH_SALT',        'n|tE]:e#J2t2{U-urT7i/y,[ydszB=Lf`NXh_v{D/)!#1@WgGi>-|m#Sl/I1l_F2' );
define( 'SECURE_AUTH_SALT', 'ig$;04l!rwp,YwD$L[5N>x?PS|U-s*Rof|t//.J`()W`8,vOzS_p._+g&XTa:axZ' );
define( 'LOGGED_IN_SALT',   '&Etl`G~z/@>WEv4o=c9nzdy#.~><^6ZIeN2j-+6fTlS<vLQatb8xfPBi2gMe?m]D' );
define( 'NONCE_SALT',       'xQpf6yeKlt`*$0%n_yo=T;uTr#XMo%<(oQ>X*@>+{$)&NyA~lp q|Qs~Q#-kX2w]' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
