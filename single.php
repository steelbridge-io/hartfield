
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hartfield-financial
 */

get_header(); ?>
<div id="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="page-content">
            <?php the_content(); ?>
        </div>

        <?php
        // If comments are open or there are comments, load the comment template
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
    <?php endwhile; endif; ?>
</div>
<?php get_footer();