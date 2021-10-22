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
define( 'DB_NAME', 'tutorial' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'x78u`X_Do?[wnMQmmji-#&>J2KedRTOcw$gfV$WP7X}:BNL7;L,=Xg|GUfE9Q1?b' );
define( 'SECURE_AUTH_KEY',  '0N^+Q.!!v52sqPcd*[d([E/IyLh{FT$1J{8oG[!646wWO1tj(Q9Y0^1@P3eKr,m=' );
define( 'LOGGED_IN_KEY',    '-L^u_VoLJ+B!y7X(jr-d`nj.rdMt[G)aUZ>3qBSw,aIN&8Yo,Sk>BS3Dh@r[`S(%' );
define( 'NONCE_KEY',        'Sz1ni VY>vBba@Q-^`EG}wuJPA&-IX$r03lbnC5FN8]-JHBr>#)Usem`_cb?qw~&' );
define( 'AUTH_SALT',        'DE*5{U. viC+mupfq4t!AW@oeCkM-=}5fnh1[eNSh%!gU}*UblG}KbpI5WRq;w-]' );
define( 'SECURE_AUTH_SALT', 'Rp0x~3~<p:/q6WEIPe~{hmPOop[ieSrR$:#qBPRCl?,H0]]wa27N>Pf*fJCX}L8h' );
define( 'LOGGED_IN_SALT',   '%NOqXWteo;q@sHCxpCH+YKOj5{3e*c]l.7?SMD^7Q*i+5 50:RBq%qZsJi$/T`f8' );
define( 'NONCE_SALT',       'k+Zl#[ =!nYcvm}oTtrm4HDQHF%!_%Fq_XL_,s)dghD+[<XwK:x.&-V-at.snBMT' );

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
