	<?php get_header(); ?>
	
	    <section id="banner">
            	<div class="desc_text">
	            <h1 class="banner_h1 tk-adelle">A Podcast about Digital Technology</h1>
    	            <h2 class="banner_h2">The Digital Life is an online radio show that explores important, timely topics in the world of digital design and technology. Created by Involution Studios, a top software design agency whose clients include Apple, Microsoft and Oracle.</h2>
                    <a href="<?php bloginfo('rss2_url'); ?>" class="button subscribe_btn"><img src="<?php bloginfo('template_directory'); ?>/images/subscribe_btn.png" style="vertical-align: middle;"/> &nbsp;&nbsp;Subscribe Now</a>

        	</div> <!-- end desc_text -->
		<div id="tweet_collage" class="right">
		    <img src="<?php bloginfo('template_directory'); ?>/images/tower.png" /> 
			<!--<?php 
			$handleArray = array('abofc','goinvo','tdlpodcast','eadahl');
			$index = 3;
			for ($index=0; $index<4; $index++) { 			 
				$img =  getUserStatus($handleArray[$index]);
				echo '<a target="_blank" href="http://twitter.com/' . $handleArray[$index] . '" >';
				echo '<img class="guest_pic" src="'.$img.'"/>';
				echo '</a>';
			} ?>-->
		</div>
            </section> <!-- end banner -->
            
            <section class="filter_nav" style="border-top: none; padding-bottom: 0;">
            	<!-- Code for Pagination -->
		<?php
			global $wp_query;  
			$total_pages = $wp_query->max_num_pages;    
			if ($total_pages > 1){  
			   $current_page = max(1, get_query_var('paged'));  
  			   echo '<div class="page_nav">';  
  			   echo paginate_links(array(  
      				'base' => get_pagenum_link(1) . '%_%',  
      				'format' => '/page/%#%',  
      				'current' => $current_page,  
      				'total' => $total_pages,  
      				'prev_text' => 'Prev',  
      				'next_text' => 'Next'  
    			));  
  			   echo '</div>';  
			}  
		?>

		<?php get_search_form( $echo ); ?>
            </section> <!-- end filter_nav -->
            <section id="main">
	    <?php if (is_category()) { ?>
		<h4 class="page_title"><?php single_cat_title(); ?><span class="tk-adelle page_label right"><?php $thisCat = get_category(get_query_var('cat'));
	        	echo $thisCat->count; ?> podcasts</span></h4>
	    <?php } elseif (is_tag()) { ?>
		<h4 class="page_title"><?php echo $tag_name = single_tag_title(); ?><span class="tk-adelle page_label right"><?php ?> tags</span></h4>
	    <?php } ?>
	    <?php $post_no = 0; if (have_posts()) : while (have_posts()) : the_post(); $post_no++; ?>
				
		<article class="podcast">
                    <aside class="epi_info">
                    	<a class="dark_btn" href="<?php the_permalink(); ?>"><h1 class="epi_no tk-adelle">
                        	<?php echo get_post_meta($post->ID,'incr_number',true); ?>
                        </h1></a>
			<span class="duration epi-headings tk-adelle"><?php echo powerpress_get_podcast_duration($post->ID) ?></span>
			<?php if (powerpress_get_podcast_downloadlink($post->ID)) { ?><a class="download_btn" title="episode <?php echo get_post_meta($post->ID,'incr_number',true); ?>" href="<?php echo powerpress_get_podcast_downloadlink($post->ID); ?>">Download</a><?php } ?>
			<h2 class="epi-headings tk-adelle"><?php comments_number( '', '1 Comment', '% Comments' ); ?></h2>
                    </aside> <!-- end episode_info -->
                    <section class="epi_main">
                        <h4 class="podcast_cat"><?php the_category(', '); ?></h4>
                        <a class="blue_link" href="<?php the_permalink(); ?>"><h1 class="tk-adelle"><?php the_title(); ?></h1></a>
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
			    
			    <?php if (($post_no == 1) && ($current_page == 1)){ ?>
                            	<?php if (get_field('summary')) { ?><h2 class="epi-headings tk-adelle">Episode Summary</h2><h2 class="summary"><?php the_field('summary'); ?></h2><?php } ?>
			    	<div class="transcript" style="border-bottom: 1px solid #ddd;">
				<?php the_content(); ?></div>
				<?php $withcomments = 1; ?>
				<h1 class="comments_no tk-adelle" style="border-top: 1px solid #fff;"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></h1>
				<?php comments_template(); ?>

			    <?php } else { ?>
				<?php if (get_field('summary')) { ?><h2 class="epi-headings tk-adelle">Episode Summary</h2><h2><?php the_field('summary'); ?></h2><?php } ?>
			    <?php } ?>
			</div> <!-- end left -->
	    
                        <div class="guests">
			<?php if (($post_no == 1) && ($current_page == 1)){ 
			    get_template_part( 'sidebar', 'single' ); 
			} 
			else {
			    get_template_part( 'sidebar', 'posts');
			} ?> 
                        </div> <!-- end guests -->
		    </section> <!-- end epi_main -->
                </article> <!-- end podcast -->
		<?php endwhile; endif; ?>
            </section> <!-- end main -->  
	    <section class="filter_nav">
            	<!-- Code for Pagination -->
		<?php
			global $wp_query;  
			$total_pages = $wp_query->max_num_pages;    
			if ($total_pages > 1){  
			   $current_page = max(1, get_query_var('paged'));  
  			   echo '<div class="page_nav">';  
  			   echo paginate_links(array(  
      				'base' => get_pagenum_link(1) . '%_%',  
      				'format' => '/page/%#%',  
      				'current' => $current_page,  
      				'total' => $total_pages,  
      				'prev_text' => 'Prev',  
      				'next_text' => 'Next'  
    			));  
  			   echo '</div>';  
			}  
		?>

		<?php get_search_form( $echo ); ?>
            </section> <!-- end filter_nav -->
            <?php get_footer(); ?>