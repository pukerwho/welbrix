<?php 

add_filter( 'woocommerce_checkout_fields', 'truemisha_del_fields', 25 ); 
function truemisha_del_fields( $fields ) {
 
	// оставляем эти поля
	// unset( $fields[ 'billing' ][ 'billing_first_name' ] ); // имя
	// unset( $fields[ 'billing' ][ 'billing_phone' ] ); // телефон
	// unset( $fields[ 'billing' ][ 'billing_email' ] ); // емайл
 
	// удаляем все эти поля
	unset( $fields[ 'billing' ][ 'billing_last_name' ] ); // фамилия
	unset( $fields[ 'billing' ][ 'billing_company' ] ); // компания
	unset( $fields[ 'billing' ][ 'billing_country' ] ); // страна
	unset( $fields[ 'billing' ][ 'billing_address_1' ] ); // адрес 1
	unset( $fields[ 'billing' ][ 'billing_address_2' ] ); // адрес 2
	unset( $fields[ 'billing' ][ 'billing_city' ] ); // город
	unset( $fields[ 'billing' ][ 'billing_state' ] ); // регион, штат
	unset( $fields[ 'billing' ][ 'billing_postcode' ] ); // почтовый индекс
	unset( $fields[ 'order' ][ 'order_comments' ] ); // заметки к заказу
 
	return $fields;
 
}

// WooCommerce Checkout Fields Hook
add_filter('woocommerce_checkout_fields','custom_wc_checkout_fields_no_label');
function custom_wc_checkout_fields_no_label($fields) {
	// loop by category
	foreach ($fields as $category => $value) {
		foreach ($fields[$category] as $field => $property) {
	    // remove label property
	    unset($fields[$category][$field]['label']);
		}
	}
	return $fields;
}

add_filter( 'woocommerce_checkout_fields' , 'override_billing_checkout_fields', 20, 1 );
function override_billing_checkout_fields( $fields ) {
    $fields['billing']['billing_first_name']['placeholder'] = 'Имя';
    $fields['billing']['billing_phone']['placeholder'] = 'Телефон';
    $fields['billing']['billing_email']['placeholder'] = 'Email';
    return $fields;
}