<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
	Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', 'IN', array('tpl_main.php', 'tpl_azovsea.php', 'tpl_karpaty.php', 'tpl_blacksea.php') )
    ->add_fields( array(
      Field::make( 'complex', 'crb_page_faq', 'FAQ' )->add_fields( array(
        Field::make( 'text', 'crb_page_faq_question', 'Вопрос' ),
        Field::make( 'textarea', 'crb_page_faq_answer', 'Ответ' ),
      )),
  ) );
}

?>