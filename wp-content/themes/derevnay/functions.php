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

//новый пункт в админке, телефон
/*add_action('admin', 'kad_add_phone');

function kad_add_phone(){
	add_settings_field(
		'phone',
		'Телефон',
		'display_phone',
		'general'
	);
	register_setting(
		'general',
		'my_phone'
	);
}
function display_phone(){
	echo "<input type='text' class='regular-text' name='my_phone[cyti1]' value='".esc_attr(get_option('my_phone[cyti1]'))."'>";
	echo "<input type='text' class='regular-text' name='my_phone[phone1]' value='".esc_attr(get_option('my_phone[phonei1]'))."'>";
}*/
function my_more_options(){
	add_settings_field(
		'phone',//id
		'Телефон',//название поле
		'display_phone',//callback
		'general');//'general'-где выводить. Cоздаем поле опции
	register_setting(
		'general',//название группу к какой будет принадлежать опция
		'my_phone');//'my_phone' - название опции, которая будет сохраняться в БД. Регистрирует новую опцию и callback функции (функцию обратного вызова) для обработки значения опции при её сохранении в БД
}
add_action('admin_init', 'my_more_options');//привязать к хуку
function display_phone(){
	echo "<input type='text' class='regular-text' name='my_phone' value='".esc_attr(get_option('my_phone'))."'>";
}