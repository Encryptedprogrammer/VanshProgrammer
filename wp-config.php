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
define( 'DB_NAME', 'vanshprogrammer_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qbTJhx#vWC>_owdger:;)+2/?J&2t+^7/wl k-7<X3j*9F-~ND},IA>_q={Ir~n*' );
define( 'SECURE_AUTH_KEY',  '`vOKSDdRUG0ZxsjO=<zA(Ic=]]e}?6[V4baK%eQ4hiV{PWZ K+,G4c$mJ^p~>D${' );
define( 'LOGGED_IN_KEY',    'pu>i!dCh9(Tp&Nk>&1t~(;erCkA9`iqtZ[Rpd&ppN&O;?iYMX(HPFCT9:6m1CvcZ' );
define( 'NONCE_KEY',        'k.9*{y/.?OKRmm:h;K)q`;*9h<Q+R,9-rO/p+T4G}=>pFniD=k}hqVz}vVG9([3y' );
define( 'AUTH_SALT',        'Mn+$C]/,x>J(fFGT*jy&@K;%&P95A_Q,xp398b{2Z.[}PI96jD[,^M,JJz40bsSg' );
define( 'SECURE_AUTH_SALT', '!G[nvCFOEQfDd +CtwA>Q FU(g3e!,!ySg&EY[)>I)-A?`LTCmz4L7fV%?xP:qV$' );
define( 'LOGGED_IN_SALT',   '.jHo f[BT18A^W{7bwzQ^~}b$iztvJr5T0:>0GF9+s 3+1wc,JE4{E=<s~,m5(F=' );
define( 'NONCE_SALT',       'hy#&&6-)%36`PPEw?;S/&>tq#yu<h&y_*e)44A&Kn2oQh[kI?+5>Njnv;%~3 t=-' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
