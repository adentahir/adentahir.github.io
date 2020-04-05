<?php 
/**
 * The 404 Page for Ele Makeup Lite
 *
 * Displays when a certain page is not found section and everything
 *
 * @package Ele Makeup Lite
 * 
 * @since Ele Makeup Lite 1.0
 */
global $complete;?>

<?php get_header(); ?>
<div class="fofo_wrap layer_wrapper">
    	<!--404 Page Title-->
            <div class="page_tt">
                <div class="center">
                    <div class="fourofour">
                        <label><a>404</a></label>
                     </div>
                        <h2 class="postitle"><?php _e('Page Not Found', 'complete'); ?></h2>
                    </div>
                </div> 
		<!--404 Description-->                   
            <div id="content">
                <div class="center">
                    <div class="single_wrap no_sidebar">
                        <div class="single_post">
							<div id="content_wrap" class="error_page">
                                    <div class="post">
                                        <div class="error_msg">
                                            <p>
                                            <label><?php _e('Server cannot find the file you requested. The Page has either been moved or deleted, or you entered the wrong URL or document name. Look at the URL. If a word looks misspelled, then correct it and try it again. If that doesnt work You can try our search option to find what you are looking for.', 'complete'); ?></label>
                                            </p>
                                        <?php get_search_form(); ?>
                                        </div>
                                </div>     
                              </div>
                          </div>
                      </div>
                        </div>
                </div>
</div><!--layer_wrapper class END-->
<?php get_footer(); ?>