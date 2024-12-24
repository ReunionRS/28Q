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
define( 'DB_NAME', '28q' );

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
define( 'AUTH_KEY',         'E-/C]NM+5#I*vX_-**7nzZZ/s31u__Vx!<o60[6TVA5d@mwW$U5B.}~~b=^exz0Y' );
define( 'SECURE_AUTH_KEY',  '!(BD.sB9k|a,jU> T;7.pUo8h#Lh1g`ui])Lj2L!T1 kVI ~^*gW!h%[b~;eDU+w' );
define( 'LOGGED_IN_KEY',    ')G0IoZ<Nsx-Bs+3 XzXHinxvM~9#1%C48~D)*phb{l2Jdo%&IWW0[$/Uop;mGtA2' );
define( 'NONCE_KEY',        '<PvD9JyO9q9#nH|6iu82q)Sp0h=T.)[oC]i-W1@RVmNUC-NIR(j~:sSS5i4BeWO%' );
define( 'AUTH_SALT',        '>vz]5R-XZy-+i]TF}_jQapbaA6E*Vh(X?8_nXBp])aQ3AN$MMkD3|vZiN9KucNEf' );
define( 'SECURE_AUTH_SALT', 'n|`z<$G}+QA!Lwu|MI50cM2S AKC&AGjL|,oVn]=S)]]=P2bOP[zQp_w&|?kx~iv' );
define( 'LOGGED_IN_SALT',   'VP%np4y;T^jB[fmg~;C&hhj[UfB/OxSq)Ms]fe.&ml* B|428q, jIO[-aLbHG%w' );
define( 'NONCE_SALT',       '0AZ4`$h< =LO^Fv1}<uzm,}h}Ktj#oHtMFy[zn|}*9jtxmo?@V3;Zl)8$s=+v&54' );

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
$table_prefix = '28q_';

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