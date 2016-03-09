<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<link href="<?php bloginfo('template_url')?>/css/custom-theme/jquery-ui-1.9.2.custom.css" rel="stylesheet" />
<link rel="shortcut icon" href="<?php bloginfo('template_url')?>/images/favicon.ico" type="image/x-icon">
<title>Деревня</title>
<?php wp_head(); ?>
</head>
<body>
<div class="header">
	<div class="header-top center">
		<div class="logo">
			<a href=""><img src="<?php bloginfo('template_url')?>/images/logo.png" title="" alt="Деревня" /></a>
		</div>
		<div class="left-header">
			<ul class="phone-li">
				<?php $phone = get_option('wfm_theme_options'); ?>
				<li><?php echo $phone['code1']; ?> <b class="big-phon"> <?php echo $phone['kad_phone1']; ?></b></li>
				<li><?php echo $phone['code2']; ?> <b class="big-phon"> <?php echo $phone['kad_phone2']; ?></b></li>
			</ul>
			<div class="callback">
				<p><a href="#" class="callback-button">Заказать звонок</a></p>
			</div>
		</div>
		<div class="img-header">
			<img src="<?php bloginfo('template_url')?>/images/img-header.png" title="" alt="" />
		</div>
		<div class="right-header">
			<div class="adress">
				<a href=""><?php echo $phone['kad_adress'] ;?></a>
			</div>
			<div class="soc">
				<ul>
					<?php if(!dynamic_sidebar('kad_soc')): ?>
					<li><a class="soc1" href="#">Место для иконок соц. сетей. Использвать текстовый виджет</a></li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="search">
				<form action="">
					<input class="serach-tex" type="text" name="s" value="" />
					<input class="search-button"type="image" src="<?php bloginfo('template_url')?>/images/search.jpg" name="search" alt="Поиск" />
				</form>
			</div>
		</div>
	</div>	
	<div class="header-bottom">
	</div>
</div>
<div class="content">
	<div class="menu">
		<!-- Меню -->
		<?php wp_nav_menu(array(
			'menu' => 'menu',
			'container' => ''
		)); ?>
	</div>