<?php
/**
 *
 *
 * This is the Content Page template (i.e. 'Default Template')
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uri-modern
 */

get_header();
get_template_part( 'template-parts/sitebar' );
?>

    <main id="main" class="site-main" role="main">
        
        <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
        
        <?php
        if(has_nav_menu('menu-1')) {
            get_template_part( 'template-parts/localnav' );
        }
        ?>

        <?php
        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php
get_footer();
