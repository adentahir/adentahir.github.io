<?php 
/**
 * The Sidebar for Ele Makeup Lite
 *
 * Stores the sidebar area of the template. loaded in other template files with get_sidebar();
 *
 * @package Ele Makeup Lite
 * 
 * @since Ele Makeup Lite 1.0
 */
global $complete;?>

<?php if ( class_exists( 'WooCommerce' ) & is_realy_woocommerce_page() ) { ?>
<div id="sidebar">
  <div class="widgets">
    <?php if ( ! dynamic_sidebar( 'sidebar-woo' ) ) : ?>
	<div class="widget">
      <div class="widget_wrap">
        <h3 class="widget-title">
          <?php _e( 'Product Categories', 'complete' ); ?>
        </h3>
        <span class="widget_border"></span>
        <ul>
          <?php
          	$args = array(
            'taxonomy' => 'product_cat',
            'title_li' => '',
            'exclude' => '',
            'hide_empty' => '1',
            'show_count' => '0'
            );
			wp_list_categories( $args );
		  ?>
        </ul>
      </div>
    </div>     
    <?php endif; // end sidebar widget area ?>
  </div>
</div>
<?php }else{ ?> 
  <div id="sidebar">
  <div class="widgets">
    <?php if ( ! dynamic_sidebar( 'sidebar-page' ) ) : ?>
    <div class="widget">
      <div class="widget_wrap">
        <h3 class="widget-title">
          <?php _e( 'Pages', 'complete' ); ?>
        </h3>
        <span class="widget_border"></span>
        <ul>
          <?php wp_list_pages( array( 'title_li' => '' ) ); ?>
        </ul>
      </div>
    </div>
    <?php endif; // end sidebar widget area ?>
  </div>
</div>
<?php }