=== Checkout for Freemius ===

Contributors: Dreamfox
Donate link: https://www.dreamfoxmedia.com
Tags: woocommerce, payment, freemius, checkout, buy button
Requires at least: 5.0
Tested up to: 6.6.1
Stable tag: 1.0.5
WC requires at least: 6.0.0
WC tested up to: 9.0.2
Requires PHP: 5.3
License: GPLv3 or later
License URI: https://opensource.org/licenses/GPL-3.0

Sell WordPress Plugins & Themes. Anywhere. Using Freemius Checkout "Buy Now" button.

== Description ==


Enhance your WordPress website with the Freemius Checkout "Buy Now" button—your gateway to monetizing WordPress plugins and themes effortlessly.

Product Overview

Freemius provides a powerful platform for WordPress developers, enabling you to quickly turn your plugins and themes into a lucrative subscription-based business. With Freemius Checkout, you can effortlessly sell your digital WordPress products from any location.

This innovative plugin simplifies the sales process by allowing you to integrate a "Buy Now" button directly on your site using a straightforward WordPress shortcode.

Effortless User Experience

The "Buy Now" button, when embedded, is clearly visible to users on the front-end of your website. A single click on the button unveils a streamlined checkout popup, making the purchase process seamless and user-friendly.

Start selling more efficiently and effectively with Freemius Checkout today. Transform your WordPress solutions into a profitable venture with just a few clicks!

= Usage =

How to Use It

Utilize the [checkout-for-freemius] shortcode to add the "Buy Now" button to your site. This shortcode is highly customizable, offering the following parameters to tailor the checkout experience:

name: Specify the name of your plugin or theme.
plugin_id: Your unique plugin or theme ID on Freemius.
plan_id: The specific subscription plan you wish to promote.
pricing_id: The pricing tier of the chosen plan.
public_key: Your public key for plugin or theme verification.
image: A URL to your product's logo, displayed within the checkout popup.
button: Customizable text for the button; defaults to 'Buy Now'.
button_id: Custom ID for the button element; defaults to 'purchase'.
button_class: Add custom styling classes to the button.
Example Usage

Integrate the checkout button with ease:
[freemius_checkout name="Press Elements" plugin_id="761" plan_id="1078" pricing_id="928" public_key="pk_fe2850d57f7d4f206aefaa106b91f" button_id="purchase" button="Buy Me Now"]
== Screenshots ==
1. Freemius Checkout

== Third-Party Service Information ==

This plugin relies on the Freemius Checkout service to process transactions. The service is used to display the 'Buy Now' button and handle the purchase flow. Here are important links related to the service:

- [Freemius Checkout](https://checkout.freemius.com)
- [Freemius Terms of Service](https://freemius.com/terms/)
- [Freemius Privacy Policy](https://freemius.com/privacy/)

== Frequently Asked Questions ==

= Does this plugin require a third-party service? =

Yes, this plugin relies on the Freemius Checkout service to process transactions. The service is used to display the "Buy Now" button and handle the purchase flow.

= Where is data sent? =

When using this plugin, data related to the transaction is sent to Freemius. This includes information such as the plugin ID, plan ID, pricing ID, public key, and any data entered by the user during the checkout process.

= What are the links to the service and its terms of use? =

You can learn more about the Freemius Checkout service here:
- [Freemius Checkout](https://checkout.freemius.com)
- [Freemius Terms of Service](https://freemius.com/terms/)
- [Freemius Privacy Policy](https://freemius.com/privacy/)

= Why is the new checkout button not working? =

The theme must incorporate jQuery to properly display the checkout popup. If jQuery is not enqueued, the "Buy Now" button will fail to trigger the checkout popup.
jQuery is such a useful and popular resource that comes included in your WordPress installation by default.

= What are the plugin requirements? =

**Minimum Requirements**

* WordPress version 5.0 or greater.
* PHP version 5.3 or greater.
* MySQL version 5.0 or greater.

**Recommended Requirements**

* The latest WordPress version.
* The latest PHP version.
* the latest MySQL version.

== Changelog ==

= 1.0.5 =
* Fixes for plugin

= 1.0.4 =
* Fixes for plugin

= 1.0.2 =
* Fixes for plugin

= 1.0.1 =
* Fixes for plugin

= 1.0 =
* Initial release.
* Freemius checkout shortcode.
