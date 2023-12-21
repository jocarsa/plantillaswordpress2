<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage JoseVicente
 * @since JoseVicente 1.0
 * @version 1.0
 */
?>
<?php get_header(); ?>
Bienvenidos a mi web
<?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/post/content', get_post_format() );

        endwhile;
    else :

    endif;
?>
<?php get_footer(); ?>
