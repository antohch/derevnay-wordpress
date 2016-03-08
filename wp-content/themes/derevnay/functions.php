<?php
//подключаем стили и скрипты
add_action('wp_enqueue_scripts', 'kad_styles_scripts');
add_action('wp_footer', 'kad_scripts_footer');

function kad_styles_scripts(){
	wp_enqueue_script('modernizr', get_template_directory_uri(). '/js/modernizr.js');

	wp_enqueue_style('style', get_template_directory_uri(). '/style.css');
	wp_enqueue_style('style-flexslider', get_template_directory_uri(). '/flexslider.css');
}

function kad_scripts_footer(){
	wp_register_script('jquery.min.google', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_register_script('jsslaider2', get_template_directory_uri(). '/js/jsslaider2.js', array('jquery.min.google'));
	wp_register_script('flexslider', get_template_directory_uri(). '/js/jquery.flexslider.js', array('jsslaider2'));
	wp_register_script('shCore', get_template_directory_uri(). '/js/shCore.js', array('flexslider'));
	wp_register_script('jsslaider', get_template_directory_uri(). '/js/jsslaider.js', array('shCore'));
	wp_register_script('shBrushXml', get_template_directory_uri(). '/js/shBrushXml.js', array('jsslaider'));
	wp_register_script('shBrushJScript', get_template_directory_uri(). '/js/shBrushJScript.js', array('shBrushXml'));
	wp_register_script('jquery.easing', get_template_directory_uri(). '/js/jquery.easing.js', array('shBrushJScript'));
	wp_register_script('jquery.mousewheel', get_template_directory_uri(). '/js/jquery.mousewheel.js', array('jquery.easing'));
	wp_register_script('demo', get_template_directory_uri(). '/js/demo.js', array('jquery.mousewheel'));
	wp_register_script('jquery-ui-1.9.2.custom', get_template_directory_uri(). '/js/jquery-ui-1.9.2.custom.js', array('demo'));

	wp_enqueue_script('jquery-ui-1.9.2.custom');
}

//меню
register_nav_menu('menu', 'Верхнее меню');