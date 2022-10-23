<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     'inception' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', 'wordpress' );	
define( 'DB_HOST',     'mariadb' );
define( 'DB_CHARSET',  'utf8mb4' );


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         '-z$?T0MmWb+Y4gRwf@U|_u`nj.;H*[&TU6zytfE+[~gVgD>!)pbSPPv|`:0J>KRo');
define('SECURE_AUTH_KEY',  '*0ebr^q39pUkVxKl_afw>5qzaati`R1i/9kq4fs7(>]=4,aDOefzu:4jwX`uNtHR');
define('LOGGED_IN_KEY',    '1`ZSkTN=^q+G/.ENR1Z554G3JS>re)9S_>v D#sGoYA[U-da5D.``-.xPE>W-6#7');
define('NONCE_KEY',        'MBX2C!g]!pEX4y7|6 get P69uRdC]wvUY@$i61-vY%[6mtY+Xf$qDA|xPD2cv`6');
define('AUTH_SALT',        'gXF|iu lUGx|,N^8$$H)Rdk[u{TcLX,ODZ`KeJg< )e76Q_m]WR+):?U!E_-Q @m');
define('SECURE_AUTH_SALT', ':b}V/~+j~Pvvj-+{ra$!23biw)H:<329+0*/5R&1kyon9dt`E8Xe8`Bit]67?owE');
define('LOGGED_IN_SALT',   '^Ab`41aQU|L)T!SCX_ltr+;U-?+XLSzYd`WIXS,%mc-7>Z?7oznMN@]Ht-$H^*Ax');
define('NONCE_SALT',       '|sC4.wl$C)W8S:^,6>~d(S6,:]By^-W<]XJ7>+<.MhH`!PFv+7gpG1:O]|q>*|)|');


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
