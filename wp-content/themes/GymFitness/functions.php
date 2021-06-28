<?php
//Consultas reutilizables

require get_template_directory().'/inc/queries.php';


//cuando el tema es activado
function gymFitness_setup(){
    add_theme_support('post-thumbnails');

    //agregar imagenes de tamaño personal
    add_image_size( 'square', 350, 350, true);
    add_image_size( 'portrait', 350, 724, true);
    add_image_size( 'cajas', 400, 375, true);
    add_image_size( 'mediano',700, 400, true);
    add_image_size( 'blog', 966, 644, true);
}

add_action('after_setup_theme', 'gymfitness_setup');

    function gymFitness_menus() {
        register_nav_menus(array(
            'menu-principal' => __('Menu Principal', 'gymFitness')
        ));
    }


add_action( 'init', 'gymFitness_menus');    

//Scripts y Styles
function gymFitness_scripts_styles(){

    //cargando normalize
    wp_enqueue_style('normalize', get_template_directory_uri() .'/css/normalize.css', array(), '8.0.1');
    // cargando slicknav
    wp_enqueue_style('slicknavCSS',get_template_directory_uri() .'/css/slicknav.min.css',array(), '1.0.0');
    
    //cargando google fonts (editable con la fuente necesaria)
    wp_enqueue_style('googleFont',' https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap" rel="stylesheet', array(), '1.0.0');
    
    // cargando una hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','googleFont'), '1.0.0');

    //cargando el slicknav js
    wp_enqueue_script('slicknavJS', get_template_directory_uri() .'/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);

     //cargando el slicknav js
     wp_enqueue_script('scripts', get_template_directory_uri() .'/js/scripts.js', array('jquery'), '1.0.0', true);

     

}

add_action('wp_enqueue_scripts', 'gymFitness_scripts_styles');