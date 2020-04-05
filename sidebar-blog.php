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
<?php $singletype = $complete['single_post_layout_id']; ?>
<?php if( $singletype == 'single_layout2'){ ?>

<div id="sidebar" class="leftside">
  <div class="widgets">
    <?php if ( ! dynamic_sidebar( 'sidebar-blog' ) ) : ?>
    <div class="widget">
      <div class="widget_wrap">
        <h3 class="widget-title">
          <?php _e( 'Category', 'complete' ); ?>
        </h3>
        <span class="widget_border"></span>
        <ul>
          <?php wp_list_categories('title_li=');  ?>
        </ul>
      </div>
    </div>
    <div class="widget">
      <div class="widget_wrap">
        <h3 class="widget-title">
          <?php _e( 'Archives', 'complete' ); ?>
        </h3>
        <span class="widget_border"></span>
        <ul>
          <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
        </ul>
      </div>
    </div>
    <?php endif; // end sidebar widget area ?>
  </div>
</div>
<?php } else {?>
<div id="sidebar">
  <div class="widgets">
    <?php if ( ! dynamic_sidebar( 'sidebar-blog' ) ) : ?>
    <div class="widget">
      <div class="widget_wrap">
        <h3 class="widget-title">
          <?php _e( 'Category', 'complete' ); ?>
        </h3>
        <span class="widget_border"></span>
        <ul>
          <?php wp_list_categories('title_li=');  ?>
        </ul>
      </div>
    </div>
    <div class="widget">
      <div class="widget_wrap">
        <h3 class="widget-title">
          <?php _e( 'Archives', 'complete' ); ?>
        </h3>
        <span class="widget_border"></span>
        <ul>
          <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
        </ul>
      </div>
    </div>
    <?php endif; // end sidebar widget area ?>
  </div>
</div>
<?php } ?>
