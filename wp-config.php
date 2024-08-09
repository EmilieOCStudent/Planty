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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         ':7(4E&-(M!h*9Ik0v9k7g#~oj<Sr)Lh$G;IL#@cfTrOH7ub7Be-5+Ul2MM*X{mW^' );
define( 'SECURE_AUTH_KEY',  ' <9t]H9@5-yfd^x2Z~vd/Pl,I@sMr:X)mbi[CnM{@]*4eH-GTdsuFlxA- Ov7u<9' );
define( 'LOGGED_IN_KEY',    '75fb}1mNx$#r/ o-lHB9Fe7#qo15=b`rBU u;R~+nH=<T}[>m9aBTji.!Ow/VIt+' );
define( 'NONCE_KEY',        '6J[d,|?%k;Nr93~;`dj x-Kfj5_VH _:hXBIe->mpx@YHNkWUnV7Y_!Lf9v.,nFk' );
define( 'AUTH_SALT',        'hZQi|lew*G4*V9rKoJfC:kF[Rs&Gd=>)PH^:W[6zZr~]jQKm:2Yj>o_(v[cwo%`=' );
define( 'SECURE_AUTH_SALT', 'Ud k_8qwVRq:< k2tT9iLcUj=D^`_eQX{/:B}e1:VkCTn}H>Ux[e_a|<=~&{_,xK' );
define( 'LOGGED_IN_SALT',   'Xvz;{ s[eT|-q7*C%l;A87Qt/cr1w)`J9w. Xb3pHs+edyVjjqF QG/*!WJVXY$W' );
define( 'NONCE_SALT',       'FRFIzR<riK9*W<=!~_#P)3?G`zXmC)4Sc:_e!^X:vYTfi~l|}eS050J?sk8(=qAk' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define('FS_METHOD','direct');



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
