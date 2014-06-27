<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="viewport" content="width=device-width" />
<!--
<meta name="description" content="Strikingly風UIのWordPressテーマです。">
<meta name="keywords" content="WordPress 無料 テーマ, Strikingly">
-->
<!-- WordPressのjQueryを読み込ませない -->
<?php wp_deregister_script('jquery'); ?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/stlike.js"></script>
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
				<?php if(is_home()): ?>
					<li><a href="#wrapper">Home</a></li>
				<?php else : ?>
					<li><a href="<?php bloginfo('url'); ?>">Top</a></li>
				<?php endif; ?>
					<li><a href="#Category">Category</a></li>
					<li><a href="#Author">Author</a></li>
			</ul>
		</div>
		<?php if(!is_single()): // 記事ページではない場合header画像を表示 ?>
			<div id="headImage" style="background:url(<?php bloginfo('template_url'); ?>/img/header.png) no-repeat; background-size: cover;">
				<p><?php bloginfo('description'); ?></p>
			</div>
		<?php endif; ?>
	</div>