<?php

/**
 * @class       PayPal_Credit_Card_For_WooCommerce_Admin
 * @version	1.0.0
 * @package	paypal-credit-card-for-woocommerce
 * @category	Class
 * @author      johnny manziel <phpwebcreators@gmail.com>
 */
class PayPal_Credit_Card_For_WooCommerce_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    public function init_paypal_credit_cart_pro() {
        if (class_exists('WC_Payment_Gateway')) {
            require_once plugin_dir_path(dirname(__FILE__)) . 'admin/class-paypal-credit-card-for-woocommerce-paypalextension.php';
        }
    }

}
