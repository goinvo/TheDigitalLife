<?php
/**
 * Inside Page Template
 *
 * @package WordPress
 * @subpackage TDL_Theme
 * Author: Reshma Mehta
 * This template is being used to display page content
 */
 ?>
	<?php get_header(); ?>
            <section id="main" style="border-top: 1px solid #fff;">

	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
		<article class="page">
                    <section class="epi_main">
		    	<h1 class="tk-adelle blue"><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>     
		    </section>
                </article>
		<?php endwhile; endif; ?>
            </section> <!-- end main -->
            <?php get_footer(); ?>