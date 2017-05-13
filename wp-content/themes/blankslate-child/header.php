<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 
<div class="header">
	<div class="container">
		<div class="header-inner">
			<div class="header-logo">
				<img src="http://localhost/propel/wp-content/uploads/2017/05/logo.png" alt="image is not uploading">
			</div>
			<div class="header-nav">
			 <!-- <li>
						<span class="fb-logo"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
						<span class="insta-logo"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
					</li> -->
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                <ul class="header-socials">
                	<li>
						<span class="fb-logo"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
						<span class="insta-logo"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
					</li>
                </ul>
			</div>
		</div>
	</div>
</div>