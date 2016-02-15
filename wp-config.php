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
define('DB_NAME', 'elpa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'xf{58NB8Lkh1xX8Sq+,QJj>HC MB;LJt~Ft)Z2Wb+qXD_A6ZiT?<4$EYm%3r6s6l');
define('SECURE_AUTH_KEY',  '0$5$$o63vYNvPQ;!YD0UkM+DC&C!QFt#c.9Ovd:j_/-+y%bW 9Bi~{NEd8QM{=%^');
define('LOGGED_IN_KEY',    '~hdD0 HVMPzo)ka>Yi~?]8MB+<6kcTbJg@npaL8F+v>-T[}[~x|]i$V<#1vyc]Vz');
define('NONCE_KEY',        'WuXT@6}MbB`GnK5ap- -~HF7=Getl?nm^yKqhG/[zz;#LVD;(z_z0W!ZV9Vz%<Vc');
define('AUTH_SALT',        '|Z+Cp+utA_$ee>ey9-<P<|O-T^2jY^_E]>j[ssx}uZzxWJ.C+3mq&0mF[hO>WbBA');
define('SECURE_AUTH_SALT', '`jc+RxpaBrcLc?DH]|>TPL|)(MhM[D+sX3&F |*$m(R|mGKpq3?6i8KwD_:>1f1w');
define('LOGGED_IN_SALT',   '0rf?@.?YXCo%BH6IjHd[Y7eu1>-vnMYF}&NsB31wPdLa=zLP@;9UNh+&-],6City');
define('NONCE_SALT',       'I0>=N2,.+TJ%rDzx{@._M+{i<B*Ci^l)>n/WP{>lEovm9PxW+w?jt9_Y2%y0sBW$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
