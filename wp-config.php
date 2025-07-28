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
define( 'DB_NAME', 'wp_courier' );

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
define( 'AUTH_KEY',         'N})mp}qBBNHI=jAECTUmAz_]Pcb)|kCCOhsWEG)E1*}DUNvr.!J5{RtP^]p#35[c' );
define( 'SECURE_AUTH_KEY',  '6nr1Mk#aa1+:m&JuXvv^1=kba=[`FG5k|&MQAT-Z[lq&rv&z^fyIapS/z1/3}!xE' );
define( 'LOGGED_IN_KEY',    'iqd6v!=B@$S9#cjBL*_g9pU +Q%o|u~$p0hjZIX&B[r/oPy6^CYgYT~OCyvwW?#i' );
define( 'NONCE_KEY',        'IQT {#AH7dnEfyoHe%4ls _7/{rH-o,y@$#UNPHu<}OxvrFiVit?CR/%R872xlbb' );
define( 'AUTH_SALT',        '|c|Ykf?/1{b#^7iSJDp/Y^g11U>KY[#OfN>a:M`H%R?A]n2pJ0<^{ejHJR>kK^&7' );
define( 'SECURE_AUTH_SALT', 'o)6(cEf5r=?|B;p[zKucknH<V?es=:w@LC[$I7H+@ncuyY4zvVt.aX<WA)?.P%|:' );
define( 'LOGGED_IN_SALT',   ')yxzABO9WN y(QfS=sNa18()x~V/fT1v}Zo/urchoEj(?(];ZEctPVa{ nM6ds`*' );
define( 'NONCE_SALT',       '.arWOu; stN*EVc{Wh*/GoS7`Hl*ZL4b7{?,jx.C;>qk2@)LDd2e@+k+sBo2g,[6' );

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
define( 'WP_DEBUG', false );
//define( 'WP_DEBUG', true );
ini_set('display_errors','Off'); 
ini_set('error_reporting', E_ALL ); 
//define('WP_DEBUG', true); 
define('WP_DEBUG_DISPLAY', false);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
