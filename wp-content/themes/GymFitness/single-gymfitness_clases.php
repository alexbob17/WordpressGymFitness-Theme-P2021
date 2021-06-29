<?php 
/*
Template Name: Contenido centrado (No sidebars);
*/
get_header(); ?>

 
    <main class="contenedor pagina seccion con-sidebar">
        <div class="contenido-principal">
            <?php get_template_part('template-parts/paginas');?>
        </div>

        <?php get_sidebar();  ?>

    </main>


<!-- Obtenemos el footer -->
<?php get_footer(); ?>
