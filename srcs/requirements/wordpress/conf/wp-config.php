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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', ${MYSQL_DATABASE} );

/** Database username */
define( 'DB_USER', ${MYSQL_USER} );

/** Database password */
define( 'DB_PASSWORD', ${MYSQL_PASSWORD} );

/** Database hostname */
define( 'DB_HOST', ${MYSQL_HOSTNAME} );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'tTu)*/*0]:d:36R>4S?d3J{H2f(EW:msc~&Gj5KWC}4a!| {kZzIc5%(Of~-epq9' );
define( 'SECURE_AUTH_KEY',   'M{mN@KRy2MaALHw6t=)E+7|^1<+VTG]0V,luVukEC2ja%wSmG+Ph9EN*G-OCae!4' );
define( 'LOGGED_IN_KEY',     'E#mV(mbt)iqoI;C#D&t6;PPA9+2OBL+WTR 4=s>e:/l$g#<vG5v:33o,~cEl1TdQ' );
define( 'NONCE_KEY',         'WF` 7+Nesipk56n<dKS.n{0chP+`knsusXXUxSXs4;!{?PsoOODfDBIVe&U_EE_7' );
define( 'AUTH_SALT',         '1j=#@/~jB5k=v:5XY/k4VRaA%{}3xB-6,2P1R{Q)(EoG;V:j&|etjb4N6@S +-oF' );
define( 'SECURE_AUTH_SALT',  '<V0*[Z]R`Z{L.V-qEO#~Ws?R9D&WH]vMW_MH46iTTNiI#TRbpnTL4f1zcfu~?DH?' );
define( 'LOGGED_IN_SALT',    'ZJ(aepO5miv:7KkS[~`7H# fTZ^,!*&/b`!YUP:65w4tiK(o#YL<NsZXO3~pI<9:' );
define( 'NONCE_SALT',        'I]Z_T$Ro[jR&?>b`2z;hFld5;_@zpt=kVSpV~tw`0b+t]M?|8ykAA,wsIEO#7qJB' );
define( 'WP_CACHE_KEY_SALT', '?7ExYcy.#|LG@<{/E78-ASpPbeT$8en JC5tAF^%^IVhtz3RKZJA!]7e31F~Zdur' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
