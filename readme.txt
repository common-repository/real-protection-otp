===Real Protection & Safegaurd OTP ===
Contributors: prabalsslw
Tags: safe, secure, login, 2-step, verification, safety, otp, woocommerce, alert, email, pin, strong authentication, two-factor, authenticator, login, username, password, security, safegaurd
Author URI: https://prabalsslw.wixsite.com/prabal
Plugin URI: https://wordpress.org/plugins/real-protection-otp/
Version: 1.0
Requires PHP: 7.0
Requires at least: 3.0.1
Tested up to: 5.4.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Safeguard is an SMS & Email based OTP service provider plugin. Also available woocommerce transactional alert.

== Prerequisites ==
- WordPress 5.x.x
- WooCommerce 4.2.x
- cURL php extension.

== Download ==
* Using HTTPS 
$ git https://github.com/prabalsslw/Safeguard-Email-SMS-OTP-Woocommerce-Alert.git
* Using SSH 
$ git clone git@github.com:prabalsslw/Safeguard-Email-SMS-OTP-Woocommerce-Alert.git

== Description ==

Secure your WordPress site with WordPress Safegaurd.

WordPress Safegaurd provides 2-step verification on login. Once a user submits their login credentials, a One Time Pin (OTP) will be sent to them via SMS/Email. They will enter this OTP in order to continue to login. All it customer will able to get Woocommerce order alert notification via SMS.

Stop Brute force hacking attempts, and keep your data safe!

    * Easy to install!
    * Email & SMS both are integrated
    * Any SMS API can be Configurable
    * WordPress 4.0 Ready!

== Installation ==

- Step 1: Upload the plugin to wordpress admin panel. 
- Step 2: Go to `Safeguard Login` > `OTP Settings` page.
- Step 3: `Enable Plugin` to activate all service.
- Step 4: Enable OTP checkbox for OTP & SMS Alert. `OTP SMS Text` must contain `{{OTP}}` dynamic variable. 
- Step 5: Both GET & POST API can be configurable, use API Endpoint, pass the API parameter with dynamic variable. Fixed dynamic variables: `{{phone_number}}, {{unique_id}}, {{sms_text}}`
- Step 6: In the `Woocommerce Alert Configuration` part must enable `
Enable Woocommerce Alert` for Woocommerce transaction alert.
- Step 7: Enable your required Hook for transactional alert.
- Step 8: You can change your `Woocommerce SMS Alert Templete`. Fixed dynamic variables: `{{name}}, {{status}}, {{amount}}, {{currency}}, {{order_id}}`.
- Step 9: You can change your `User Registration Alert Templete`. Fixed dynamic variables: `{{name}}`.
- Step 10: After successfully integrating the plugin you can see the reflection in the login and registration page.
- Step 11: Plugin will add an extra field(Phone Number) in the registration form.
- Step 12: Admin can check OTP & Alert SMS record from the admin panel.

**Note:** In order to use this plugin, you will need a valid WordPress install. This plugin will not work on a wordpress.com hosted site. Also make sure while using OTP login SMS, your phone umber is uptodate at `billing_phone` in user settings page and provide number in user Register form.

== Frequently Asked Questions
1. What should be the permalink?
-In order for this plugin to function correctly, you will need to use a permalink structure that uses rewrite rules. The "Post name" structure is recommended.

For accurate login time tracking, make sure your correct Timezone is selected under "Settings" > "General".

== License ==
- GPL2

== Changelog ==
- Initial release

== Upgrade Notice ==
= 1.0 =
Initial release!
* Global and per role settings configuration
* The plugin will transparently support any Open OTP Login Mode including:
	> Email only
	> OTP only
	> Email+OTP
	> Woocommerce SMS Alert
     
== Screenshots ==
1. Install the plugin.
2. Plugin configure page 1.
3. Plugin configure page 2.
4. Plugin configure page 3.
5. Plugin configure page 4.
6. Login with OTP Page.
7. Extra field in register page.
8. OTP & SMS Alert history.