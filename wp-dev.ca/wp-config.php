<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'O_ph HJuJwU}S$>mO9i^8(XdI=gL[z!E9Rc:28.;St{^?@mi8*Gb!:%q)s:D{Ff0' );
define( 'SECURE_AUTH_KEY',   'Cd~^MH6Ws#T#CuJGo_6zx@BIh9?MlO|%;/:,: _RJwdw1E9|jXVYe4%JET7@fj{x' );
define( 'LOGGED_IN_KEY',     '_E3x)<JY_2#Dm]1Ca.Jx.}C}# rL~_4CRhWcQum$RJp36XFz}-d;.nAszTuYmkJa' );
define( 'NONCE_KEY',         'e3tW.i$E%1`E2VT}(>w)jp:jOL#69lCH}`R{rezTe=;]7[Uofn*n;GWcXDdU(3[;' );
define( 'AUTH_SALT',         '$Fz`N!X$z|5aIhvw,Y,mD-W(G,Hig!UK2t.~hZnFgRlIIWGNw+(e2JSKY8tnaF|#' );
define( 'SECURE_AUTH_SALT',  'k0{I{y$P&r>`tbEys7^eSkWpDrp9Cl|I/II>% azcpc8SUi>a}.)pdPj;u&w(BNH' );
define( 'LOGGED_IN_SALT',    'q7}w|PEeu>Yeeo4A2~-CPXs(!]BEmRy9;>@[bVZkY(ia:R JDkG<IKwOq}lfwsnz' );
define( 'NONCE_SALT',        '7iz%6LtmdZDt6q:^m`4CG!3[6<YYIW3R%8lxXbtm 4jHYq,+4kA8/m<2C4jWtkK@' );
define( 'WP_CACHE_KEY_SALT', 'bDQv{T?$&!9Yh]E^><V!dYaI,:k_{V?_tqx%<Q;gk5*6OS}:u1NG> yv8YGH-XoQ' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
