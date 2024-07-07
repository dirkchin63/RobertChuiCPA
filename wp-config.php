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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'robertchuicpa_db' );

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
define( 'AUTH_KEY',         'h,Y=iHJ@^Kd8xrMZK&gO|qxf1vRdYs?^6w;#b-G-#s):XdOa?e^HB-HQ4[W(WxAe' );
define( 'SECURE_AUTH_KEY',  'zo%?!|)r~RQ0=9G)E;LMibzZ?ieYKZ(F_e29Z:byF=fb<+zDt2P:Jc!}Md]q[_6N' );
define( 'LOGGED_IN_KEY',    'b> zwd8JWNZ(Sn^.zS49CY.GbIunWpr>EQ3}d[2:)SUtdMB=r)uSJ~e:p,;kr0bE' );
define( 'NONCE_KEY',        'eyF fp2^Cq%Y%)P$hL:y;mdqsSgG<F9-NhRcxO_,hDl~!uAF{Nb)S_q33+L_Sh S' );
define( 'AUTH_SALT',        'T(tff_rg_DO)uq5%~j* 4c 6UD*APFw$G5$xMsZOd:QG_kLu^D_EwB~g;[`{CpPS' );
define( 'SECURE_AUTH_SALT', '&N,01@CA9Z;Q~jU$/jRZ&eNiaw3OkC.WE[R$}azlJR7S7x3E0z=}/;,IJdh{r1od' );
define( 'LOGGED_IN_SALT',   'lc8/0J]I!RnJ:P@Vplz:;o&-3#{Zh?xYbZ4]M2=WKo-u<BhCHF&6-SH]$.OKu>`n' );
define( 'NONCE_SALT',       'A`)mhV ;>Ts6xW2bD ~$Z5Z~%D.DzRAbrdh vS1K%J*V8Z_7XAhWc~QPudI8O|{W' );

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
