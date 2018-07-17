<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

	</head>

	<body <?php body_class(); ?>>
    
        <nav role="navigation" id="mobile-menu-wrap">
        	
            <a href="<?php echo home_url(); ?>"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/library/images/webdrafter.com-logo.png" alt=""/></a>
        	
            <p id="phone-link"><a href="tel:7175897812">Call Today!<br> (717)589-7812</a></p>
            
        	<div class="menu-toggle-button"><a id="menu-toggle" class="anchor-link icon-bars">Menu</a></div>
            
			<?php webdraftertheme_mobile_nav(); ?>
            
        </nav>    

    <div id="container">
    
        <div id="background-main">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<div class="eightcol first">
                        <a href="<?php echo home_url(); ?>">
                            <img id="logo" src="<?php echo get_template_directory_uri(); ?>/library/images/webdrafter.com-logo.png" alt=""/>
                        </a>
                    </div>
                    <div class="fourcol contact-header last">
                    	<?php dynamic_sidebar( 'social_media_sidebar' ); ?>
                    	<p>Ph: (555)555-5555<br>
						Open Mon - Sat: 9AM - 9PM</p>
                    </div>

                </div>
                
                <div id="background-navigation">
                
                    <div class="wrap clearfix">
        
                        <nav role="navigation">
                            <?php webdraftertheme_main_nav(); ?>
						</nav>
        
                    </div>
                    
                </div>

			</header>
