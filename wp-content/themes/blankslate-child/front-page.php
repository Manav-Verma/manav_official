<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="banner-section">
	<div class="container">
		<div class="banner-inner">
			<div class="video">
				<img src="<?php echo (get_field("banner-section-image")['url'])?>">
				<img class="play-button" src="<?php echo (get_field("video-play-button-image")['url'])?>">
			</div>
		</div>
	</div>
</div>

<div class="countdown-section">
	<div class="container">
		<div class="countdown-inner">
			<div id="clock"></div>
		</div>
	</div>
</div>
<div class="drone-wrapper">
	<div class="container">
		<div class="drone-content">
			<div class="drone-image">
				<img src="<?php echo get_field("drone_image")["url"];?>">
				
			</div>
			<div class="learn-more">
				<a href="#"><?php echo get_field("learn-how-to-win");?></a>
			</div>
		</div>
	</div>
</div>
<div class="available-brands">
	<div class="container">
		<h1><?php echo get_field("available-in-title");?></h1>

		<div class="brands-name">
			 
			<ul>
				<?php

				if( have_rows('brands') ):
				    while ( have_rows('brands') ) : the_row();
				        // display a sub field value
				         $image_brand = get_sub_field('brand-image_1');
				        
				?>  
				     
			    <li>
			       	<img src="<?php echo $image_brand['url']; ?>" alt="<?php echo $image_brand['alt'] ?>" />
			    </li>

			    <?php endwhile;

				else :

				    // no rows found

				endif;
				?>
			</ul>
		</div>
		<div class="drone-type">
			<ul>
				<?php

					if( have_rows('drones') ):
						while ( have_rows('drones') ) : the_row();
				        // display a sub field value
				         $image_drone = get_sub_field('drone_image-1');
				        
				?>  
				     
				     <li>
				       	<img src="<?php echo $image_drone['url']; ?>" alt="<?php echo $image_drone['alt'] ?>" />
				     </li>

				<?php endwhile;

				else :

				    // no rows found

				endif;
				?>
			</ul>
		</div>
	</div>
</div>
<div class="flag-wrapper">
	<div class="container">
		<div class="flag-inner">
			<div class="row">
				<div class="col-sm-6">
					<div class="flag-image">
						<img src="<?php print_r(get_field("flag-image")['url']);?>" alt="image is not uploding">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="propel-image">
						<div class="image">
						<img src="<?php print_r(get_field("flag-image")['url']);?>" alt="image is not uploding">
						</div>
						<div class="content">
							
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="testimonial">
	<div class="container">
		<div class="row">
			<div class="testimonial-inner">

			  <?php

					if( have_rows('testimonial') ):
						while ( have_rows('testimonial') ) : the_row(); 
                                
                                $quotes_content = get_sub_field('quotes-content');
                                $author_name = get_sub_field('author-name');
                                $author_designation = get_sub_field('author-designation');
					    ?>
								<div class="col-sm-4">
									<div class="item">

										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotes.png" alt="image is not uploading">
										<h4><?php echo $quotes_content;?></h4>
										<h3><?php echo $author_name;?><br><span class="designation"><?php echo $author_designation;?></span></h3>


									</div>

								</div>
					<?php endwhile;
					       endif; ?>

				 
				 
			</div>
		</div>
	</div>
</div>
<div class="subscribe-newsletter">
	<div class="container">
		<div class="row">
			<div class="newsletter-inner">
				<div class="col-sm-6">
					<div class="form">
						 <h1><?php echo get_field("newsltter-form-heading");?></h1>
						 <?php 
							 $cfsignupname='[contact-form-7 id="71" title="Contact form 1"]';
							 echo do_shortcode($cfsignupname);	
						 ?>
						
					</div>
				</div>
				<div class="col-sm-6">
					<div class="image-section">
						<img src="<?php echo get_field("newsletter-right-image")['url'];?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>