	<?php get_header(); ?>
	
	    <section class="filter_nav">
            	<?php get_search_form( $echo ); ?>
            </section>
            <section id="main">
		
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
		<article class="podcast" style="border-bottom: none;">
                    <aside class="epi_info">
                    	<span class="dark_btn"><h1 class="epi_no tk-adelle">
                        	<?php echo get_post_meta($post->ID,'incr_number',true); ?>
                        </h1></span>
                        <?php if (powerpress_get_podcast_duration($post->ID)) { ?><span class="duration epi-headings tk-adelle"><?php echo powerpress_get_podcast_duration($post->ID); ?></span>
<?php } ?>
			<?php if (powerpress_get_podcast_downloadlink($post->ID)) { ?><a class="download_btn" title="episode <?php echo get_post_meta($post->ID,'incr_number',true); ?>" href="<?php echo powerpress_get_podcast_downloadlink($post->ID); ?>">Download</a><?php } ?>

                	<?php next_post_link('<div class="next">%link</div>'); ?>
			<?php previous_post_link('<div class="prev">%link</div>'); ?> 
			<h2 class="epi-headings tk-adelle"><?php comments_number( '', '1 Comment', '% Comments' ); ?></h2>

                    </aside> <!-- end episode_info -->
                    <section class="epi_main">
                        <h4 class="podcast_cat"><?php the_category(', '); ?></h4>
                        <span class="blue_link" href="<?php the_permalink(); ?>"><h1 class="tk-adelle"><?php the_title(); ?></h1></span>
                        <h5><?php the_time('F j, Y'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if(function_exists('dd_twitter_generate')){dd_twitter_generate('Compact','twitter_username');} ?>
			<?php if(function_exists('dd_fblike_generate')){dd_fblike_generate('Recommend Button Count');} ?>
			<?php if(function_exists('dd_google1_generate')){dd_google1_generate('Compact (20px)');} ?>
			<?php if(function_exists('dd_linkedin_generate')){dd_linkedin_generate('Compact');} ?>
			</h5>
			
                        <div class="left">
			    <?php if (get_field('soundcloud_player')) {
				the_field('soundcloud_player'); 
			    } else {
			    	the_powerpress_content(); 
			    } ?>
                            <?php if (get_field('summary')) { ?><h2 class="epi-headings tk-adelle">Episode Summary</h2><h2 class="summary"><?php the_field('summary'); ?></h2><?php } ?>
			
			    <div class="transcript" style="border-bottom: 1px solid #ddd;"><?php the_content(); ?></div>
			    <h1 class="comments_no tk-adelle" style="border-top: 1px solid #fff;"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></h1>
			    <?php comments_template(); ?>
			</div>
                        <div class="guests sidebar">
			    <?php get_template_part( 'sidebar', 'single' );      // Sidebar for Single podcast (sidebar-single.php) ?>
                        </div>
			
		    </section>
                </article>
		<?php endwhile; endif; ?>
            </section> <!-- end main -->
            <?php get_footer(); ?>