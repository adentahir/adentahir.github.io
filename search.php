<?php 
/**
 * The Search Page Template for Ele Makeup Lite
 *
 * Displays the Search Page.
 *
 * @package Ele Makeup Lite
 * 
 * @since Ele Makeup Lite 1.0
 */
global $complete;?>

<?php get_header(); ?>

    <div class="search_wrap layer_wrapper">
    
    	<!--SEARCH DETAILS START-->
    	<div class="center">
            <div class="search_term">
                <h2 class="postsearch">
					<?php printf( __( 'Search Results for: %s', 'complete' ), '<span>' . esc_html( get_search_query() ) . '</span>'); ?>
                </h2>
                <a class="search_count">
					<?php _e('Total posts found - ', 'complete'); ?> <?php global $wp_query; echo $wp_query->found_posts; wp_reset_query(); ?>
                </a>
            
            	<?php get_search_form(); ?>
            </div>
        </div> 
        <!--SEARCH DETAILS END-->      
          
    <!--SEARCHED POSTS START-->
    	<?php get_template_part('templates/post','layout'.absint($complete['cat_layout_id']).''); ?>
    <!--SEARCHED POSTS END-->
    
     </div><!--layer_wrapper class END-->
<?php get_footer(); ?>