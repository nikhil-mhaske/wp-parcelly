<?php
get_header(); ?>


<div class="post-display">
    <h1>Check out our latest Posts</h1>
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1, // Display all posts
        'orderby' => 'date', // Sort by date
        'order' => 'DESC' // Show latest posts first
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

            <h2><?php the_title(); ?></h2>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>

        <?php endwhile;
    else : ?>

        <p><?php _e('Sorry, no posts found.'); ?></p>

    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>

<?php
get_footer();
