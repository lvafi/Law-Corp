<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package law-corp
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
				
        <section class="header-about">
					<h1>About Us</h1>
					<h4>HOME / ABOUT US</h4>
				</section>
				
				<h2 style="color:#568f60; font-family:akkurat">Mission</h2>
				<div class="mission"><p>We deliver true value to clients through a rich selection of high quality materials, outstanding craftsmanship, and efficient installation.</p></div>

				<h2 style="font-family: akkurat; float: left; color: #568f60; padding-left: 300px;">Our Values</h2>
				
				<section class='accordion'>
					 <h3><?php the_field('deliver_quality') ?></h3>
					 <div>
						 <p><?php the_field('content_for_deliver_quality') ?></p>
					 </div>
					 <h3><?php the_field('pursue_growth') ?></h3>
					 <div>
						 <p><?php the_field('content_for_pursue_growth') ?></p>
					 </div>
					 <h3><?php the_field('explore_innovation') ?></h3>
					 <div>
						 <p><?php the_field('content_for_explore_innovation') ?></p>
					 </div>
					 <h3><?php the_field('support_teamwork') ?></h3>
					 <div>
						 <p><?php the_field('content_for_support_teamwork') ?></p>
					 </div>
					 <h3><?php the_field('inspire_creativity') ?></h3>
					 <div>
						 <p><?php the_field('content_for_inspire_creativity') ?></p>
					 </div>
				</section>

			  
					<h2 style="font-family: akkurat; color: #568f60">our process</h2>
					<div><p>We offer clients a full range of high quality quartz surfaces, Ultra Compact Surface, granite, marble and porcelain. To discuss your vision for your project, we also offer material selection consultation and final layout.</p></div>
					 
					<section class='accordion'>
						 <h3><?php the_field('consultation') ?></h3>
						 <div>
							 <p><?php the_field('concept_for_consultation')?></p>
						 </div>
						 <h3><?php the_field('digital_template') ?></h3>
						 <div>
							 <p><?php the_field('concept_for_digital_template')?></p>
						 </div>
						 <h3><?php the_field('installation') ?></h3>
						 <div>
							 <p><?php the_field('concept_for_installation')?></p>
             </div>
				    </section>
				
				<section class="expert">
                    <h1 style="color: #568f60">EXPERT CONSULTATIONS</h1>
                    <p style="color:#727272; margin-top: -20px;">not sure what you want? Book your free consultation today</p>
                    <h2 style="font-weight:500">604.770.2854</h2>
        </section>    
		<?php endwhile; ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();