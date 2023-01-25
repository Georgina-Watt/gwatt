<?php
# Database Configuration
define( 'DB_NAME', 'wp_madfallstg' );
define( 'DB_USER', 'madfallstg' );
define( 'DB_PASSWORD', 'up3hrfTgG-DoBME5Nf-B' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', 'utf8_unicode_ci' );
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '3y@L|6QS-i%K<-j9|7@hH%y8_sfUMgfrO4mXd;GNS_xA+nxlQ.|m0zjUW:8i[)&e');
define('SECURE_AUTH_KEY',  '^h!E$|K-2U8$M]49XVHa-bmllJ3qnnOSa%:b^m]SUplA[+ *|+!kM}+QPjri-*Zf');
define('LOGGED_IN_KEY',    '3W/)CU!#sk8)>VD0$a5JgdkYmj*{j+e(GY{aVF]xu8zMgS|-ZFM;{4?/K2TBhWT!');
define('NONCE_KEY',        '|f-jm$^+}mGRAQW/qU!zo-Q&qihRpdz#54WHKFc[R!Z/YgDvy4/G.cWTiA-ngSr@');
define('AUTH_SALT',        'oCyaR_+4F;%L>. ~sO%rn]= Xj(||H-*E?bE~>QzoW 9`pEG?dw?^)ZPb_2+|uew');
define('SECURE_AUTH_SALT', 'mPg~1r5J!h7EG}KAzakk3L0w W%t|3eg3-72sW0W5KS2yO5HSOZJul4MO.E4baw7');
define('LOGGED_IN_SALT',   'aB=Cu3xrc46J2 fQ*da-;Is<l[j<N~rCW.|jF)SAG b:J[h.A!+l,*scZjr*2d)L');
define('NONCE_SALT',       '@~GxAM:|JSb*sUi[guRuOhpoD?GOgp^jq-uho.S*C%?myGoc$QuB|`,pUy&CjfIx');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'madfallstg' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', 'ca95facb91e06899d62757251d334ff0a2213794' );

define( 'WPE_CLUSTER_ID', '101336' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'madfallstg.wpengine.com', 1 => 'madfallstg.wpenginepowered.com', 2 => 'www.madfall.digital.com', 3 => 'madfall.digital', 4 => 'www.madfall.digital', );

$wpe_varnish_servers=array ( 0 => 'pod-101336', );

$wpe_special_ips=array ( 0 => '35.197.249.60', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings




# That's It. Pencils down
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}

