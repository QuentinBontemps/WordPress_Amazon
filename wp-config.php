<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cjzk1vziqc7y.us-west-2.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '//nwhp:MpK5[bTE%?w+ i[P>n-4A0;:%$Fx3et~qeHGxXv2+aXQot5fb+FLqPs--');
define('SECURE_AUTH_KEY',  '&O>zwtw {`.#FME;O>HX)`]s^V1RJCt_k@`+mxrEf>$o;*8f+VI2Nc.Rr{hU8]E:');
define('LOGGED_IN_KEY',    'Cw,,<k^|@|{#!pNiIg34V-i|(a#FllcZjS=%S|Y-!CBo9|L>|CVJ~-!@CF2|RS|7');
define('NONCE_KEY',        'N#S:JP@Q~Pz]x//5)BZ^L4DsFkXiua}mi6l8^O-v}kDN_O=vH4/vhgsz@M:/1R~(');
define('AUTH_SALT',        'yA1Yrs!)lB58K[gINb.^&+|xD?}cv9EMP:&;e&w5Fr-#Bx=+5C-|CRl#<w)w0I0-');
define('SECURE_AUTH_SALT', '~JGshQSV(i{,Ny-DA53.;P_Cev-|(p{)H,Zao.[9f;l&R=M?,X0JzoLG-3 /7+|<');
define('LOGGED_IN_SALT',   'hOk$pm:rGWYY>q)&>Pb>-,oqdB1sG7U]3onfR5a~NOO2nSHwMd(n/+=FR(f^-x-[');
define('NONCE_SALT',       'To?+I^=u@*AK-`>&fbT!w8nCbOd15XDg.x|`wtYeQEL?r3y/I6Q{R$VFf`RVy~3|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


define('AWS_ACCESS_KEY_ID','AKIAJNVJVTXUFGFANV4A');
define('AWS_SECRET_ACCESS_KEY','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 ');
