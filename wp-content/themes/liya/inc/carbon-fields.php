<?php

function carbon_lang_prefix() {
	$prefix = '';
	if ( ! defined( 'ICL_LANGUAGE_CODE' ) ) {
		return $prefix;
	}
	$prefix = '_' . ICL_LANGUAGE_CODE;
	return $prefix;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'liya_carbon' );
function liya_carbon() {
    // banner section
    Container::make( 'post_meta', 'Баннер' )
        ->show_on_template( array('page.php'))
        ->add_fields( array(
            Field::make('text', 'banner-title', 'Заголовок'),
            Field::make( 'text', 'banner-img-text-1', 'текст 1' )
            -> set_width(33),
            Field::make( 'text', 'banner-img-text-2', 'текст 2' )
            -> set_width(33),
            Field::make( 'text', 'banner-img-text-3', 'текст 3' )
            -> set_width(33),
            Field::make( 'image', 'banner-img-1', 'Изображение 1' )
            ->set_value_type( 'url' )
            -> set_width(33),
            Field::make( 'image', 'banner-img-2', 'Изображение 2' )
            ->set_value_type( 'url' )
            -> set_width(33),
            Field::make( 'image', 'banner-img-3', 'Изображение 3' )
            ->set_value_type( 'url' )
            -> set_width(33),
    	));
    // banner section

    // projects
    Container::make('post_meta', 'Проекты') 
        ->show_on_template( array('page.php'))
        ->add_fields(array(
            Field::make('text', 'projects-title', 'Заголовок'),
            Field::make('textarea', 'projects-desc', 'Описание блока'),
        ));
    // projects  ->where( 'post_term', '=', 'projects')

    // projects item
    Container::make('post_meta', 'Слайдер')
        //->show_on_template( array('page.php'))
        ->add_fields(array(
            Field::make('complex', 'projects-item-slider', 'слайдер')
			->add_fields('text', 'Слайдер', array(
				Field::make( 'image', 'projects-item-slider-image', 'Изображение' )
				->set_value_type( 'url' ),
                Field::make('text', 'projects-item-slider-name', 'Название')
				-> set_width(30),
				Field::make('textarea', 'projects-item-slider-desc', 'Описание')
				-> set_width(30),
                Field::make( 'select', 'projects-item-slider-icons', 'Выберите...' )
				->set_options( 
					array(
						'8 марта' => '8 марта',
						'Новый год' => 'Новый год',
						'тест' => 'тест',
					)
                )
                ))
        ));
    // projects item
}
?>