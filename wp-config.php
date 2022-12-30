<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'vinotecas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5=aPL0+C*nk%6Yb5ESRQ|%&0h)qhiM*G3OLxo23yqpHTK=uBm*Z$5!}z9@jJO)w-' );
define( 'SECURE_AUTH_KEY',  'IP-b?EcZB[Av&JzH[)KNzMW@,>U2FGy4,>Not}{<L5|.SsWGP2^L0#s<Cl0xKVxc' );
define( 'LOGGED_IN_KEY',    'Wfi8@{yh8a-J:GrlqJr4VQQjE.NBA/WZ[Q3T@5CTAvs[m`MnwPud<#l{mNK+^=>O' );
define( 'NONCE_KEY',        '`=]EHo+TTGOX*uJ8MW?jX++cCv`TGA_o5dI:Q4bU>X|qoa?c)_n<K.LcqK>Z,{={' );
define( 'AUTH_SALT',        '&!D035IjjcI{}suc sK1a>RqjS:T%TnNc~(+R$6VRz$|c!aewj<uXs&RK7zsip{,' );
define( 'SECURE_AUTH_SALT', '8ff}BAw~CvsO=2S:yFHtuAVf)e2Mz`TE>kI^)4>}4plTa@`>oF4V|hvw1i&*qzY[' );
define( 'LOGGED_IN_SALT',   'dL6;{m9Pp9_CGL;RLu}<t/0I ;Ab)Us::(]-KdDpcC>W/{rt!:!:G(yJ&?_W09rg' );
define( 'NONCE_SALT',       'H*ec)!50*L,VodYkBRqzPk}E^Ug;a+1o,|G1imU~2MOLOF$QSbN]5()pEoOc}<Rl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
