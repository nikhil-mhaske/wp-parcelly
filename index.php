<?php
get_header();
?>


<div class="post-display">
    <h1>Check out our latest Posts</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h2><?php the_title(); ?></h2>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>

        <?php endwhile;
    else : ?>

        <p><?php _e('Sorry, no posts found.'); ?></p>

    <?php endif; ?>
</div>

<?php get_footer(); ?>