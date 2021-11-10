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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'A`D0M#R#};R]VEb84Rg3&F(QS$j/:z)W$?B-RLEYHk!/3O,?Hq5!,?n_s9Acc}{Q' );
define( 'SECURE_AUTH_KEY',  '|j0Z_yGVjRYxR-b`+>f>t:g%(e)hQp |`E~J[d,|4ru}bU,v7t@XpDZN](U[<6h8' );
define( 'LOGGED_IN_KEY',    '6a(9NsNKIfLl)gh7LUkDY~~Oi}*T)1;nNC5#}>;~JB+H`d]_YhL^dw${Y{8B=.pg' );
define( 'NONCE_KEY',        'gR/UCZ(9xgqq|H?|2aQp#BRC|6z:O-0/2B2?j<o$Q~0DMCD*JJMof.c4r2>{*jr(' );
define( 'AUTH_SALT',        'ChkoX@;C+xMzf6|7yT@[w<@g}t0l)1+~GN&Dg|$*,CRsix4NK6`xs_i:h+[s+43+' );
define( 'SECURE_AUTH_SALT', 'KscfSv}dOuXQ0>?4gLFALMGj)MH$|}M&G%_zV#4:3~*L+TNIom4-h|dvb!5S7P|>' );
define( 'LOGGED_IN_SALT',   'Ru7 usNh9P/st0O>Wo,t, Ekx88wPoa4Hus=k6vsobJXun|MtYgTR}ONF|AW@ng!' );
define( 'NONCE_SALT',       'H]]*`C}YIigm]pJd<u2P|D)aV^sq*n-aE N_7Kgs05)XBn{CT@4 |vVlp~ |Wo3#' );

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
