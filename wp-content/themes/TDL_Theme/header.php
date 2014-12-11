<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<html <?php language_attributes(); ?>>

<html lang="en-US">
    <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
    	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css" media="screen" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<!-- Typekit fonts -->
	<script type="text/javascript" src="//use.typekit.net/mzy2sgy.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script> -->
	<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />-->
  	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
	<script>
  	    $(function() {
    		$( "#tabs" ).tabs();
  	    });
  	</script>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>
	
	<!--<?php wp_enqueue_script( 'jquery-ui-tabs' ); ?>-->
	<?php wp_head(); ?>
        
    </head>
	<body>
    	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    	<section id="wrapper">
            <header>
                <a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" /></a>
                <nav>
                    <ul>
                        <li>
                        	<a class="archive" href="<?php bloginfo('url'); ?>/archives">
                            	<h3>Archive</h3>
                            </a>    
                        </li>
                        <li>
                        	<a class="contact" href="<?php bloginfo('url'); ?>/contact">
                            	<h3>Contact</h3>
                        	</a>    
                        </li>	   
                        <li>
                        	<a class="about" href="<?php bloginfo('url'); ?>/about">
                            	<h3>About</h3>
                        	</a>
                        </li>
                        <li>
                        	<a class="subscribe" target="_blank" href="https://itunes.apple.com/us/podcast/the-digital-life/id392069970#ls=1">
                            	<h3>Subscribe</h3>
                            </a>
                        </li>
                        <li>
                        	<a class="rss" target="_blank" href="<?php bloginfo('rss2_url'); ?>">
	                            <h3>RSS</h3>
    						</a>
                        </li>
                        <li>
                        	<a class="follow" target="_blank" href="https://twitter.com/tdlpodcast">
                            	<h3>Follow</h3>
                        	</a>
                        </li>
                    </ul>
                </nav>                              
            </header>