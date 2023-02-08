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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lab' );

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
define( 'AUTH_KEY',         'pgU}&~v2Tuq}?ytJ{wT5M;UgU6s4RAOA=V8&8v)&()AW)j5I%feJxz[k{8rG(vPv' );
define( 'SECURE_AUTH_KEY',  'GgqL(_Ui<iE2<18T,~6@NJq9SEDe~ecp5V8,nNMp*rho0G.P:knLYg=s&d,6L-dS' );
define( 'LOGGED_IN_KEY',    'mqJpbo_!k)+4tx&}!] &0$a*XY5Xu@]j6u~M]e7RU1Bh=oo<utFG(,YdBw3W[~yV' );
define( 'NONCE_KEY',        '6*06=icjV/EGmrM/Cv^sICQtnpZ%Ft`^*mzT9dr*J8Q8941_k5UP[KZ1<Wi!nBem' );
define( 'AUTH_SALT',        'x$#p6scib4E*{f1.8v_WIx8(Cnx6xQPpp?l%F0u:tf.5W]I`41<xgmuKJl-)UiS}' );
define( 'SECURE_AUTH_SALT', 'l_==ecTO8Schp$.R>_UMh`ppa{H{ZaRU9z+]fWKq?m2`:+R:S&k+XmHn<&C#?0 _' );
define( 'LOGGED_IN_SALT',   'k(iAl>q}RTHGj)y_;Rt_o`W;?|SC^&G@0%QjQhf7CuBuNBpcaS(u!$PjNPB@KMN ' );
define( 'NONCE_SALT',       '=!YU!inl86d%>[h9$)TT#KD10[WD7a02TP$-$LGO,Mf]G-P1$Q~N@{j1P4zRC[]1' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
