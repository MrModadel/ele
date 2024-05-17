<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Electronik
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	
</head>

<body>
	<div class="wrapper">

		<header class="header" style="position: relative;z-index: 2;">
			<div class=" container header__container ">
				<a href="/"><img class="logotip" src="<?php bloginfo('template_url');?>/assets/icons/Logo.svg" alt="Logo"></a>
				<nav class="menu">
					<a href="/price-list/" class="menu__item">Прайс-лист</a>
					<a href="/dropshipping/" class="menu__item">Дропшиппинг</a>
					<a href="/contacts/" class="menu__item">Контакты</a>
				</nav>
				<div class="contact">
					<a href="https://wa.me/79302380000" class="whatsapp contact__elem"><img
							src="<?php bloginfo('template_url');?>/assets/icons/whatsapp.svg" alt="whatsapp"></a>
					<a href="https://t.me/iam_electronik" class="telegram contact__elem"><img
							src="<?php bloginfo('template_url');?>/assets/icons/telegram.svg" alt="telegram"></a>
					<div class="contact__phNum">+ 7 (930) 238-00-00</div>
					<div class="but-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</header>