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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'websitte' );

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
define( 'AUTH_KEY',         '@<q]5(IkVy!|eb$;h)nduc50qnA/8kXHzH,n:@2;$<H!wa ]K8h.{9o1/=%jG=7n' );
define( 'SECURE_AUTH_KEY',  'ZwbK)Da:4J8)fD0=Muww+*dFA.V]?J6+/S<%Fg79O_{1FK(a|peLMema{U_v$&]7' );
define( 'LOGGED_IN_KEY',    '$}U@|kV6j+WmJ,X7rcM#@azCB%u15P![C{UQSTeDup$p![EG{su5/x4Zxkr.MuI)' );
define( 'NONCE_KEY',        'r6]fQ[dLFOuB.6Y1yR!dQcL!L@vb,S)[[$%0rvOz+XNAFfU)sZ^G@OSlAzcDLJQf' );
define( 'AUTH_SALT',        '4pkJP}O78rV.q2*2|ZqP)#+8SC+PPQHf2RhOXW9.EBWl(ojLDH8Za_Y:tL7lJ(Ij' );
define( 'SECURE_AUTH_SALT', '<$fxa{ 0DLMlHa+TjV.@c]-_.|)GTC8:Q*$9mwy;3*(<t2 S,Erm(?IpJB/IB{xE' );
define( 'LOGGED_IN_SALT',   'zanhZ6n`X2x)P^N#TWjOta6T1e7D{lbU~1&bVaFk{HOV7-rwL4B!?^h>}<Atr(M:' );
define( 'NONCE_SALT',       'E`O~50m@NH?q)fQTO_&zpMgM>KNfX.L:4Nt,i(m7/SL^+q{O&#ue&4G,bte$`p#^' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
