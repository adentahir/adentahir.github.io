<?php 
/**
 * The Archive page for Ele Makeup Lite
 *
 * Displays the Archive pages.
 *
 * @package Ele Makeup Lite
 * 
 * @since Ele Makeup Lite 1.0
 */
global $complete;?>
<?php get_header(); ?>
	<!--Category Posts-->
    <div class="category_wrap layer_wrapper">
        <!--CUSTOM PAGE HEADER STARTS-->
            <?php get_template_part('sktframe/core','pageheader'); ?>
        <!--CUSTOM PAGE HEADER ENDS-->
        <?php get_template_part('templates/post','layout4'); ?>
    </div><!--layer_wrapper class END-->
<?php get_footer(); ?>