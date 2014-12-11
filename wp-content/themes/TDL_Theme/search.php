	<?php get_header(); ?>

	
	
            <section class="filter_nav">
		<!--<?php
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
		?> -->

		<?php get_search_form(); ?>
            </section>
            <section id="main">
		<h4 class="page_title"><span class="tk-adelle page_label">Search Results for:</span>&nbsp;&nbsp;<?php the_search_query(); ?></h4>
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="podcast">
                    
                    <section class="epi_main">
                        <h4 class="podcast_cat"><?php the_category(', '); ?></h4>
                        <a class="blue_link" href="<?php the_permalink(); ?>"><h1 class="tk-adelle"><?php search_title_highlight(); ?></h1></a>
                        <h5><?php the_time('F j, Y'); ?></h5>
			<p><?php search_excerpt_highlight(); ?></p>
                        
		    </section>
                </article>
		<?php endwhile; else: ?>
		    <article class="page" style="border-top: 1px solid #fff;">
			<h2>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</h2>
		    </article>
		<?php endif; ?>
            </section> <!-- end main -->  
            <?php get_footer(); ?>