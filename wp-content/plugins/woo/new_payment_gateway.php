<?php

/*
  Plugin Name: Pasarela libélula de Todotix SRL
  Description: Pasarela multicanal de pagos
  Author: Todotix SRL - libelula.bo
  
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Pagos Todotix Gateway.
 *
 * Provides a Pagos Todotix Gateway.
 */
add_action('plugins_loaded', 'init_todotix_gateway_class');

function init_todotix_gateway_class() {

    class WC_Gateway_Todotix
        extends WC_Payment_Gateway {

        public $domain;

        /**
         * Constructor for the gateway.
         */
        public function __construct() {
            $this->domain = 'pagos_todotix';

            $this->id = 'todotix';
			
			$this->domain = 'libelula';
			$this->id = 'libelula';
  
  
            //$this->icon = apply_filters( 'woocommerce_custom_gateway_icon', plugins_url( 'images/logoNew.png' , __FILE__ ));
            $this->has_fields = false;
            //$this->method_title = __('Pagos Todotix', $this->domain);
			$this->method_title = __('libélula', $this->domain);
            //$this->method_description = __('Allows payments with todotix payment gateway.' , $this->domain);
            $this->method_description = __('Allows payments with libélula payment gateway.', $this->domain);
			
            // Define user set variables
            $this->title = $this->get_option('title');
            $this->description = $this->get_option('description');
            $this->instructions = $this->get_option('instructions', $this->description);
            $this->app_key = $this->get_option('app_key');
            $this->api_url = $this->get_option('api_url');
            //$this->order_status = $this->get_option('order_status', 'completed');
			$this->order_status = $this->get_option('order_status');
	    	$this->pg_logo = $this->get_option('pg_logo',plugin_dir_url(__FILE__)."images/Boton-Libelula.jpg");
	    	$this->icon = $this->get_option('pg_logo',plugin_dir_url(__FILE__)."images/Boton-Libelula.jpg");

			// adding new fields values.
			$this->show_nit_enabled = $this->get_option('show_nit_enabled');
			$this->show_razon_enabled= $this->get_option('show_razon_enabled');
		
//			print_r($this);
//			exit;

	    // Load the settings.
            $this->init_form_fields();
            $this->init_settings();

            // Actions
            add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));
            
            add_action('woocommerce_thankyou_custom', array($this, 'thankyou_page'));
            // Payment listener/API hook
            add_action( 'woocommerce_api_'. strtolower("WC_Gateway_Todotix"), array( $this, 'check_ipn_response' ) );
           // add_action('init', array($this, 'init'));
            // Customer Emails
            add_action('woocommerce_email_before_order_table', array($this, 'email_instructions'), 10, 3);
        }

        /**
         * Initialise Gateway Settings Form Fields.
         */
        public function init_form_fields() {
	    $field_arr = array(
				
				'cur_notice' => array(
                    'title' => '',
                    'type' => 'hidden',
                    'description' => '<div style="font-size:15px; font-weight:bold;">Únicamente podemos procesar transacciones en Bolivianos o Dolarés. Por favor intente de nuevo usando una de estas monedas.</div>'
                ),
                'enabled' => array(
                    'title' => __('Enable/Disable', $this->domain),
                    'type' => 'checkbox',
                   'label' => __('Enable libélula', $this->domain),
                    'default' => 'yes'
                ),
				
				'emite_factura' => array(
                  'title' => __('Emite factura', $this->domain),
                    'type' => 'select',
                    'label' => __('Emite factura', $this->domain),
					
                    'default' => '1',
			
					'options'	=> array( // options for <select> or <input type="radio" />
			
			'1'	=> 'Yes', // 'value'=>'Name'
			'false'	=> 'No'
			)
                ),
				
				
                'title' => array(
                    'title' => __('Title', $this->domain),
                    'type' => 'text',
                    'description' => __('This controls the title which the user sees during checkout.', $this->domain),
                    'default' => __('Libélula Payment', $this->domain),
                    'desc_tip' => true,
                ),
                'order_status' => array(
                    'title' => __('Order Status', $this->domain),
                    'type' => 'select',
                    'class' => 'wc-enhanced-select',
                    'description' => __('Choose whether status you wish after checkout.', $this->domain),
                    'default' => 'wc-completed',
                    'desc_tip' => true,
                    'options' => wc_get_order_statuses()
                ),
                'description' => array(
                    'title' => __('Description', $this->domain),
                    'type' => 'textarea',
                    'description' => __('Payment method description that the customer will see on your checkout.', $this->domain),
                    'default' => __('Payment Information', $this->domain),
                    'desc_tip' => true,
                ),
                'instructions' => array(
                    'title' => __('Instructions', $this->domain),
                    'type' => 'textarea',
                    'description' => __('Instructions that will be added to the thank you page and emails.', $this->domain),
                    'default' => '',
                    'desc_tip' => true,
                ),
                'app_key' => array(
                    'title' => __('App Key', $this->domain),
                    'type' => 'text',
                    'description' => __('App Key', $this->domain),
                    'default' => '',
                    'desc_tip' => true,
                ),
                'api_url' => array(
                    'title' => __('Api Url', $this->domain),
                    'type' => 'text',
                    'description' => __('Api Url', $this->domain),
                    'default' => '',
                    'desc_tip' => true,
                )
				,
				'show_nit_enabled' => array(
                    'title' => __('Enable/Disable Nit', $this->domain),
                    'type' => 'checkbox',
                    'label' => __('Enable Nit', $this->domain),
                    'default' => 'yes'
                ),
				
				'show_razon_enabled' => array(
                    'title' => __('Enable/Disable Razon Social', $this->domain),
                    'type' => 'checkbox',
                    'label' => __('Enable Razon Social', $this->domain),
                    'default' => 'yes'
                )
				
            );

	    $logo_desc = "Payment Gateway Logo";
	    if($this->icon != "") {
		$logo_desc = "<img height='32px' src='".$this->icon."' />";
	    }

	    $field_arr['pg_logo'] = array(
                    'title' => __('Payment Gateway Logo'),
                    'type' => 'file',
                    'description' => $logo_desc
                );

            $this->form_fields = $field_arr;
        }

	public function process_admin_options() {
		$this->init_settings();

		$post_data = $this->get_post_data();
		
		foreach ( $this->get_form_fields() as $key => $field ) {
			if ( 'title' !== $this->get_field_type( $field ) ) {
				try {
					$setting_value = $this->get_field_value( $key, $field, $post_data );

					if($this->get_field_type( $field ) == "file" && $key == "pg_logo") {
						if(isset($_FILES['woocommerce_libelula_pg_logo']) && $_FILES['woocommerce_libelula_pg_logo']['size'] > 0) {
						$img_type = exif_imagetype($_FILES['woocommerce_libelula_pg_logo']['tmp_name']);
						if($img_type == 1 || $img_type == 2 || $img_type == 3 || $img_type == 6) {
							$source = $_FILES["woocommerce_libelula_pg_logo"]["tmp_name"];
							$dest = plugin_dir_path(__FILE__)."images/".basename($_FILES["woocommerce_libelula_pg_logo"]["name"]);
							$url = plugins_url( 'images/' , __FILE__ ).basename($_FILES["woocommerce_libelula_pg_logo"]["name"]);
							move_uploaded_file($source, $dest);
							$setting_value = $url;
							$this->settings[ $key ] = $setting_value;
						} else {
							//error in file type
							WC_Admin_Settings::add_error("Please upload image type file (JPEG/GIF/PNG).");
							//echo "<pre>";print_r($this);exit;
							return;
						}
						}						
					} else {
						$this->settings[ $key ] = $setting_value;
					}
				} catch ( Exception $e ) {
					$this->add_error( $e->getMessage() );
				}
	      		}
	    	}
		
	    	return update_option( $this->get_option_key(), apply_filters( 'woocommerce_settings_api_sanitized_fields_' . $this->id, $this->settings ) );
	}


        /**
         * Output for the order received page.
         */
        public function thankyou_page() {
			
			// sending info about new fields in the email along with instructions.
			
		$wc_libelula_settings = get_option('woocommerce_libelula_settings');
	
	if($wc_libelula_settings['show_razon_enabled']=='yes')
	{
		
		$razon_social = get_post_meta( $order->get_id(), 'woo_razon_social', true );
		
		echo '<p><strong style="display: block;">'.__('Razón Social').':</strong> '.$razon_social.'</p>';
	
	}

	if($wc_libelula_settings['show_nit_enabled']=='yes')
	 {
		 $nit  = get_post_meta( $order->get_id(), 'woo_nit', true );

		 echo '<p><strong style="display: block;">'.__('NIT').':</strong> '.$nit.'</p>';
		
	}
	
			
            if ($this->instructions)
                echo wpautop(wptexturize($this->instructions));
        }
        
        public function check_ipn_response() {
			

			
            $transaction_id = $_REQUEST['transaction_id'];
            global $wpdb;
            $order_data = $wpdb->get_row("SELECT * FROM `".$wpdb->postmeta."` WHERE meta_key='_transaction_id' AND meta_value='".$transaction_id."'", OBJECT);           
            $error = $_REQUEST['error'];
            $message = $_REQUEST['message'];
            $cancel_order = $_REQUEST['cancel_order'];
            $order_id = $order_data->post_id;
            $order = wc_get_order($order_id);
            $status = $order->get_status();
            if($transaction_id==''){
                echo "Please provide transaction id";exit;
            }
            elseif(($error=='' || $message=='') && $cancel_order==''){
                echo "Please provide either error code & message or cancel order status";exit;
            }
            //echo WC_Cart::get_cart_url();exit;
            if(isset($cancel_order) && $cancel_order=="1")
            {
                wc_add_notice('Your order was cancelled.', $notice_type = 'notice');
                $order->update_status( 'cancelled' );
                wp_redirect(WC_Cart::get_cart_url());
                exit;
            }

			
			
			$wc_libelula_settings = get_option('woocommerce_libelula_settings');
			
			
			$status_1 =   substr( $wc_libelula_settings['order_status'] ,3);
					
			            
            if($status!='completed'){
                
				if ($error == '0') {
                   
				   if($status_1!='completed')
				   {
					
					$order->update_status($status_1, __('Response Received from Gateway. ', $this->domain));
				  
				   }
				   else
				   {
				    $order->update_status( 'completed' );
				   }
					// Return thankyou redirect
                    wp_redirect($order->get_checkout_order_received_url());
                    WC()->cart->empty_cart();
                }
                else {
                     wc_add_notice($message, $notice_type = 'error');
                     wp_redirect($order->get_checkout_payment_url());
                }
				
				/* // old code logic
				if ($error == '0') {
                    $order->update_status( 'completed' );
                    // Return thankyou redirect
                    wp_redirect($order->get_checkout_order_received_url());
                    WC()->cart->empty_cart();
                }
                else {
                     wc_add_notice($message, $notice_type = 'error');
                     wp_redirect($order->get_checkout_payment_url());
                }
				*/
            }
            else{
                wp_redirect($order->get_checkout_order_received_url());
                echo "This order is completed.";
            }
            exit;
        }

        /**
         * Add content to the WC emails.
         *
         * @access public
         * @param WC_Order $order
         * @param bool $sent_to_admin
         * @param bool $plain_text
         */
        public function email_instructions($order, $sent_to_admin, $plain_text = false) {
           
		   // sending info about new fields in the email along with instructions.
			
			$wc_libelula_settings = get_option('woocommerce_libelula_settings');
	
	if($wc_libelula_settings['show_razon_enabled']=='yes')
	{
		
		$razon_social = get_post_meta( $order->get_id(), 'woo_razon_social', true );
		
		echo '<p><strong style="display: block;">'.__('Razón Social').':</strong> '.$razon_social.'</p>';
	
	}

	if($wc_libelula_settings['show_nit_enabled']=='yes')
	 {
		 $nit  = get_post_meta( $order->get_id(), 'woo_nit', true );

		 echo '<p><strong style="display: block;">'.__('NIT').':</strong> '.$nit.'</p>';
		
	}
	
		   
		    if ($this->instructions && !$sent_to_admin && 'custom' === $order->payment_method && $order->has_status('on-hold')) {
                echo wpautop(wptexturize($this->instructions)) . PHP_EOL;
            } 
        }
        /**
         * Process the payment and return the result.
         *
         * @param int $order_id
         * @return array
         */
        public function process_payment($order_id) {
            global $woocommerce;
            $order = wc_get_order($order_id);
            
            $order_data = $order->get_data();
            //$order_email = $order_data['billing']['email'];
            $order_total = $order->get_total();
      //    print_r($order_total);exit;
            $order_email = $order_data['billing']['email'];
        
			// adding custom fild value by jawad here.
			
			$wc_libelula_settings = get_option('woocommerce_libelula_settings');
			$emite_factura=1;
			if(isset($wc_libelula_settings['emite_factura']))
			{
			$emite_factura=	$wc_libelula_settings['emite_factura'];
			}
	
			// custom field value ends here. will be used in the below array.
			    
            $order_shipping_method = $order->get_shipping_method() ;
            $order_shipping_total = $order->get_total_shipping();
            $lineas_detalle_deuda = array();
            $main_product_array = array(
                "appkey" => $this->app_key,
                "email_cliente" => $order_email,
                "descripcion" => "Pago Compra Online",
                "emite_factura" => $emite_factura /*1*/,
				"moneda" => $order_data['currency'],
                "callback_url" => site_url().'/?wc-api=wc_gateway_todotix',
		"razon_social" => get_post_meta( $order->get_id(), 'woo_razon_social', true ),
		"nit" => get_post_meta( $order->get_id(), 'woo_nit', true ),
		"valor_envio" => $order_shipping_total,
		"descripcion_envio" => $order_shipping_method
            );
	    /*"lineas_metadatos" => array(json_encode(array("nombre" => "Promo",
                        "dato" => "Liquidacion especial de invierno")))*/

            foreach ($order->get_items() as $item_key => $item_values):
                $item_id = $item_values->get_id();
                $item_name = $item_values->get_name(); // Name of the product
                $item_data = $item_values->get_data();
                $quantity = $item_data['quantity'];
                $line_total = $item_data['total'];
				
//				write_log('THIS IS THE START OF MY CUSTOM DEBUG');
//i can log data like objects
//write_log($url.' - '.json_encode($item_data));
//write_log($line_total);
//exit;
		//$_product = wc_get_product( $item_data['product_id'] );

                $temp["concepto"] = $item_name;
                $temp["cantidad"] = $quantity;
                // idiot coder, who put round value for unit price without thinking that a price can be with decimals.
				//$temp["costo_unitario"]= round($line_total/$quantity);
				$temp["costo_unitario"]= $line_total/$quantity;
                //$temp["costo_unitario"]= $order_total;

                $lineas_detalle_deuda[] = json_encode($temp);

//write_log(print_r($temp,true));
//exit;

            endforeach;
//print_r($temp);exit;
            $main_product_array["lineas_detalle_deuda"] = $lineas_detalle_deuda;

            $url = $this->api_url;
//print_r($url.' - '.json_encode($main_product_array));
//error_log(print_r($url.' - '.json_encode($main_product_array),true));

//write_log('THIS IS THE START OF MY CUSTOM DEBUG 2');
//i can log data like objects
//write_log($url.' - '.json_encode($main_product_array));
//exit;
            $ch = curl_init();
            //curl_setopt($ch, CURLOPT_URL, 'https://imperllanta.solunes.site/api/login');
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, (json_encode($main_product_array)));
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
			//echo 'result:'.$result;

			//if (curl_errno($ch)) { 
			   //echo 'error:'. curl_error($ch); 
				
			//}
            curl_close($ch);
			//exit;
            $product_result = json_decode($result);
//print_r(json_encode($product_result));exit;

            $transaction_id = $product_result->id_transaccion;
            $api_url = $product_result->url_pasarela_pagos;

            if (!empty($transaction_id)) {
                $order->set_transaction_id($transaction_id);
            }

            if ($product_result->error == '0') {

                $status = 'wc-' === substr($this->order_status, 0, 3) ? substr($this->order_status, 3) : $this->order_status;
                //echo $status;exit;
                // Set order status
               $order->update_status('pending', __('Checkout with Libélula. ', $this->domain));

                // Reduce stock levels
                $order->reduce_order_stock();

                // Remove cart
                //WC()->cart->empty_cart();

                // Return thankyou redirect
                return array(
                    'result' => 'success',
                    'redirect' => $api_url
                );
            } else {
                WC()->session->set('refresh_totals', true);
                wc_add_notice($product_result->mensaje, $notice_type = 'error');
                return array(
                    'result' => 'failure',
                    'redirect' => WC_Cart::get_checkout_url()
                );
            }
        }
    }
}


add_filter('woocommerce_payment_gateways', 'add_todotix_gateway_class');

function add_todotix_gateway_class($methods) {
    $methods[] = 'WC_Gateway_Todotix';
    return $methods;
}
function enable_gateway_order_pay( $methods ) {
	if ( is_checkout() ) {
		$currency = get_woocommerce_currency();
		if ( !($currency == 'BOB' || $currency == 'USD') ) {
			unset( $methods['todotix'] );
			unset( $methods['libelula'] );
							
		}
	}
	
    if ( is_checkout() && is_wc_endpoint_url( 'order-pay' ) && isset($methods['todotix']) ){
        $methods['todotix']->chosen = true;
		        $methods['todotix']->chosen = true;
    }
    return $methods;
}
add_filter( 'woocommerce_available_payment_gateways', 'enable_gateway_order_pay' );



/*Adding new fields*/
add_action('woocommerce_after_checkout_billing_form', 'pagos_additional_checkout_fields');

function pagos_additional_checkout_fields( $checkout ) {
	$current_user = wp_get_current_user();
	$razon_social = $checkout->get_value( 'txt_razon_social' );
	$nit = $checkout->get_value( 'txt_nit' );

	if($current_user->ID > 0) {
		$razon_social = get_user_meta($current_user->ID, "user_razon_social", true);
		$nit = get_user_meta($current_user->ID, "user_nit", true);
	}

	echo '<div id="razon_social_checkout_field" ><!--<h3>'.__('My Field').'</h3>-->';

	// $this default method don't work here so using different workable approach.
	$wc_libelula_settings = get_option('woocommerce_libelula_settings');
	//print_r($wc_libelula_settings);

	
	if($wc_libelula_settings['show_razon_enabled']=='yes')
	{				
	woocommerce_form_field( 'txt_razon_social', array( 
		'type' 			=> 'text', 
		'class' 		=> array('form-row form-row-wide'), 
		'label' 		=> 'Razón Social', 
		'placeholder' 	=> __(''),
		//), $checkout->get_value( 'txt_razon_social' ));
		), $razon_social);
	}

	if($wc_libelula_settings['show_nit_enabled']=='yes')
	{
	woocommerce_form_field( 'txt_nit', array( 
		'type' 			=> 'text', 
		'class' 		=> array('form-row form-row-wide'), 
		'label' 		=> 'Número de NIT', 
		'placeholder' 	=> __(''),
		//), $checkout->get_value( 'txt_nit' ));
		), $nit);
	
	}
	
	echo '</div>';
}

add_action('woocommerce_checkout_process', 'pagos_additional_checkout_fields_validate');
 
function pagos_additional_checkout_fields_validate() {
	if ( !empty($_POST['txt_nit']) && !is_numeric($_POST['txt_nit']) )
		wc_add_notice( 'Please enter numeric value for NIT.', 'error' ); 
}

add_action('woocommerce_checkout_update_order_meta', 'pagos_additional_checkout_fields_update_order_meta');
function pagos_additional_checkout_fields_update_order_meta( $order_id ) {
	$current_user = wp_get_current_user();
	
	if ($_POST['txt_razon_social']) {
		update_post_meta( $order_id, 'woo_razon_social', sanitize_text_field($_POST['txt_razon_social']));
		if($current_user->ID > 0) {
			$razon_social = update_user_meta($current_user->ID, "user_razon_social", sanitize_text_field($_POST['txt_razon_social']));
		}
	}

	if ($_POST['txt_nit']) {
		update_post_meta( $order_id, 'woo_nit', sanitize_text_field($_POST['txt_nit']));
		if($current_user->ID > 0) {
			$nit = update_user_meta($current_user->ID, "user_nit", sanitize_text_field($_POST['txt_nit']));
		}
	}
}

add_action( 'woocommerce_admin_order_data_after_billing_address', 'pagos_additional_checkout_fields_display_order', 10, 1 );
function pagos_additional_checkout_fields_display_order( $order ){
    global $post;
    
	$razon_social = get_post_meta( $post->ID, 'woo_razon_social', true );
	if($razon_social == "") {
		$razon_social = 'Not available.';
	}

	$nit = get_post_meta( $post->ID, 'woo_nit', true );
	if($nit == "") {
		$nit = 'Not available.';
	}
	$wc_libelula_settings = get_option('woocommerce_libelula_settings');
	
	if($wc_libelula_settings['show_razon_enabled']=='yes')
	{	
	echo '<p><strong style="display: block;">'.__('Razón Social').':</strong> '.$razon_social.'</p>';
	}
	if($wc_libelula_settings['show_nit_enabled']=='yes')
	{
	echo '<p><strong style="display: block;">'.__('NIT').':</strong> '.$nit.'</p>';
	}
	
}

add_action( 'woocommerce_email_after_order_table', 'add_order_email_instructions', 10, 2 );

function add_order_email_instructions( $order, $sent_to_admin ) {
	$razon_social = get_post_meta( $order->get_id(), 'woo_razon_social', true );
	if (!empty($razon_social)) {
		echo '<p><strong style="display: block;">'.__('Razón Social').':</strong> '.$razon_social.'</p>';
	}
	
	$nit = get_post_meta( $order->get_id(), 'woo_nit', true );
	if (!empty($nit)) {
		echo '<p><strong style="display: block;">'.__('NIT').':</strong> '.$nit.'</p>';
	}
	
	$delivery_date_formatted = get_post_meta( $order->get_id(), 'delivery_date_formatted', true );
	if (!empty($delivery_date_formatted)) {
		echo '<p><strong style="display: block;">'.__('Delivery Date').':</strong> '.$delivery_date_formatted.'</p>';
	}
	
	$delivery_time = get_post_meta( $order->get_id(), 'delivery_time', true );
	if (!empty($delivery_time)) {
		echo '<p><strong style="display: block;">'.__('Delivery Time').':</strong> '.$delivery_time.'</p>';
	}
}



if (!function_exists('write_log')) {

    function write_log($log) {
        if (true === WP_DEBUG) 
		{
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
            } else {
                error_log($log);
            }
        }
    }

}