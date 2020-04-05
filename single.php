<?php global $complete;?>
<?php get_header(); ?>
<div class="post_wrap layer_wrapper">
    <!--CUSTOM PAGE HEADER STARTS-->
    <?php get_template_part('sktframe/core','pageheader'); ?>
    <!--CUSTOM PAGE HEADER ENDS-->
    <?php $singletype = $complete['single_post_layout_id']; ?>
	<?php if( $singletype == 'single_layout1'){include('templates/rightsidebar_single_template.php');} ?>
    <?php if( $singletype == 'single_layout2'){include('templates/leftsidebar_single_template.php');} ?>
    <?php if( $singletype == 'single_layout3'){include('templates/fullwidth_single_template.php');} ?>
    <?php if( $singletype == 'single_layout4'){include('templates/nosidebar_single_template.php');}?>
    <!--#content END-->
</div><!--layer_wrapper class END-->
<?php get_footer(); ?>