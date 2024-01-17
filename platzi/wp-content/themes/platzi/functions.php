<?php

 function init_template(){
    //Permite mostrar una imagen destacada dentro de nuestras entradas y páginas
	add_theme_support('post-thumbnails');
    //Prints title of the page on the header
   	the_post_thumbnail();

    add_theme_support('title-tag');

    //Adding the menu
    //the array contains the details for the menu
   register_nav_menus(array('top_menu' => 'Main Menu'));

}

add_action('after_setup_theme', 'init_template');


function assets(){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', '', '5.0.0-beta1', 'all' );
    //font de google
    wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat&display=swap','','1.1','all');

    wp_enqueue_style( 'styles', get_stylesheet_uri(), array('bootstrap', 'montserrat'), '1.1', 'all' );

    wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js','','1.16.0', true);

    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0-beta1', true );

    //poner en cola el script custom.js. Se debe indicar dónde está el archivo dentro de nuestro template
    wp_enqueue_script( 'custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true );
}

add_action('wp_enqueue_scripts', 'assets');


function platzi_add_sidebar(){
	register_sidebar(
		array(
		'name' => 'Pie de página',
		'id' => 'footer',
		'description' => 'Zona de widgets para pie de página',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>')
	);
}


add_action('widgets_init', 'platzi_add_sidebar');  


?>