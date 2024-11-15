<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_partask' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '48xi{sCJzG;T`!+e8,e]SgsW:vY|jRo1xL>;sQiMEri|,<hIo]dI#6EL|pwn:Y#R' );
define( 'SECURE_AUTH_KEY',  '`TUJw)jL98 >Q]@m|eFGEw+Jds]8_Z`1y]0H(a XSzk,z0cYwDDlO=%U7THC;8VF' );
define( 'LOGGED_IN_KEY',    'ecy?I%OQ*o;Jgd@r@*GII%fHIkED`YY&=r4 DceBz(AVD|DO2_J9[xlk@X!5;&E#' );
define( 'NONCE_KEY',        'QC _a9G22{Y%PmY#D[:zGCb)ZyNRt}RxQb(8We~K3GQ74ge)63qFH1nQk(CYvQuq' );
define( 'AUTH_SALT',        '8y+}y2=9[F5yPbEl47UjI8D/=O`m[yTo9}x[/Oa:D(7YxCbj=gX(>?6Jns HPKeY' );
define( 'SECURE_AUTH_SALT', 'eRr(:_*Z>~ko_HGb l~Jg2h]3{Ua)+=W94{]k|+JTSWnYJ)Uf|~ZO$jof+piEmvI' );
define( 'LOGGED_IN_SALT',   '(rm#ks4*RizB!?;=G/I mQt[Rk F ?Vx`ea0.]t==.jlvZ,|9_srQf3+f2dlR/O@' );
define( 'NONCE_SALT',       '?9#@uN-BSV7~QzyXnaE.Yk5%(:usqa4~R|EpS%!/6SQ3ReFh4,#1X?V /FS2A4kV' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
