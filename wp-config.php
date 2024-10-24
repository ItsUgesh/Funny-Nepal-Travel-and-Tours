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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_fnepal' );

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
define( 'AUTH_KEY',         'Z-!fA9OOh30.Q7zH5&DCH[7N8zbu)>`;/G(4u&O<;}=FlhfD%[I2& {2cudl]uO?' );
define( 'SECURE_AUTH_KEY',  's+f91`F76Die^oX<]1?m.ZVf$.~,BW]9/usTx%=z49QJELcK,bYmB3>*>A{M@7?R' );
define( 'LOGGED_IN_KEY',    'yW0z:r.i%cuL/>P1?0r{Fn<kpQ?_%v$`9thUY !OdC}872PU6{bXbQ;`#T}X8{dm' );
define( 'NONCE_KEY',        '?by::|E<TlG=mI^1|q.zHANS/Q!gh#Ac<0[aGZ?GONiA$:0+bX%jEElI>z!iH9Jl' );
define( 'AUTH_SALT',        'v66qFY8V5srQ5h#/iCC6mS1w@8p&WCYtP!nP<5FUsp%P3^w3rW5kjHV>mi$Zsl)+' );
define( 'SECURE_AUTH_SALT', '{:]_Usrb~t_55y35ac?kp0ZEFZ$yR<|uE.%I2OAm>)=F?r!05$;1griegr^Xo8Cc' );
define( 'LOGGED_IN_SALT',   '/oshk}C@1jniz2*4iV~YU*u2X[+QXg}=D~I?3eg@P+_s@rmy+KTR3Y}YRs~&JM{x' );
define( 'NONCE_SALT',       '!c&lq7K{w2%2zlcbowM9mVEK!QikS?&;Y:WB9u:P]Sl->kY33x(Hig&~&5?@2eF9' );

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
