<?php 
get_header(); ?>

<main id="main">
    <div id=homepage>
        <div id="main-feed">
            <?php
    
                 if ( is_home() &&  is_front_page() ) : 
                     get_template_part('template-parts/pricelist', 'pricelist');

                 endif;

                 while ( have_posts() ) :
                    the_post();
                endwhile;



        
        ?>

            <aside class="sidebar">
                <?php dynamic_sidebar('homepage-sidebar'); ?>
            </aside>
        </div>
    </div>
</main>


<?php get_footer(); ?>
