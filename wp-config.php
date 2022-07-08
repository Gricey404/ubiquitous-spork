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
define( 'DB_NAME', 'Tailwind' );

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
define( 'AUTH_KEY',         'GB<*lvnXJV3Ie6l!y9RS&B#_:OYL>T1E1`yUQg8uN{t&YPfH?wL{GncT&zZud)I*' );
define( 'SECURE_AUTH_KEY',  'SyL.FqBJ_8iP0d?!M=Y*%u&9iYWoL*u@Lt(sY ;sfvi:|&uz`<TtjAue$D3e#d3 ' );
define( 'LOGGED_IN_KEY',    'stIB[# LpYC_kC0JC;9Bz#YXhteMg %?%qYjZOC^5PQ]N(Ifn58uA+@|n=SY{lVr' );
define( 'NONCE_KEY',        'D,)o68K:wOWkD1g(_6+5U*25QrzJIwgy?.RE|Zu]xsut4bSl)~@p5%t.z:Rr0aO!' );
define( 'AUTH_SALT',        '/$mcGsTK,FMg4WEriYb cb*yTf+Are|,eM4R;Q)A itHq.yGN!t}xZV-2IpTb&;N' );
define( 'SECURE_AUTH_SALT', 'S0jP;{z{O+s4/tF*[;5h`kocfEcOpY%*]H*W,_[Uq-:<(vXOcZsn9^9?IA/~(:uE' );
define( 'LOGGED_IN_SALT',   '%Sk8vr:Wuo-QlP[Q6SSq~_5]T7j2Eeb{+euAJS?7wb@0hAkMb@u>RlZxql:veaW9' );
define( 'NONCE_SALT',       'E50XxY7u3Io)F}42=}_ KcES#VLJ$p3FcZA8SBdXDii4bsAu5$(O||kQ@}s|s lm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'TailwindDB';

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
