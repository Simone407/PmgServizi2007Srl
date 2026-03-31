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
define( 'DB_NAME', 'Sql1806356_1' );

/** MySQL database username */
define( 'DB_USER', 'Sql1806356' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p75h669600' );

/** MySQL hostname */
define( 'DB_HOST', '31.11.39.163' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'kzoWP>sJgG8}(w:Y#pK+V(>8!ND`YD1lPf-Nlr/S_$9Z@}KY*jURa@e~J4KhK;P$' );
define( 'SECURE_AUTH_KEY',   'Y0CM12*Hf#,?SJYzw$d{tH[?*!@|(@)#Xj_y/NQ7CoR/^;qOFX6BH-/,.32G+qo5' );
define( 'LOGGED_IN_KEY',     'xfL:BqYUkRi w(rG?Pb)Wtx9l=iuB:f|NWJH!M6@GcQ x:6B(/k=FZi[ 2[hjlN:' );
define( 'NONCE_KEY',         '&xsxhu8WKZWer{o]?&a}{WRG8G/>@S~c<VF7NXlT<C!Y8~Q:}]_hmqC`5!b9trsp' );
define( 'AUTH_SALT',         '`D;yLB9)B+FKlw}Im(&=<KA`Vcr0nqFadKwIXqK~W5r>7FGA`JGyvA7s?o|oes|!' );
define( 'SECURE_AUTH_SALT',  '9W&_5@<6$}Q!:dWwzqenA*5*R<@G~g;NGG;U)-)<I|E<c1j`,9ScMN,:6&Hvxcdh' );
define( 'LOGGED_IN_SALT',    'jN(n#SwhzzKZSR;iKR[$8N?Wl3V1}1!@*=|@_wZ2*cda2[*vkhs$T^|BAher:,v8' );
define( 'NONCE_SALT',        '%9JkSR1bv@pVm|!A+ O*SLy&1kp^bNEbZOG%&frq~>}bNwArg4ByvoE8M.-MRr].' );
define( 'WP_CACHE_KEY_SALT', 'QP;iL(Mfi{kG~/~J=Sf48xFCYnO>w]jc?^h3cM4IO(%fx{h}wQm`9{ ?/LBZ&3:@' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp86471_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
