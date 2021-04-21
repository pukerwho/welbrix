<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'term_meta', __( 'Term Options', 'crb' ) )
    ->where( 'term_taxonomy', '=', 'citylist' ) // only show our new field for categories
    ->add_tab('Основное', array(
    	Field::make( 'image', 'crb_citylist_img', 'Заглавная картинка' )->set_value_type( 'url'),
      Field::make( 'text', 'crb_citylist_title', 'Заголовок' ),
      Field::make( 'text', 'crb_citylist_menu_name', 'Название в меню' ),
      Field::make( 'checkbox', 'crb_citylist_all_category', 'Это субкатегория для всего жилья?' ),
      Field::make( 'rich_text', 'crb_citylist_rich_text', 'Текст' ),
    ))
    ->add_tab('FAQ', array(
      Field::make( 'complex', 'crb_citylist_faq', 'FAQ' )->add_fields( array(
          Field::make( 'text', 'crb_citylist_faq_question', 'Вопрос' ),
          Field::make( 'textarea', 'crb_citylist_faq_answer', 'Ответ' ),
      )),
    ))
    ->add_tab('Видео', array(
      Field::make( 'text', 'crb_citylist_video', 'Видео (id YouTube)' ),
    ))
    ->add_tab('Информация', array(
      Field::make( 'select', 'crb_citylist_location', 'Курорт' )
      ->add_options( array(
        'none' => 'Ни моря, ни гор',
        'azovsea' => 'Азовское море',
        'blacksea' => 'Черное море',
        'karpaty' => 'Карпаты',
      ) ),
      Field::make( 'association', 'crb_citylist_association', 'Города рядом' )
      ->set_duplicates_allowed( true )
      ->set_types( array(
          array(
            'type'      => 'term',
            'taxonomy' => 'citylist',
          )
      ) ),
      Field::make( 'checkbox', 'crb_citylist_iscurort', 'Курорт?' ),
      Field::make( 'checkbox', 'crb_citylist_showmain', 'Показывать на главной?' ),
    ))
    ->add_tab('Новый шаблон', array(
      Field::make( 'checkbox', 'crb_citylist_newtemplate', 'Новый шаблон?' ),
      Field::make( 'textarea', 'crb_citylist_innertext', 'Вступительный текст' )->set_conditional_logic( array(
          array(
            'field' => 'crb_citylist_newtemplate',
            'value' => '1', 
            'compare' => '=',
        )
        ) ),
      Field::make( 'image', 'crb_citylist_firstphoto', 'Первая фотка' )->set_conditional_logic( array(
          array(
            'field' => 'crb_citylist_newtemplate',
            'value' => '1', 
            'compare' => '=',
        )
        ) ),
      Field::make( 'text', 'crb_citylist_welcometitle', 'Заголовок для Информации' )->set_conditional_logic( array(
          array(
            'field' => 'crb_citylist_newtemplate',
            'value' => '1', 
            'compare' => '=',
        )
        ) ),
      Field::make( 'rich_text', 'crb_citylist_welcometext', 'Общая информация' )->set_conditional_logic( array(
          array(
            'field' => 'crb_citylist_newtemplate',
            'value' => '1', 
            'compare' => '=',
        )
        ) ),
      Field::make( 'text', 'crb_citylist_hotelstitle', 'Заголовок для ЖИЛЬЯ' )->set_conditional_logic( array(
          array(
            'field' => 'crb_citylist_newtemplate',
            'value' => '1', 
            'compare' => '=',
        )
        ) ),
      Field::make( 'rich_text', 'crb_citylist_hotelstext', 'Про жилье' )->set_conditional_logic( array(
          array(
            'field' => 'crb_citylist_newtemplate',
            'value' => '1', 
            'compare' => '=',
        )
        ) ),
      Field::make( 'text', 'crb_citylist_placestitle', 'Заголовок для МЕСТ' )->set_conditional_logic( array(
          array(
            'field' => 'crb_citylist_newtemplate',
            'value' => '1', 
            'compare' => '=',
        )
        ) ),
      Field::make( 'rich_text', 'crb_citylist_placestext', 'Про места' )->set_conditional_logic( array(
          array(
            'field' => 'crb_citylist_newtemplate',
            'value' => '1', 
            'compare' => '=',
        )
        ) ),
      Field::make( 'text', 'crb_citylist_videotitle', 'Заголовок для Видео' )->set_conditional_logic( array(
          array(
            'field' => 'crb_citylist_newtemplate',
            'value' => '1', 
            'compare' => '=',
        )
        ) ),
      Field::make( 'text', 'crb_citylist_camerstitle', 'Заголовок для Камер' )->set_conditional_logic( array(
          array(
            'field' => 'crb_citylist_newtemplate',
            'value' => '1', 
            'compare' => '=',
        )
        ) ),
      Field::make( 'textarea', 'crb_citylist_camers', 'Камера (iframe)' )->set_conditional_logic( array(
          array(
            'field' => 'crb_citylist_newtemplate',
            'value' => '1', 
            'compare' => '=',
        )
        ) ),
  ) );
}

?>