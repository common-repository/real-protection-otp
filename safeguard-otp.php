<?php 

/**
* Plugin Name: Real Protection & Safeguard Email/SMS OTP/Woocommerce Alert
* Plugin URI: https://wordpress.org/plugins/real-protection-otp/
* Description: Real Protection & Safeguard, 2 step Verification for WordPress login and woocommerce transaction alert.
* Version: 1.0
* Stable tag: 1.0
* Author: Prabal Mallick
* Author URI: https://prabalsslw.wixsite.com/prabal
* WC tested up to: 4.2.0
* License: GPL2
**/

	defined( 'ABSPATH' ) or die(); // Protect from alien invasion

	define( 'SAFEG_PATH', plugin_dir_path( __FILE__ ) );
	define( 'SAFEG_URL', plugin_dir_url( __FILE__ ) );

	global $safeg_db_version;
	global $plugin_slug;

	$safeg_db_version = '1.0';
	$plugin_slug = 'safeguard_login';

	$options = get_option( 'safeg_setting' );

	# Include required core files

	require_once( SAFEG_PATH . 'include/safeguard-admin-option.php' );
	require_once( SAFEG_PATH . 'lib/safeguard-init.php' );
	require_once( SAFEG_PATH . 'lib/safeguard-process-login.php' );
	require_once( SAFEG_PATH . 'lib/safeguard-authenticate.php' );
	require_once( SAFEG_PATH . 'lib/safeguard-registration-field.php' );
	require_once( SAFEG_PATH . 'lib/safeguard-rewrite-rules.php' );
	require_once( SAFEG_PATH . 'lib/safeguard-woo-alert.php' );

	use Safeguard\Admin\Option\Safeguard_Admin_Option;
	use Safeguard\Admin\Init\Safeguard_Init;
	use Safeguard\Admin\Registration\Safeguard_Registration_field;
	use Safeguard\Admin\Woosms\Safeguard_Woo_Alert;

	new Safeguard_Admin_Option;

	if(isset($options['enable_plugin']) && !empty($options['enable_plugin']))
	{
		new Safeguard_Registration_field;
		new Safeguard_Woo_Alert;
	}


	# Install Plugin
	register_activation_hook( __FILE__, 'safeg_active' );

	function safeg_active() {
		Safeguard_Init::safeg_install();
		safeg_init_internal();
		safeg_re_init_internal();
		flush_rewrite_rules();
	}


	# Load Plugin Admin CSS
	function safeg_load_custom_admin_style() {
	        wp_register_style( 'safeguard', SAFEG_URL . 'include/css/style.css', false, '1.0.0' );
	        wp_enqueue_style( 'safeguard' );
	}

	add_action( 'admin_enqueue_scripts', 'safeg_load_custom_admin_style' );


	function safeg_plugin_links($links)
	{
	    $pluginLinks = array(
            'settings' => '<a href="'. esc_url(admin_url('admin.php?page=safeguard-otp-settings')) .'">Settings</a>',
            'docs'     => '<a href="https://github.com/prabalsslw/Safeguard-Email-SMS-OTP-Woocommerce-Alert/blob/master/README.md">Docs</a>',
            'support'  => '<a href="mailto:prabalsslw@gmail.com">Support</a>'
        );

	    $links = array_merge($links, $pluginLinks);

	    return $links;
	}

	$plugin = plugin_basename(__FILE__); 
	add_filter("plugin_action_links_$plugin", 'safeg_plugin_links' );


?>