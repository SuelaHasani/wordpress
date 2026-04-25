<?php get_header();?>

<main class="container">
   <h1> Lastest Movies </h1>

   <?php 
   $args = array(
    'post_type'         => 'movie',
    'post_per_page'     => 10

   );

   $the_query = new WP_Query($args);
   ?>

   <?php if($the_query -> have_posts()):?>
    <?php while ($the_query->have_posts()) : $the_query-> the_posts();?>
    <article id="post-<?php the_ID();?> "<?php post_class(); ?>>

    <h2>
        <a href="<?php the_permalink();?>">
            <?php the_title(); ?>

        </a>

    </h2>


    <p>
        Posted on <?php the_time('F j, Y'); ?>
    </p>

    <?php the_excerpt();?>

   </article>
   <?php endwhile; ?>
   <?php else: ?>
    <p> no post found </p>
    <?php endif; ?>

</main>

<?php get_footer();?>