<?php get_header(); ?>

<main id="main">
    <?php
    $args = array(
        'post_type' => 'custom_post', // Use the actual post type name you registered
        'posts_per_page' => -1,
    );
    
    $custom_query = new WP_Query($args);
    ?>

    <table>
        <thead>
            <tr>
                <th>Method</th>
                <th>Short hair</th>
                <th>Long hair</th>
                <th>Children</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($custom_query->have_posts()) :
                $custom_query->the_post();
            ?>
            <tr>
                <td><?php the_title(); ?></td>
                <?php
                // Get custom field values for the current post
                $short_hair = get_post_meta(get_the_ID(), 'short_hair', true);
                $long_hair = get_post_meta(get_the_ID(), 'long_hair', true);
                $children = get_post_meta(get_the_ID(), 'children', true);
                ?>
                <td><?php echo esc_html($short_hair); ?></td>
                <td><?php echo esc_html($long_hair); ?></td>
                <td><?php echo esc_html($children); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <?php wp_reset_postdata(); ?>

    
</main>

<?php get_footer(); ?>
