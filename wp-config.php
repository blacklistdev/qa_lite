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
define( 'DB_NAME', 'blackqug_qu_lite' );

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
define( 'AUTH_KEY',         '3lG(O$ajt@zdDdd^r:I?n4,|_wDL}>]<N@j:r5 7]-xk<RQW$8tcgcKIe@[1OqDu' );
define( 'SECURE_AUTH_KEY',  'S*9DuoAL~J0Zgd^Jeut ig%_rmce&Tb!B4@s C+(nCuQ 8rsC65rs+w;%())PjrG' );
define( 'LOGGED_IN_KEY',    'VX1Iz>)+$jVlK@|$)Lw?k.yE Xy;A,Ck;<DZCN55Ih`cq+X`%lCK`~Z~IJnr(daP' );
define( 'NONCE_KEY',        'xtQ,ji^~0K^4Gn,Pz5h;dJ04=PKOMpB>lW|5UL76gC^miBp`#j 0lF-pMTf4@%L9' );
define( 'AUTH_SALT',        'Y4[e@]~knS#7@Tm2R[Z-Xs1@BO2wHMw+64mrZgB/%F:kqymUZ)@Y/1K7~@z70DI/' );
define( 'SECURE_AUTH_SALT', '0`O.6aSDpX.lVpN37&&{[)@]Ac.7&%$sk%@|1b6D_V:!;dA/7T#_~{%us<vJ3:!<' );
define( 'LOGGED_IN_SALT',   'TEC`~saR(jmr>E<Ee$`Vf|,1-iF~,,h1la4xixjU>#,$BeNn 7%M?p?_1J0*^?%3' );
define( 'NONCE_SALT',       'aTw.X4q74zyB[oxHm&l^dqSwLS$q0>2+&Rpw19s*ahdBAM>D#zSMH;wZHHQ*t*Qu' );

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
define( 'WP_DEBUG', false );

define('WP_DEBUG_DISPLAY', false);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
