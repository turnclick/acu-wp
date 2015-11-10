<?php
/**
 * Hero Section
 * 
 * The template for displaying the hero section on pages and home page
 * Uses Advanced Custom Fields Plugin
 * 
 * @link http://www.advancedcustomfields.com/
 *
 * @package onlysky_wp_framework
 */
?>

<?php if( get_field('hero_show') ):?>
		
	<!-- Hero Section -->
	<section class="page-hero <?php if(get_field('hero_image')):?> <?php the_field('hero_image_align');?> image-hero <?php endif;?>" style="<?php if(get_field('hero_image')):?> background-image:url( <?php the_field('hero_image');?> ); <?php endif;?>">
		<div class="hero-wrapper">
			<div class="hero-inner container">
				
				<!-- Hero Headlines -->
				<div class="hero-headlines section-lg">
					<h1 class="hero-headline"><?php the_field('hero_headline');?></h1>
					<h2 class="hero-subhead"><?php the_field('hero_subhead');?></h2>
				</div>
				
				<!-- Hero CTA Buttons -->
				<?php if( have_rows('hero_cta') ): ?>
						<div class="hero-cta section-sml">
					    <ul>
						    <?php while( have_rows('hero_cta') ): the_row(); ?>
						        <li><a href="<?php the_sub_field('hero_cta_button_link'); ?>"><?php the_sub_field('hero_cta_button_text'); ?></a></li>
						    <?php endwhile; ?>
					    </ul>
				    </div>
				<?php endif; ?>

			</div> <!-- END .hero-inner -->	
		</div>
	</section> <!-- END section.page-hero -->

<?php endif;?>