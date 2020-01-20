=== WooCommerce Moneygram Gateway ===
Contributors:  mister.slaus@gmail.com
Tags: woocommerce gateway, gateway, moneygram, payment
Requires at least: 4.0.0
Tested up to: 5.3.2
Stable tag: 1.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The plugin helps you accept payments using Moneygram Transfers.

== Description ==

The plugin helps you accept payments using Moneygram Transfers.

== Installation ==

1. Upload 'woocommerce-moneygram-gateway' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Access 'admin.php?page=wc-settings&tab=checkout&section=moneygram' in order to change the description and the details provided in the email

== Changelog ==
= 1.1.1 =
* Confirmed compatibility with PHP 7.3
* Confirmed compatibility with WooCommerce 3.7.x
* Confirmed compatibility with WordPress 5.3.x
* Updated Plugin URI

= 1.1 =
* Added order status settings. You can now choose if you want the order to be set On Hold or Processing status.
* Removed the tooltip and displayed the intructions under each settings. This will help you better understand what each setting does.
* Updated the plugin description.
* Updated the Settings button to get you in the right WooCommerce section.
* The plugin now reduces the stock using the latest code sintax (provided by WooCommerce).

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.1.1 =

The version 1.1.1 is a minor release and it should not affect affect your database settings. However, please do a full site backup and test on a staging site before deploying to a live/production server.