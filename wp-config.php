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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'r0Mt e2C[G4..iV_!m)&^w+sJ+$M+`~hyfI;v7vQQM[5-lU[hK+Zv1pcqO%Ed=;P');
define('SECURE_AUTH_KEY',  'GzgBBiK&KSqM?|h.xi9JtSZ&h.Tif+AA+Lw]8hK1PFc)AVs[,F$cBsj5#0s#LRkk');
define('LOGGED_IN_KEY',    'rA=ALB3kmC$_r1OCDM-2|F]d!TL3R{4&q6Fx;A)crexg:NEB4lViMBzy %b}#L%4');
define('NONCE_KEY',        'JdTdr2+P>&|JzbJff,Qp3#$|VFk2l}PX54J,J9nR(4vE F@A3hv42a8*^qL-Ih)l');
define('AUTH_SALT',        ':*Cpr^;}WU&(T|9ib[&0jMz`o8lU>jr|/CN38hM8lM.rF{MepSN})9s/!11-B8}|');
define('SECURE_AUTH_SALT', 'd7-+I4fQz/ V_sW|A^&w[0d_nJ4XE+N|WpXEb28(*ongC+%yj1.ueOE+4Z)IT, !');
define('LOGGED_IN_SALT',   'XD&n-*u&y;:$7Q/hd<(/TI:Z-=1:$cM/5=@-Rok%bIEi$H:G#t8Q_aNpw*eb!/9N');
define('NONCE_SALT',       'z+u$-}#P|g]B)];.y33Yu_>fa<4YiRaow.-@Lf*|T=DyaK,{^uj&lAN`-Th8lft*');

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
