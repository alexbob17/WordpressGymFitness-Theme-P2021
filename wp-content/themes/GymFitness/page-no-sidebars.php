<!-- Obtenemos la pagina de header -->
<?php 
/*
Template Name: Contenido centrado (No sidebars);
*/

get_header(); ?>

 
    <main class="contenedor pagina seccion no-sidebar">
        <div class="contenido-principal">
            <?php get_template_part('template-parts/paginas');?>
        </div>        
    </main>


<!-- Obtenemos el footer -->
<?php get_footer(); ?>


