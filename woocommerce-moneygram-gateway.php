<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
Plugin Name: WooCommerce Moneygram Gateway
Plugin URI: https://wordpress.org/plugins/woo-moneygram-gateway/
Description: Adds Moneygram Gateway to WooCommerce e-commerce plugin
Version: 1.1.1
Author: Vyacheslav Bantysh
Author URI: http://site404.in.ua
*/

// Include our Gateway Class and register Payment Gateway with WooCommerce
add_action( 'plugins_loaded', 'woo_moneygram_init', 0 );
function woo_moneygram_init() {
	// If the parent WC_Payment_Gateway class doesn't exist
	// it means WooCommerce is not installed on the site
	// so do nothing
	if ( ! class_exists( 'WC_Payment_Gateway' ) ) return;
	
	// If we made it this far, then include our Gateway Class
	include_once( 'moneygram.php' );

	// Now that we have successfully included our class,
	// Lets add it too WooCommerce
	add_filter( 'woocommerce_payment_gateways', 'woo_add_moneygram_gateway' );
	function woo_add_moneygram_gateway( $methods ) {
		$methods[] = 'WC_Gateway_Moneygram';
		return $methods;
	}
}

// Add custom action links
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'slaus_gateway_moneygram_action_links' );
function slaus_gateway_moneygram_action_links( $links ) {
	$plugin_links = array(
		'<a href="' . admin_url( 'admin.php?page=wc-settings&tab=checkout&section=moneygram' ) . '">' . __( 'Settings', 'woocommerce' ) . '</a>',
	);

	// Merge our new link with the default ones
	return array_merge( $plugin_links, $links );	
}

?>