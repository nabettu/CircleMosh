<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="Strikingly風UIのWordPressテーマです。">
<meta name="keywords" content="WordPress 無料 テーマ, Strikingly">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<!-- header -->
	<div id="header">
		<div id="fixed">
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/bloglogo.png"></a>
			<ul class="clearfix">
				<li><a href="#">Home</a></li>
				<li><a href="#">App</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<?php if(is_home()): // ホームが表示されている場合、header img を表示 ?>
			<div id="headImage" style="background:url(<?php bloginfo('template_url'); ?>/img/header.png)">
				<p>昼飯おごって(^o^)/</p>
			</div>
		<?php endif; ?>
	</div>