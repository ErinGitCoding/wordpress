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
define( 'DB_NAME', 'sdev253' );

/** MySQL database username */
define( 'DB_USER', 'sdev253user' );

/** MySQL database password */
define( 'DB_PASSWORD', '$@Ni9iRh$M!p2$&*' );

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
define( 'AUTH_KEY',         '5)w2@[*t(=C`Wz,KS+#hYM!$2?.Adnk+bk[I.YHofSj,Jjeb!@vKDNIss7Q%Z{c{' );
define( 'SECURE_AUTH_KEY',  'TuBQMzJg]NL7D?(Q8=ahY9.%gTK$npLOoSPySWL#U&#UiZ):YDh,%?U(=0XRsM^^' );
define( 'LOGGED_IN_KEY',    '>$^g(uP:!@3$kUkj[/};Q?k#OX55j6#F)h8bl5NO K|Qz0/qlNS1D%H oUEjD`S)' );
define( 'NONCE_KEY',        'f>);0:T){=0wt2*(&e<#_<@*Xf{P*x_qZ(C?s`2g7cUDGU4jO&)xKP*,=}V:76CR' );
define( 'AUTH_SALT',        'X[sGhFzZd*r%qj}`YH/$BiIGm-<%uT|eewch%RKZTOXRu%n4MosmLt]fPBG{8i3E' );
define( 'SECURE_AUTH_SALT', 'i6^uOrFy;p47>g|>wnOx?mH8Y!I*ncEPveq%iJ<Yfy+#^Ks#H?z:p]}H=X|VX%)u' );
define( 'LOGGED_IN_SALT',   'OBe93G@K)PNn)wi|:vYYvor~TZE5Z&F{Rlm4I5E,-Ko`7J@:4*Vov4KNc{&W4!Ci' );
define( 'NONCE_SALT',       '3O#6.-dA9y+DG+>my}}kTUIDNG`^=4VUHGVKA}`g=@&W)7*`bCqqy2h#L(]oz<uu' );

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
