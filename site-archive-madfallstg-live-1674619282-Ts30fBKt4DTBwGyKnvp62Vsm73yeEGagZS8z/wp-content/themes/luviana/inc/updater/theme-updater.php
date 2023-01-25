<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package WordPress
 * @subpackage Luviana
 * @since Luviana 1.0.0
 */
// Includes the files needed for the theme updater
if ( ! class_exists( 'Luviana_EDD_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}
$luviana_info           = wp_get_theme( get_template() );
$luviana_name           = $luviana_info->get( 'Name' );
$luviana_slug           = get_template();
$luviana_version        = $luviana_info->get( 'Version' );
$luviana_author         = $luviana_info->get( 'Author' );
$luviana_remote_api_url = $luviana_info->get( 'AuthorURI' );
// Loads the updater classes
$luviana_updater = new Luviana_EDD_Updater_Admin(

// Config settings
	$luviana_config = array(
		'remote_api_url' => $luviana_remote_api_url, // Site where EDD is hosted
		'item_name'      => $luviana_name, // Name of theme
		'theme_slug'     => $luviana_slug, // Theme slug
		'version'        => $luviana_version, // The current version of this theme
		'author'         => $luviana_author, // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$luviana_strings = array(
		'theme-license'             => esc_html__( 'Theme License', 'luviana' ),
		'enter-key'                 => esc_html__( 'Enter your theme license key.', 'luviana' ),
		'license-key'               => esc_html__( 'License Key', 'luviana' ),
		'license-action'            => esc_html__( 'License Action', 'luviana' ),
		'deactivate-license'        => esc_html__( 'Deactivate License', 'luviana' ),
		'activate-license'          => esc_html__( 'Activate License', 'luviana' ),
		'status-unknown'            => esc_html__( 'License status is unknown.', 'luviana' ),
		'renew'                     => esc_html__( 'Renew?', 'luviana' ),
		'unlimited'                 => esc_html__( 'unlimited', 'luviana' ),
		'license-key-is-active'     => esc_html__( 'License key is active.', 'luviana' ),
		'expires%s'                 => esc_html__( 'Expires %s.', 'luviana' ),
		'expires-never'             => esc_html__( 'Lifetime License.', 'luviana' ),
		'%1$s/%2$-sites'            => esc_html__( 'You have %1$s / %2$s sites activated.', 'luviana' ),
		'license-key-expired-%s'    => esc_html__( 'License key expired %s.', 'luviana' ),
		'license-key-expired'       => esc_html__( 'License key has expired.', 'luviana' ),
		'license-keys-do-not-match' => esc_html__( 'License keys do not match.', 'luviana' ),
		'license-is-inactive'       => esc_html__( 'License is inactive.', 'luviana' ),
		'license-key-is-disabled'   => esc_html__( 'License key is disabled.', 'luviana' ),
		'site-is-inactive'          => esc_html__( 'Site is inactive.', 'luviana' ),
		'license-status-unknown'    => esc_html__( 'License status is unknown.', 'luviana' ),
		'update-notice'             => esc_html__( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'luviana' ),
		'update-available'          => wp_kses(__( '<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s" %6$s>update now</a>.', 'luviana' ), array( 'strong' => array(), 'a' => array( 'class' => array(),'href' => array(),'title' => array() ) )),
	)

);
