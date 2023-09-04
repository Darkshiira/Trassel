<?php 
get_header(); ?>

<main id="main">
    <?php
    
    if ( is_home() &&  is_front_page() ) : 
    get_template_part('template-parts/pricelist', 'pricelist');

    echo do_shortcode('[CP_APP_HOUR_BOOKING id="2"]');
    endif;

    while ( have_posts() ) :
        the_post();
    endwhile;

        
        ?>

	
</main>


<?php get_footer(); ?>
