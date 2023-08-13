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
define( 'AUTH_KEY',         'I[c&hDsF3nbl-=ie!HE>76XfNTd-rCQ2F=rmG[/an(FJvx1BL.%ruR>]l3FBxBGB' );
define( 'SECURE_AUTH_KEY',  'g}WaI|Z+GJ>i]  8e?H=5Qg=h}2c2b(^Zot!5E8,Fh_ao#C-Eb+mcc^4b{-pb9B*' );
define( 'LOGGED_IN_KEY',    '8%>vlgY(_ k]Aitlaj>HrJWl{m~{*24Qu_@tG2:({B;5p+(@e!y2S:y9*y{?;FE[' );
define( 'NONCE_KEY',        ';@.98q3MkrCv[{^i64kMV|=h2%y/C`#Iv@Y6{RAfwZ<=gVvt$8_GV^f+MG>y2$-t' );
define( 'AUTH_SALT',        'Y=gCNNJm0|[+c$jjVLOU:O25|/Qt9Tfo=w, u^w|+1~T[`>W%Kh~{HVUgx,XLkEO' );
define( 'SECURE_AUTH_SALT', 'R[Jhb=)y`^U6?H euJ[LsaC?>Uq=IK?SkR2L26r8 ,bZwkw)>iJq&w6MbLa<C7LV' );
define( 'LOGGED_IN_SALT',   '3AFYN/bIJH[R==W:Zl*zG_SF.  e/izU-n:EYw/FR#Y2PeMfPw><Kax5OyMucdv0' );
define( 'NONCE_SALT',       'uWm/WV8O.5aSZhRj@NRO2,YvxG?PV}2z`CGX,C^US(jfI$PinS}=H6d-g6k326Z]' );

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
