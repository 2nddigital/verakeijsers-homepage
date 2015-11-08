<!-- add a class to the html tag if the site is being viewed in IE, to allow for any big fixes -->
<!--[if lt IE 8]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if gt IE 9]><html><![endif]-->
<!--[if !IE]><html><![endif]-->
<head>
    <?php wp_head();?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?php bloginfo('name'); ?></title>
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" media="all" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    <script src="<?php bloginfo('template_directory') ?>/js/responsive-nav.js"></script>
        
    </head>
<body <?php body_class( $class ); ?>> 
    <header role="banner">
        <a href="<?php get_option('home'); ?>" class="logo" data-scroll><?php bloginfo('name'); ?></a>
       
       <!-- <nav class="nav-collapse">
        <ul>
          <li class="menu-item active"><a href="index.html" data-scroll>Home</a></li>
          <li class="menu-item"><a href="#about" data-scroll>Biografie</a></li>
          <li class="menu-item"><a href="media.html" data-scroll>Galerij</a></li>
          <li class="menu-item"><a href="#blog" data-scroll>Ervaring</a></li>
            <li class="menu-item"><a href="#blog" data-scroll>Contact</a></li>
        </ul>
      </nav> -->
        
       <?php 
    $args = array(
	'theme_location'  => 'header-menu',
	'container'       => 'nav',
	'container_class' => 'nav-collapse',
	'menu_class'      => 'headermenu',
	       
    
);
    wp_nav_menu( $args  ); ?> 
        
    </header><!-- header -->
 
    
    <!-- .main -->
    
        
        
         