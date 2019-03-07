<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
		      <section class="xop-container">
                  <div class="xop-left">
                     <p>Superior Craftsmanship for Superior Homes</p>
                     <h2>World class materials</h2>
                     <span>that embody the true meaning of quality.</span>
                     <a class="xop-button">Book an appointment</a>
                  </div>
                  <div class="xop-right">
                      <div class="sponsor-class">   
                          <?php foreach(range(1,12) as $count): ?>
                          <?php if(get_field('sponsor_logo_' . $count)): ?>
                              <div><img src="<?php the_field('sponsor_logo_' . $count)?>"/>
                              </div>
                          <?php endif;?>
                          <?php endforeach; ?>
                      </div> 
                  </div>   
                 
          </section>

		

     <?php endwhile; ?>
     <?php endif ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); 
