<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

define( 'ITSEC_ENCRYPTION_KEY', 'bGFLP2tfVWV0L1JAflohO0tQKSE6NSMzLTtiMD4jWCpZSWs4fkJKIzF5N2VNNGxBIW0qeD45dF49ZWUrJU1fQA==' );

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
define( 'DB_NAME', 'Mshopp2' );

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
define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         ':_+*y/Lvsr2E%uq%!/J`EbPkfX;ixMveF_ =2Ky]U8]P/H4):e]!zf1Mzn!=Tz~[' );
define( 'SECURE_AUTH_KEY',  'O=TV(yv]k$h[nkjKVUI%mB:lo.;m$4yk@Q<xbv][@]edY;]`V]l!f36f`dPx~=.=' );
define( 'LOGGED_IN_KEY',    'D+WTd4Pr-gT!FOu{isFY9<&|)UBM|~H/L;72zG:N&ro/!mX38~&n#1F<>c}P:K*`' );
define( 'NONCE_KEY',        '5XUTl}eR53).`oL!NVsd,0y8pw&+F;l*Se<.}6].G(b.8aT6C.[;%md&3Z-wvLK0' );
define( 'AUTH_SALT',        'HI4eP<+XIt4n%/`hfYV#eiFvVas,)<$f/kPYX)M-?,ZdjluYaQ|bqg^eb/]q$!>F' );
define( 'SECURE_AUTH_SALT', 'nF/&|LvQ;p<aBu6idLdOqKb;rVAnBO R7/PYfBf1_,}7%nDg>dbO.gXpu[oT!6R^' );
define( 'LOGGED_IN_SALT',   '7<A9fAy,qWHQ wY+PVYSB#nH+88>j8Nx};+zXj$KO5vV>[H4r{}z5D6v31|q0|-o' );
define( 'NONCE_SALT',       'DJn(oZEQ&Q[b@?/tE(!_p=Vi( +SRJbS!Td$92X})$#]uZVzWv0/V~Ca=GwFuX, ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_C91F92CJ77';

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
define( 'WP_DEBUG', FALSE );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
