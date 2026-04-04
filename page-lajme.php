<?php
get_header();
?>

<div class="container lajme-page my-5">
    <header class="lajme-header">
        <h1>Lajme</h1>
        <p class="lead">Lajmet e fundit dhe njoftimet</p>
    </header>

    <?php
    $args = array(
        'post_type'       => 'post',
        'posts_per_page'  => 10,
        'category_name'   => 'lajme',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()): ?>

        <div class="lajme-grid">
            <?php while ($query->have_posts()): $query->the_post(); ?>

                <article class="lajme-item">
                    <?php if (has_post_thumbnail()): ?>
                        <a class="lajme-thumb" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>

                    <div class="lajme-body">
                        <h2 class="lajme-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="lajme-meta"><?php echo get_the_date(); ?> • <?php echo get_the_author(); ?></div>
                        <div class="lajme-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 28); ?></div>
                        <a class="lajme-readmore" href="<?php the_permalink(); ?>">Read more</a>
                    </div>
                </article>

            <?php endwhile; ?>
        </div>

    <?php else: ?>
        <p>Nuk ka postime në kategorinë lajme.</p>
    <?php endif;

    wp_reset_postdata();
    ?>

</div>

<?php get_footer(); ?>