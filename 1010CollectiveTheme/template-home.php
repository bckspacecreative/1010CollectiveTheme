<?php
/**
 * Template Name: Home Page Template
 * Description: A Page Template for the home page
 *
 *
 * @package bckspace
 * @subpackage bckspace
 * @since bckspace 1.0
 */

get_header(); ?>
    <div class="wrapper">
        <div class="main-content">    
            <div class="most-recent-blog-posts">
                    <?php
                    if ( have_posts() ) : the_post();
                      the_content();                   
                    endif;  
                    ?>
                </div> <!-- end most recent blog posts -->                 
            </div> <!-- end main content -->
        </div> <!-- end wrapper -->
<!-- END MAIN CONTENT -->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>