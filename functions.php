<?php
    function wpb_theme_setup(){
    	require_once('wp-bootstrap-navwalker.php');
        //Navigation menus
        register_nav_menus(array(
            'primary'=>__('Primary Menu')
        ));

        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
        add_theme_support( 'html5', array( 'search-form' ) );
       
    }
    add_action('after_setup_theme','wpb_theme_setup');

    //excerpt length
    function set_excerpt_length(){
    	return 50;
    }
    add_filter('excerpt_length','set_excerpt_length');
    function wpb_init_widgets($id){
    	register_sidebar(array(
    		'name'=>'KeCampus Sidebar',
    		'id'=>'sidebar',
    		'before_widget'=>'<div class="sidebar-module">',
    		'after_widget'=>'</div>',
    		'before_title'=>'<h3>',
    		'after_title'=> '</h3>'
    	));
    }
    add_action('widgets_init','wpb_init_widgets');