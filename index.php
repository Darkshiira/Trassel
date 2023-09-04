<?php 
get_header(); ?>

<main id="main">
    <?php
    
    if ( is_home() &&  is_front_page() ) : 
    get_template_part('template-parts/pricelist', 'pricelist');

    endif;

    while ( have_posts() ) :
        the_post();
    endwhile;

        
        ?>

	
</main>


<?php get_footer(); ?>
