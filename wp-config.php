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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '|in|]a_e1 :0RH8}=^m8V0Qcf/8FQIw{?^Xs QCZeYw t|}SS5am%1~2isl]hE/!' );
define( 'SECURE_AUTH_KEY',  'x$Uev><{7rB@97:(sL4WmCk!g!R6Rk])JiS%=^wfm@y{nt%NXuPNPV+S|+=)m4WU' );
define( 'LOGGED_IN_KEY',    '_9u+anxgE&Rohbog$<ll(8@YoBxG`?j5Pk2#M:Z?y7`B@Np?E )YF67*y*pi8[Sj' );
define( 'NONCE_KEY',        '|QY#p~>Zxhw:lULU_Gg.8Yh%{^<j*5L}d]y@]Bq}={;wiegzWn&TiuLf:J*6*Z({' );
define( 'AUTH_SALT',        '*PxZ:/~K,^hPyw!7 w#2@a9@Tusc)t>Zb}P`Ig<OGk]z<Am=^/Lj;aq)3+$jbK4e' );
define( 'SECURE_AUTH_SALT', '*Mt;C g|@I7Aq#8+S/K+4%co?zVzNu!rQ]v{d7)Wy_+k)F6r^j*R^Cf02}0K`/Eh' );
define( 'LOGGED_IN_SALT',   'mhE0S!ApM)Sh?%@o0|?m~.*g<m1NGK`x&Y)|8g?vlL3#q:&Z9ERnx^qOjU.$ V(J' );
define( 'NONCE_SALT',       '^wKNmxA~xm6G%{dE=lizM62:r>),C)Yi-}<~1:FNX0BF92Agu`*&cfYk,;[#~Ur)' );

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
