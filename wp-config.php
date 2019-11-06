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
define( 'DB_NAME', 'imarit' );

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
define( 'AUTH_KEY',         'kIz`ptH6E`3Kn^=@n7C-/)Su17Pnu9Z1rt2LIT8X`?o[si,r/8[u>7QMPFfef-c}' );
define( 'SECURE_AUTH_KEY',  '8}07@Q7G1|4-qUK7eMS0DS}ml96I*]|yS0.]k_c&p+{lxd[V T$(;Rb`<UC1ca 1' );
define( 'LOGGED_IN_KEY',    'dxfqKVVGChNX5|UPO1~>[2vp0HLC +,yGTbA57d=|BV/)cf_g%lZG&SmL*O-J9.A' );
define( 'NONCE_KEY',        'llA pzy1g7pC*2q]D^#WN`=KRO{8:hPI[*I=rgAyk;Z:$mK{{qjPpBNZBAgllKq,' );
define( 'AUTH_SALT',        '|..L,04;o;k^65]:}3eE!]z0.=<nWA#:~lh^meNf>ofMx>3D1`;d49#[,hgA1kuV' );
define( 'SECURE_AUTH_SALT', 'njx`E<sY[LF8F+.rEuPz b%{vBk^$f,=+P2H<L|86Z166AK7,OCRAv[d/g)uKZ~R' );
define( 'LOGGED_IN_SALT',   'gOS>V=wOpw!Zq4V9A,.!f{RLJ;:K{1KjG%iN$0O=nfd&mOD(Q?.01+[$%J-Pd|xf' );
define( 'NONCE_SALT',       '&^jgDk|Sc(ZT-8<6$m^HE ZH}Hfd!5,rnrz{|9I#djzkzMqIVEmwxC{MOJ3%bTb4' );

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
@ini_set('upload_max_size' , '256M' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
