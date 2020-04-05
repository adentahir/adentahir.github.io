<?php
/**
 * The index page of Ele Makeup Lite
 *
 * Displays the home page elements.
 *
 * @package Ele Makeup Lite
 *
 * @since Ele Makeup Lite 1.0
 */
global $complete;
?>
<?php get_header(); ?>
<div class="fixed_site">
  <div class="fixed_wrap fixindex">
	 <?php if ( 'posts' == get_option( 'show_on_front' ) ) { get_template_part('templates/post','layout4'); } else { ?>
	 <?php get_template_part( 'front', 'data' ); } ?>
    <div class="clear"></div>
</div>
</div>
<?php get_footer(); ?>