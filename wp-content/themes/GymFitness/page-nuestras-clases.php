<!-- Obtenemos la pagina de header -->
<?php get_header(); ?>

    <main class="contenedor pagina seccion no-sidebar">
        <div class=" text-center">
            <?php get_template_part('template-parts/paginas');?>

            <?php gymFitness_lista_clases();?>

        <?php get_sidebar();  ?>
 
        </div>        
    </main>

<!-- Obtenemos el footer -->
<?php get_footer(); ?>


