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
define( 'DB_NAME', 'wordPress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppass' );

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
define( 'AUTH_KEY',         '!G|+AI{{beSj(kym5Le 0U#)w<l|QSvK+ TuBg<xaqQ C%Cb]+WNLvj8LQMaW+y_' );
define( 'SECURE_AUTH_KEY',  '2?Nq!.HsD(o{dwyTUUb-#HSydl/4%j4Dyc46W{ij=p^_UlE#1))}d:-*|9*9agp>' );
define( 'LOGGED_IN_KEY',    '@+N[gnd~;(A&28jS/9_<c,6dY-@p6z3k=n2L5Kg/&ZQ2 gwCjhpUa}Kl-_n$q-Ad' );
define( 'NONCE_KEY',        'P1gYELcPoaB|<QzN.4UmZISw6JB6O%;u|MN2RKdCH5zwr SqrXnl=]x$n-,JRz%h' );
define( 'AUTH_SALT',        '9c.7:=:),ir}ggQHbn5fpf+dd<<0**R`SB8?a^1^u}JC~Fs!Qh }*!)47LUM8M`x' );
define( 'SECURE_AUTH_SALT', '1?]ZM5UIY9e~j0669nJl(U%=@l+YZ5]mn}iq3*GFidu]g423RUptFJg!ul]M[9(f' );
define( 'LOGGED_IN_SALT',   'g#.9vEK]o9^$ f_%DCU4yl<)1B>DcdoUvqV]s*nd7~`fl!YeM,#:7)$u~|7lRlr%' );
define( 'NONCE_SALT',       'ZL7uEiLY7]+BkSep53|##,lC{u9~>h<0T:b),`fMKJ3_Q2]2QF%Ydez|)ETYkIVY' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
