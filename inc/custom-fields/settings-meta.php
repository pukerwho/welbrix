<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', __('Welbrix') )
  	->add_tab( __('Главная страница'), array(
  		
  		Field::make( 'rich_text', 'crb_main_text', 'Текст на странице' ),
    ))
    ->add_tab( __('Контакты'), array(
      Field::make( 'text', 'crb_contact_address', 'Адрес' ),
      Field::make( 'complex', 'crb_contact_phones', 'Телефоны' )
        ->add_fields( array(
          Field::make( 'text', 'crb_contact_phone', 'Номер' ),
      ) ),
      Field::make( 'text', 'crb_contact_email', 'Email' ),
      Field::make( 'text', 'crb_contact_facebook', 'Facebook' ),
      Field::make( 'text', 'crb_contact_instagram', 'Instagram' ),
      Field::make( 'text', 'crb_contact_twitter', 'Twitter' ),
      Field::make( 'text', 'crb_contact_pinterest', 'Pinterest' ),
    ) );
}

?>