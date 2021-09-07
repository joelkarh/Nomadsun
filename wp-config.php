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
define( 'DB_NAME', 'Nomadsun' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'DsNs)R9J4duT6x8_v*)$ Q}U|()U?_LydSFxmDvxfn==|X{>9q43cGs0NL90?0,N' );
define( 'SECURE_AUTH_KEY',  'iT.4@vNQJmu[]pUF0#9P`/@Eeg<(Syrb>-ZC>j O+jv2#A.{A8Ch`?$;5CM2Jx+`' );
define( 'LOGGED_IN_KEY',    'K_v0l)dgQd8 ]r5P$5*R|e6]5:jR7(Q!DPV86h W_<x|_O`X/}gcX3Cf0jxrSC@l' );
define( 'NONCE_KEY',        'LJya|07Kp),2+E4~k&pj|.HuLG,QNZ+7leTsx4#qPe#@sCqttFW_xN5].fR~(C<Q' );
define( 'AUTH_SALT',        'Oa07$n:>>OY9zHB4l4urBc7AzK815)O%&<wmrLU/R|]a;CfyrldDZ@MfyZiO5P>>' );
define( 'SECURE_AUTH_SALT', 'Z^SQ$cl>.H_V0mu^5Avfh8d[n<Q[6J{H)mT6](Z>r~}pCK;~<i$t:YO5LdL8I>iU' );
define( 'LOGGED_IN_SALT',   ',Fn;U;5a5ZXyQ o^(&e`_#l3T3NqY!f2UFIZzF{A?O2d%%2snt-MW}tsm?dj:zx4' );
define( 'NONCE_SALT',       '1qq{t,&=%>JXqTJ-m?g.n%5pHDNv/39Zp{8*{Mc#y#^MVA?>)7f&NF,C:J1qEfor' );

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
