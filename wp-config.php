<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dev_foundationpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vvd8');

/** MySQL hostname */
define('DB_HOST', '192.168.25.225');

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
define('AUTH_KEY',         '=t+Cfj>JA(Il$W->ik1fu7p<wWCzS~g$|Orc}]#Hl!~s8qGl>8{P/HA+mJ/LBa*2');
define('SECURE_AUTH_KEY',  'S4TPQ+4zBx+BM+>Fg>R9Hi.]}i[vHxUZX!R-i*G@!k.$_U4mC=qn[kcfm:NXj({M');
define('LOGGED_IN_KEY',    '5WXS]0OUXzPcg }JW/DMJ]XKm+ &_< Td#DtH&D7g+4A-lf3/+F:Pc.7+sPc]09)');
define('NONCE_KEY',        'L6&5ZHmXXBBnv_Q%yh>u+fa_ +nDL)53n<L:$dJ6,9 `;tsz([ZI/L[DS.+hDWB)');
define('AUTH_SALT',        'Asb01{HU&~|FSLMWD[muV/je2Dr{k~]s@~CV;S2%YtM|&Zevuj$bl(qP2A4E UiW');
define('SECURE_AUTH_SALT', 'AUm#AseWW< )sy{#{7|S3m7p%Xc`P*+/bAHYf#PMIOh<,e4.}X],xb1b.`re-xX+');
define('LOGGED_IN_SALT',   '<LijYQ`qMSkI:p50I*2a&K@;Ki%5{;nwv$9rD{:1eZV!BQ|z, L|T_4{eYBryHpb');
define('NONCE_SALT',       '_0AG-A9lOZ*C/un?-g.5_c~eGN[__p/B~5_d-1 *Kdlk>ru%l<nH|aj%Rh+w%K)^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
