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
///
//меню
register_nav_menu('menu', 'Верхнее меню');
///
//новый пункт в админке, телефон
add_action( 'admin_init', 'wfm_theme_options' );

function wfm_theme_options(){
	register_setting( 'general', 'wfm_theme_options' );

	// $id - ID секции
	// $title - заголовок
	// $callback - callback-функция для генерации HTML-кода
	// $page - для какой страницы регистрируется секция
	add_settings_section( 'wfm_theme_section_id', 'Телефон и адрес', 'wfm_theme_options_section_cb', 'general' );

	add_settings_field( 'code1', 'код 1', 'code1', 'general', 'wfm_theme_section_id' );
	add_settings_field( 'kad_phone1', 'номер 1', 'kad_phone1', 'general', 'wfm_theme_section_id' );
	add_settings_field( 'kad_code2', 'код 2', 'code2', 'general', 'wfm_theme_section_id' );
	add_settings_field( 'kad_phone2', 'номер 2', 'kad_phone2', 'general', 'wfm_theme_section_id' );
	add_settings_field( 'kad_adress', 'Адрес', 'kad_adress', 'general', 'wfm_theme_section_id' );
	add_settings_field( 'kad_link_adress', 'Ссылка в адресе', 'kad_link_adress', 'general', 'wfm_theme_section_id' );
}


function wfm_theme_options_section_cb(){
	echo '<p></p>';
}

function kad_adress(){
	$options = get_option('wfm_theme_options');
	?>

<input type="text" name="wfm_theme_options[kad_adress]" id="kad_adress" value="<?php echo esc_attr($options['kad_adress']); ?>" class="regular-text">

	<?php
}

function code1(){
	$options = get_option('wfm_theme_options');
	?>

<input type="text" name="wfm_theme_options[code1]" id="code1" value="<?php echo esc_attr($options['code1']); ?>" class="regular-text">

	<?php
}

function kad_phone1(){
	$options = get_option('wfm_theme_options');
	?>

<input type="text" name="wfm_theme_options[kad_phone1]" id="kad_phone1" value="<?php echo esc_attr($options['kad_phone1']); ?>" class="regular-text">

	<?php
}

function code2(){
	$options = get_option('wfm_theme_options');
	?>

<input type="text" name="wfm_theme_options[code2]" id="code2" value="<?php echo esc_attr($options['code2']); ?>" class="regular-text">
	<?php
}

function kad_phone2(){
	$options = get_option('wfm_theme_options');
	?>

<input type="text" name="wfm_theme_options[kad_phone2]" id="kad_phone2" value="<?php echo esc_attr($options['kad_phone2']); ?>" class="regular-text">

	<?php
}

function kad_link_adress(){
	$options = get_option('wfm_theme_options');
	?>

<input type="text" name="wfm_theme_options[kad_link_adress]" id="kad_link_adress" value="<?php echo esc_attr($options['kad_link_adress']); ?>" class="regular-text">

	<?php
}
///
//регистрация сайдбара соц. сетей
register_sidebar(array(
	'name'          => 'Иконки соц. сетей',
	'id'            => 'kad_soc',
	'description'   => 'Сайд бар для размещения иконок с соц. сетемя',
	'before_widget' => '',
	'after_widget'  => '',
));
///

//поддержка миниатюр
add_theme_support('post-thumbnails');
//

//Создать раздел для слайдера и сам слайдер
add_action('init', 'slider_index');
function slider_index(){
	register_post_type(
		'slider', array(
			'public' => true,
			'supports' => array('title', 'editor','thumbnail'),
			'labels' => array(
				'name' => 'Слайдер',
				'add_new' => 'Добавить слайд',
				'all_items' => 'Все слайды',
				'add_new_item' => 'Добавить слайд'
			),
			'menu_postion' => 100
		)
	);
}

function kad_slaider_show(){
	$args = array(
		'post_type' => 'slider',
		'post_status' => 'publish'
	);
	$html_slider = '';
	$slider = new WP_Query($args);
	if($slider->have_posts()){
		while($slider->have_posts()){
			$slider->the_post();
			$imgage_id = get_post_thumbnail_id();
			$img = wp_get_attachment_image_src($imgage_id, 'full');
			$img = $img[0];
			//$html_slider .= $img;
			$html_slider .= '<li>'
							. '<div class="slide-content">'
							. '</div>'
							. '<a href="'. get_the_content() .'"><img src="'. $img . '" alt=""  /></a>'
							. '</li>';
		}
	}
	wp_reset_postdata();
	return $html_slider;
}
//