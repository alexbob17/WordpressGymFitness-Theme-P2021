<?php

function gymFitness_lista_clases(){?>
    <ul class="lista-clases">
    <?php
        $args = array(
            'post_type' => 'gymfitness_clases',
            'post_per_page' => 10
        );
        $clases = new WP_Query($args);
        While($clases->have_posts()):
    
     ?>
    </ul>

<?php
}

