<?php
/*
Plugin Name: Punit shipping
Plugin URI: https://woocommerce.com/
Description: Your shipping method plugin
Version: 1.0.0
Author: WooThemes
Author URI: https://woocommerce.com/
*/

/**
 * Check if WooCommerce is active
 */
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

    function punit_shipping_method()
    {
        if (!class_exists('Punit_Shipping_Method')) {
            class Punit_Shipping_Method extends WC_Shipping_Free_Shipping
            {
                /**
                 * Constructor for your shipping class
                 *
                 * @access public
                 * @return void
                 */
                public function __construct()
                {
                    $this->id                 = 'punit_shipping'; // Id for your shipping method. Should be uunique.
                    $this->method_title       = __('Punit Shipping', 'punit_shipping');  // Title shown in admin
                    $this->method_description = __('Custom shipping method'); // Description shown in admin

                    $this->enabled            = "yes"; // This can be added as an setting but for this example its forced enabled
                    $this->title              = "Punit Shipping Method"; // This can be added as an setting but for this example its forced.
                    $this->supports = array(
                        'shipping-zones',
                        'settings'
                    );
                    $this->init();
                }

                /**
                 * Init your settings
                 *
                 * @access public
                 * @return void
                 */
                function init()
                {
                    // Load the settings API
                    $this->init_form_fields(); // This is part of the settings API. Override the method to add your own settings

                    $this->init_settings(); // This is part of the settings API. Loads settings you previously init.

                    // Save settings in admin if you have any defined
                    add_action('woocommerce_update_options_shipping_' . $this->id, array($this, 'process_admin_options'));
                }

                function init_form_fields()
                {
                    $this->form_fields = array(

                        'enabled' => array(
                            'title'       => __('Enable', 'punit_shipping'),
                            'type'        => 'checkbox',
                            'description' => __('Enable this shipping method.', 'punit_shipping'),
                            'default'     => 'yes'
                        ),

                        'title' => array(
                            'title'       => __('Title', 'punit_shipping'),
                            'type'        => 'text',
                            'description' => __('Title to be displayed on site', 'punit_shipping'),
                            'default'     => __('Punit shipping', 'punit_shipping')
                        ),
                    );
                }

                
                /**
                 * calculate_shipping function.
                 *
                 * @access public
                 * @param mixed $package
                 * @return void
                 */
                public function calculate_shipping($package = array())
                {
                    $rate = array(
                        'label' => $this->title,
                        'cost' => '10.99',
                        'calc_tax' => 'per_item'
                    );

                    // Register the rate
                    $this->add_rate($rate);
                }
            }
        }
    }

    add_action('woocommerce_shipping_init', 'punit_shipping_method');

    function add_punit_shipping_method($methods)
    {
        $methods['punit_shipping'] = 'Punit_Shipping_Method';
        return $methods;
    }

    add_filter('woocommerce_shipping_methods', 'add_punit_shipping_method');
    
}
