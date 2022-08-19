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
define( 'DB_NAME', 'iphitech' );

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
define( 'AUTH_KEY',         '~,c<Z|M7g+G)Xl(Iv>P8w+v6*&*bbRD.ME;0/SJ9e&wt)ndwm0H+m#DAqlDZ^YQw' );
define( 'SECURE_AUTH_KEY',  'ovI&F(Pn`lSteX233n><txpSC`;L;kb&H*VNb#E3XnEqYAfU>-wpb]b.5Q;0)y Y' );
define( 'LOGGED_IN_KEY',    'IX&0Hh%e%lD$jP.&Zyw<h+Zc~%~]r^LhHZ$Z^EM#eK 1D9^{aSNK?o/_x9O-Glc4' );
define( 'NONCE_KEY',        'Z;ac5_-I!$L8<Eo5RQt4qy>2IuTR.n=&MftPo!-@w{G}lDb.UUq7%cR4S?6P=QTD' );
define( 'AUTH_SALT',        '*~B#~%/5+L!^.EH0z 60GD2q{M+#4lNs=ytytB{S(/qKP_.*^SWpA<`hdYYD*?M}' );
define( 'SECURE_AUTH_SALT', 'K `)ULA[:(Ke{Ksh&-&@{[+F[or[ulZBOSC[x.h:q~~dC 5]Ae_iH]IjF7${Jl_Z' );
define( 'LOGGED_IN_SALT',   ']GZ e,sgPj6eugHWk]ehxcG ZL#G~o}$.4NB.pRe?;53<(`4{{=7kZ>c)nn6`HLr' );
define( 'NONCE_SALT',       '/XYs8@777( b?`b@vbjlk=ns%.7W7BLigsZ/Cy6}J#h(A@4SbffT7IQHZZx8v2hd' );

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
