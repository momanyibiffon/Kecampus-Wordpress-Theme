<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1.0">
	<meta name="author"content="Biffon Momanyi">
	<meta name="description"content="<?php bloginfo('description');?>">
	<title>
		<?php bloginfo('name');?> | 
		<?php is_front_page() ? bloginfo('description') : wp_title();?>
	</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>\assets\vendor\bootstrap\dist\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
	<?php wp_head();?>
</head>
<body>
	<div class="container">
		<?php the_custom_logo();?>
		<span class="pull-right"><?php get_search_form();?></span>
	</div>
<div class="navbar btn-block"id="myHeader">
	<div class="navbar-header">
		<a href="#" class="navbar-brand hidden-sm hidden-lg hidden-md">KeCampus</a>
		<button class="navbar-toggle"data-toggle="collapse"data-target="#myNavbar">
            <span class="icon-bar bg-danger"></span>
            <span class="icon-bar bg-danger"></span>
            <span class="icon-bar bg-danger"></span>
		</button>
	</div>
    <nav>
        <div class="collapse navbar-collapse"id="myNavbar">
        	<div class="container">	
              <?php
		            wp_nav_menu( array(
					    'theme_location'    => 'primary',
					    'depth'             => 2,
					    'container'         => 'div',
					    'container_class'   => '',
					    'container_id'      => 'bs-example-navbar-collapse-1',
					    'menu_class'        => 'nav navbar-nav',
					    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					    'walker'            => new WP_Bootstrap_Navwalker())
				    );
				?>
	        </div>    
	    </div>
    </nav>	
</div>
<!--container wrapper class-->
<div class="container well">