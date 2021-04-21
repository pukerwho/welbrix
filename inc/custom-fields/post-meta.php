<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
	Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'blogs' )
    ->add_fields( array(
      Field::make( 'checkbox', 'crb_blogs_whether', 'Погода?' )->set_option_value('no'),
      Field::make( 'text', 'crb_blogs_city', 'City (для погоды)' )->set_conditional_logic( array(
        array(
            'field' => 'crb_blogs_whether',
            'value' => true,
        )
    ) ),
  ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'wow' )
    ->add_fields( array(
      Field::make( 'media_gallery', 'crb_wow_gallery', 'Галерея' )->set_type( array( 'image' ) ),
      Field::make( 'textarea', 'crb_wow_map', 'Карта (расположение)' ),
  ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'way' )
    ->add_fields( array(
      Field::make( 'complex', 'crb_way', 'Рейсы' )->add_fields( array(
        Field::make( 'text', 'crb_way_start_time', 'Время отправления' ),
        Field::make( 'text', 'crb_way_end_time', 'Время прибытия' ),
        Field::make( 'text', 'crb_way_when', 'Регулярность' ),
        Field::make( 'text', 'crb_way_perevozhik', 'Перевозчик' ),
        Field::make( 'text', 'crb_way_price', 'Стоимость' ),
        Field::make( 'complex', 'crb_way_phones', 'Телефоны' )->add_fields( array(
          Field::make( 'text', 'crb_way_phone', 'Телефон' ),
        )),
      )),
      Field::make( 'association', 'crb_way_start_city', 'Город отправления' )
        ->set_types( array(
          array(
            'type'      => 'term',
            'taxonomy' => 'citylist',
          )
      ) ),
      Field::make( 'association', 'crb_way_end_city', 'Город прибытия' )
        ->set_types( array(
          array(
            'type'      => 'term',
            'taxonomy' => 'citylist',
          )
      ) ),
      
  ) );
}

?>