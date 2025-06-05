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
define( 'DB_NAME', 'La_vie_des_plantes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '+{G.Fg?#J5z<~pn%P7SDBpH3l;D;E7,X4,v9Jhw!W,WnmP4WaK1HD|Y-6[<e}`,T' );
define( 'SECURE_AUTH_KEY',  '8*Kr@rwlXk?Fi.R{$2]JW7@vcLZHtgS`viG~~+[F,tyhKteRr`wXJOAkb2f e89I' );
define( 'LOGGED_IN_KEY',    'yp]+}+.zkA&}vEeyi&kGWp*Vj26dRg(f.z%keo7=|snOvzYbg6?AF[#CS=Pu}nE.' );
define( 'NONCE_KEY',        '>Cs/*G?.;P66F+)LpJMiTm+94<O$IRW(^z6u [P|b$&)w/|}dI%AkkNgu+/^vv?s' );
define( 'AUTH_SALT',        'b@$t%p`kz|tIUQrG?f/+6@mUAp&sMAnipTDsVsn~Tx%j~,&`7&UZs,261c/_[vhP' );
define( 'SECURE_AUTH_SALT', '#z*L|QdnG>o[)Y/H<m-1{<M*Nzg!e1YW`:,E$vx*Sf+>L7SkfHK)p)68O%C3=ORo' );
define( 'LOGGED_IN_SALT',   'GreLD)]UE:]lC[ nst!rA#5*/<#waYL/-*[B~]DII6|~6sOML7BLr;`Wc=&?k_M5' );
define( 'NONCE_SALT',       'W}MlixTC15a{UO63j:gTA,e02WO1fcT2&Sb7P1|p=}~`Znm~[eZw^h>%yr}xv2q8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'mp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
