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
define( 'DB_NAME', 'agar' );

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
define( 'AUTH_KEY',         '8Or/f^4=4*,^yxu:M?CjXk}A18@-l[5wlbwT>X*paI1d>A33lFih/(NJj&ZLei@k' );
define( 'SECURE_AUTH_KEY',  'K%H+f_Qg{/void?qq3#4REH;tH.U@6>&]u|,w^7&EcXvuJ(n=T5_~ikgj$axNl6%' );
define( 'LOGGED_IN_KEY',    'c4Q-Eq#&&,2&)@x0FlRnB1Qs@`gu=)2K5^}JvZK_Y_S31h;8cIHQ}#$b]s@UEA/w' );
define( 'NONCE_KEY',        'M1[+:4.T(qwCXb^LnL]8`v*1r%Z #xs>lY@8R<HE_e(h@j4vH,J;r@9UKn]`x551' );
define( 'AUTH_SALT',        'z|7*u?rU&W[5Fc$9^-#.X`~$nhq9CZ,[ixbIt<VIC^PljBF;EutQC@7B+3~2L 2h' );
define( 'SECURE_AUTH_SALT', 'Yz>s`-{:@-m0DNx6@_bR&-|E*Asc|(}X%Dfv%Lv4KX&DiYrA?#J3ZjxHdC$0t%C5' );
define( 'LOGGED_IN_SALT',   '62C<+D*vnY;Tl*iUPOQyPFJ&I@y$iV>%pOD3L=p?]3bhPM=8TC;+8rOQIeQC#j,t' );
define( 'NONCE_SALT',       ' Dg-NkAh8@-;{$s{4C+IucL?&FV1eSz}SLGmc.-X@b+:$PL=/ffD)aR>s/HHUE(?' );

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
