<?php
/*
Plugin Name:       Social Media Buttons by elixirs.io
Plugin URI:        https://elixirs.io/plugins/social-media-buttons
Description:       The quickest & easiest plugin to add your social media profile icons to your website.
Version:           1.0.5
Author:            elixirs.io
Author URI:        https://elixirs.io
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain:       easy-call-now-button
Domain Path:       /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
define( 'SOCIAL_MEDIA_BUTTONS_VERSION', '1.0.0' );

function activate_social_media_buttons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-social-media-buttons-activator.php';
	social_media_buttons_Activator::activate();
}

function deactivate_social_media_buttons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-social-media-buttons-deactivator.php';
	social_media_buttons_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_social_media_buttons' );
register_deactivation_hook( __FILE__, 'deactivate_social_media_buttons' );

require plugin_dir_path( __FILE__ ) . 'includes/class-social-media-buttons.php';

function run_social_media_buttons() {
	$plugin = new social_media_buttons();
	$plugin->run();
}

run_social_media_buttons();
