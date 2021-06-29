<!-- Se crea un bucle para que el sitio se pueda editar sin reescribir dentro del codigo -->
<?php while( have_posts()): the_post(); ?>
<h1 class="text-center texto-primario"> <?php the_title(); ?> </h1>
<?php 
        if(has_post_thumbnail() ):
             the_post_thumbnail('mediano', array('class' => 'imagen-destacada')); 
        endif;   
    ?>
<?php 
        if(get_post_type() === 'gymfitness_clases'){
            $hora_inicio= get_field('hora_inicio');
            $hora_fin= get_field('hora_fin'); ?>
<p class="informacion-clase"><?php the_field('dias_clases');?> a <?php echo $hora_inicio . " - " . $hora_fin;?></p>
<?php } ?>


<?php the_content(); ?>

<?php endwhile; ?>