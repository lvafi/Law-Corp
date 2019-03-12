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
                 <section class="divide-about">  
                     <div class="featured-image-home">
                         <?php echo get_the_post_thumbnail(); ?>
                    </div>
                     <div class="right-about">
                         <h1><?php the_field('about_us'); ?></h1>
                         <p><?php the_field('content'); ?></p>
                         <a href:#>learn more</a>
                        

                     </div>
                </section>
                <div class="text-finest-selection"> <h2>only the finest selection</h2></div>

                <section class="finest-selection-container">
                    <div class="two-first-bleck"> 
                        <div class="dekton">
                            <img src="<?php the_field('dekton-image')?>"/>
                            <h2><?php the_field('dekton_title')?></h2>
                            <p><?php the_field('dekton-content')?><a href:# > EXPLORE</a></p>
                        </div>
                        
                        <div class="silestone">
                            <img src="<?php the_field('silestone-image')?>"/>
                            <h2><?php the_field('silestone_title')?></h2>
                            <p><?php the_field('silestone-content')?><a href:# > EXPLORE </a></p>
                        </div>
                    </div>

                    <div class="two-second-block"> 
                        <div class="cambria">
                            <img src="<?php the_field('cambria-image')?>"/>
                            <h2><?php the_field('cambria_title')?></h2>
                            <p><?php the_field('cambria content')?><a href:# > EXPLORE </a></p>
                            
                        </div>
                        <div class="sensa">
                            <img src="<?php the_field('sensa-image')?>"/>
                            <h2><?php the_field('sensa_title')?></h2>
                            <p><?php the_field('sensa content')?><a href:# > EXPLORE </a></p>
                            
                        </div>
                    </div>   
                </section>
                <section class="expert">
                    <h1 style="color: #568f60">EXPERT CONSULTATIONS</h1>
                    <p style="color:#727272; margin-top: -20px;">not sure what you want? Book your free consultation today</p>
                    <h2 style="font-weight:500">604.770.2854</h2>
                </section>    
              

		

     <?php endwhile; ?>
     <?php endif ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); 
