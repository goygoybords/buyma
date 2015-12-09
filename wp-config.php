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
define('DB_NAME', 'buyma');

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

define('FS_METHOD','direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6>RJS)/2)->WRL IkKkJ^ :)e:VTSG6spd`LS=Foj^%T2u-ooF=~+k^-@-8Om,K_');
define('SECURE_AUTH_KEY',  'I`Iv~L6 N@&vlBtOp:s;4/c+O!YsjE}MH+$120Iy]AzJb!y`Kb)_%hdo;vZa[j1O');
define('LOGGED_IN_KEY',    'QYQK40N8vj_k&{(3X.uy2ySv+Dns~Lek-V5(m{%J}!2Fm*GbPNWZ&t#dCA8tpoDt');
define('NONCE_KEY',        ')=H_?W5bWOB+}WP%yq#b|MD~mNb1L{wCXQ~|`#V;N+@KJjN#xJ|Q#0|iKwsjoA+1');
define('AUTH_SALT',        ':r5IR;$&qJJbzlf,X:2=2c-?>oi,1|+E5-Jl)MpX<,3@+ONHW{pI t{D4UC84EO^');
define('SECURE_AUTH_SALT', 'Yv-4Zl`lm%6~gDvha-|vW~]<i4i2V;ZQ/v#g/IgX?pJB? Ko%U|gK9[#fSrw$a.K');
define('LOGGED_IN_SALT',   '1Ti@h-]fh+5_iL1G9)CIZl`*c<-OY|9hWpSdn d$bKKnT+hh w9# m?5TFqyZHBy');
define('NONCE_SALT',       'T@,e>Hq0+U2o?=c.r:i5PPsWyq$XdU;OxT=U 1!|?_A`|2.*UbGm${|P-Uny>0E+');

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
