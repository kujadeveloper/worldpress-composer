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
define( 'DB_NAME', 'wpwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'kintshop159357' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'pC>a!6oc7*4eA?6~B+5`Oq72{/BZNc|=ur,RSr5O}qKQ0A87V3bt]fg(e )D25]Z' );
define( 'SECURE_AUTH_KEY',  '@PK{pw.?,QbxxTT,lN(sHL=C@]S@5}w?Y-h9yV80%{t_rmK*I&8hCLga@G`V 7C_' );
define( 'LOGGED_IN_KEY',    '(u7NkZ)}nQ5%Q32aNR%FbnZe,zsCv,z}&P/t)z{PKXFz]jy<a,@-uWksPMw>utju' );
define( 'NONCE_KEY',        'I8S1T@~;L7_g+tkZeZNQv~ 2!JM(n-)+BJgQ}e 0J-a8n+9KB4w}1`duuZ=0*?<w' );
define( 'AUTH_SALT',        'W?U+Bx%Yi|K`WRWt/eo,P|{7)3m/0Sgo!Te`%yNP!8uP1=-<L<|Ib@KTc3s4O)B1' );
define( 'SECURE_AUTH_SALT', 'PwWy:$O!&`TF rSZN{XN=k6TGi/V^?Z)Lc>qWR>!;Um~@_9Of+|@[2E2$[wh5zT%' );
define( 'LOGGED_IN_SALT',   '~5([%nTxJ7UVV|I2l:3z!Wjj{vJl8a7xtLA5@xzaw41M-16k;ldB{z.[ek(I0=b4' );
define( 'NONCE_SALT',       'cY#q@C&nL}3Ho$L3dC,AL>Fpb0dsHbF%6v#2Z]c?4*W5L(sly]QZqBie.D:U6Q6d' );

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
