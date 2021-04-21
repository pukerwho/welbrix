<?php

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
	function crb_post_theme_options() {
		Container::make( 'post_meta', 'Данные о продукте' )
	    ->where( 'post_type', '=', 'product' )
	    ->add_tab( __('Информация'), array(
	      Field::make( 'text', 'product_info_style', 'Стиль' ),
	      Field::make( 'text', 'product_info_typelamp', 'Тип лампы' ),
	      Field::make( 'text', 'product_info_typecokol', 'Тип цоколя' ),
	      Field::make( 'text', 'product_info_material', 'Материал' ),
	  	) )
	  	->add_tab( __('Характеристики'), array(
	      Field::make( 'text', 'product_info_mosh', 'Номинальная мощность, Вт' ),
	      Field::make( 'text', 'product_info_analoglep', 'Аналог ЛЭП, Вт' ),
	      Field::make( 'text', 'product_info_tempcolor', 'Температура цвет, К' ),
	      Field::make( 'text', 'product_info_diapazon', 'Диапазон рабочего напряжения, V' ),
	      Field::make( 'text', 'product_info_qr', 'Штрихкод' ),
	  ) );
	}

?>