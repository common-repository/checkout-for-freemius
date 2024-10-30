<?php
/**
 * Plugin Name: Checkout for Freemius
 * Plugin URI: https://www.dreamfoxmedia.com/freemius-checkout-for-woocommerce/
 * Version: 1.0.5
 * Author URI: https://dreamfoxmedia.com
 * Author: Dreamfox
 * Description: Sell WordPress Plugins & Themes anywhere using the Freemius Checkout "Buy Now" button.
 * Requires at least: 5.0
 * Tested up to: 6.6.1
 * WC requires at least: 6.0.0
 * WC tested up to: 9.0.2
 * License: GPLv3 or later
 * License URI: http://www.opensource.org/licenses/gpl-license.php
 * Text Domain: checkout-for-freemius
 * Domain Path: /lang/
 * @Developer : Marco van Loghum Slaterus / Hoang Xuan Hao ( Pamysoft )
 * @fs_premium_only /src/Premium/ /assets/premium
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Enqueue checkout scripts.
 */
function cf_freemius_plugin_enqueue_scripts() {
    wp_enqueue_script('freemius-checkout-script', 'https://checkout.freemius.com/checkout.min.js', array('jquery'), '1.0.3', true );

    // Inline JavaScript for the button
    $inline_js = $script = '';
$script .= 'jQuery(document).ready(function($) {';
$script .= 'var handler = FS.Checkout.configure({';
$script .= 'plugin_id: ' . esc_js('freemius_checkout_params.plugin_id') . ',';
$script .= 'plan_id: ' . esc_js('freemius_checkout_params.plan_id') . ',';
$script .= 'public_key: ' . esc_js('freemius_checkout_params.public_key') . ',';
$script .= 'pricing_id: ' . esc_js('freemius_checkout_params.pricing_id') . ',';
$script .= 'image: ' . esc_js('freemius_checkout_params.image') . ',';
$script .= '});';
$script .= '$("#purchase").on("click", function(e) {';
$script .= 'e.preventDefault();';
$script .= 'handler.open({';
$script .= 'name: ' . esc_js('freemius_checkout_params.name') . ',';
$script .= 'success: function(response) {';
$script .= 'alert(response.user.email);';
$script .= '}';
$script .= '});';
$script .= '});';
$script .= '});';


    wp_add_inline_script('freemius-checkout-script', $inline_js);
}
add_action( 'wp_enqueue_scripts', 'cf_freemius_plugin_enqueue_scripts' );

/**
 * Freemius Checkout Shortcode
 *
 * Register a new shortcode to display a Freemius buy button.
 */
function cf_freemius_plugin_shortcode( $atts ) {
    $atts = shortcode_atts(
        array(
            'plugin_id'    => '',
            'plan_id'      => '',
            'pricing_id'   => '',
            'public_key'   => '',
            'image'        => '',
            'name'         => '',
            'button'       => esc_html__( 'Buy Now', 'checkout-for-freemius' ),
            'button_id'    => 'purchase',
            'button_class' => '',
        ),
        $atts,
        'checkout-for-freemius'
    );

    wp_localize_script('freemius-checkout-script', 'freemius_checkout_params', array(
        'plugin_id' => esc_js( $atts['plugin_id'] ),
        'plan_id' => esc_js( $atts['plan_id'] ),
        'pricing_id' => esc_js( $atts['pricing_id'] ),
        'public_key' => esc_js( $atts['public_key'] ),
        'image' => esc_url( $atts['image'] ),
        'name' => esc_js( $atts['name'] )
    ));

    ob_start();
    ?>
    <button id="<?php echo esc_attr( $atts['button_id'] ); ?>" class="<?php echo esc_attr( $atts['button_class'] ); ?>">
        <?php echo esc_html( $atts['button'] ); ?>
    </button>
    <?php
    return ob_get_clean();
}
add_shortcode('cf_freemius_plugin_checkout_for_freemius', 'cf_freemius_plugin_shortcode');

/**
 * Add admin menu and submenu items
 */
add_action('admin_menu', 'cf_freemius_plugin_add_admin_menu');

function cf_freemius_plugin_add_admin_menu() {
    // Add main menu item
    add_menu_page(
        'DFM Plugins',        // Page title
        'DFM Plugins',        // Menu title
        'manage_options',     // Capability
        'dfm-plugins',        // Menu slug
        'cf_freemius_plugin_plugins_page',   // Function to display the page
        'dashicons-admin-generic', // Icon URL (optional)
        6                     // Position
    );

    // Add submenu item
    add_submenu_page(
        'dfm-plugins',           // Parent slug
        'Freemius Checkout',     // Page title
        'Freemius Checkout',     // Menu title
        'manage_options',        // Capability
        'freemius-checkout',     // Menu slug
        'cf_freemius_plugin_checkout_page' // Function to display the page
    );
}

function cf_freemius_plugin_plugins_page() {
    echo '<div class="wrap">';
    echo '<h1>' . esc_html__( 'DFM Plugins', 'checkout-for-freemius' ) . '</h1>';
    echo '<p>' . esc_html__( 'This is the main page for DFM Plugins. You can add your description here.', 'checkout-for-freemius' ) . '</p>';
    echo '</div>';
}

function cf_freemius_plugin_checkout_page() {
    echo '<div class="wrap">';
    echo '<h1>' . esc_html__( 'Freemius Checkout', 'checkout-for-freemius' ) . '</h1>';
    echo '<p>' . esc_html__( 'This is the info page for Freemius Checkout. You can add your instructions and information here.', 'checkout-for-freemius' ) . '</p>';
    echo '</div>';
}
?>
