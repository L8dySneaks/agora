<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>

        <?php if ( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>

        <?php the_content(); ?>
        <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

<?php get_footer(); ?>
