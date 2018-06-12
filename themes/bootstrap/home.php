<?php
/**
 * User: goja288
 * Date: 11/06/18
 * Time: 08:11 PM
 */
?>

<?php get_header(); ?>

<div class="col-sm-8 blog-main">

    <?php
    if ( have_posts() ) {
        while ( have_posts() ) : the_post();
            ?>
            <div class="blog-post">
                <h2 class="blog-post-title"><?php the_title(); ?></h2>
                <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
                <?php the_content(); ?>
            </div><!-- /.blog-post -->
        <?php
        endwhile;
    }
    ?>

