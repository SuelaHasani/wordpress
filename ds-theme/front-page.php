<?php get_header(); ?>

<main class="container">
    <h1>Latest Movies</h1>

    <?php
    $args = array(
        'post_type'      => 'movies',
        'posts_per_page' => 10
    );

    $the_query = new WP_Query( $args );
    ?>

    <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><?php the_title(); ?></h2>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="movie-thumbnail">
                        <?php the_post_thumbnail( 'medium' ); ?>
                    </div>
                <?php endif; ?>

                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>