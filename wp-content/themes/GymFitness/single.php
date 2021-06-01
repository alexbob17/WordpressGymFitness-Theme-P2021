<<!-- Obtenemos la pagina de header -->
<?php get_header(); ?>


<!-- Se crea un bucle para que el sitio se pueda editar sin reescribir dentro del codigo -->
<?php while( have_posts()): the_post(); ?>

    <h1> <?php the_title(); ?> </h1>
    <?php the_content(); ?>

<?php endwhile; ?>

<!-- Obtenemos el footer -->
<?php get_footer(); ?>
