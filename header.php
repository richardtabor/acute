<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title><?php if ( defined('WPSEO_VERSION') ) { wp_title(''); } else { if(is_home() OR is_404() OR is_search() ) { echo bloginfo("name"); echo " | "; echo bloginfo("description"); } else { echo bloginfo("name"); echo " | "; echo get_the_title();  } } ?></title>

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> 
	
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<?php $options = get_option('bean_theme'); bean_analytics(true); ?>
	
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>

<?php if (is_404()) { } else { //HIDE HEADER FOR 404 PAGE ?>
					
 	<header>
 		<nav id="mobile-nav">
 		
 		<?php if ( function_exists('wp_nav_menu') ) {
 			wp_nav_menu( array(
 				'theme_location' => 'main-menu'
 			));
 		} ?>
 		 		
		</nav><!-- END #mobile-nav --> 	
	</header>
	
	<?php do_action('bean_announcement'); // CODE PULLED FROM THEME-FUNTIONS.PHP ?>
  
	<?php do_action('bean_sliding_panel'); // CODE PULLED FROM THEME-FUNTIONS.PHP ?>	
		
	<div id="header" class="row animated BeanFadeIn">	
	  	
	  	<div class="six columns">	
	  	
		  	<div id="logo">
		  	
		  		<?php do_action( 'bean_header_logo' ); ?>
		  	
		  	</div><!-- END #logo -->
	  	
	  	</div><!-- END .six columns -->
	  	
	  	<div class="six columns right">	
	  	
	  		<?php if ( !dynamic_sidebar( 'Header' ) ): endif; ?>
	  	
	  	</div><!-- END .six columns -->
	  	
	  	<div class="twelve columns hide-for-small">
	  	
		  	<?php if ( bean_theme_supports( 'primary', 'menu') ){ ?>

  				<nav id="navigation" role="navigation">
  						
  					<div class="container">
  							
  						<div id="primary-nav" class="main_menu">
  								
  							<?php
  								$args = array(
  								    'container' 	=> '',
  								    'menu_id' => 'primary-menu',
  								    'menu_class' => 'sf-menu main-menu',
  									'theme_location' => 'main-menu',
  									'after' => '<span class="nav-sep">/</span>',
  								);
  										
  								wp_nav_menu( apply_filters( 'radium_main_menu_args', $args ) );
  							 ?>
  								 
  						</div><!-- END #primary-nav .main_menu -->
  								
  					</div><!-- END .container -->
  					
  				</nav><!-- END #navigation -->
  			
		  	<?php } // END bean_theme_supports( 'primary', 'menu') ?>
		  	
		  </div><!-- END .twelve columns hide-for-small -->
		  	
 	</div><!-- END #header row -->

 	<header id="page-header" class="clear animated BeanFadeIn">
 		  		 
 		 <div class="row">
 		 
 		 	<div class="twelve columns">
 		 
				<div id="header-title" class="">
					
					<?php get_template_part( 'lib/content/content', 'header' ); ?>
				
				</div><!-- END #header-title -->
				
 	      	</div><!-- END .twelve columns -->
 	      	 	    
 	    </div><!-- END .row-->
 	
 	</header><!-- END #page-header -->
 
 <?php } ?>	
  	
<section id="main-container" class="clear animated BeanFadeIn">