<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="viewport" content="width=device-width" />

<!-- meta -->
<meta property="og:title" content="<?php
global $page, $paged;
if(is_front_page()):
bloginfo('name');
elseif(is_single()):
wp_title('');
elseif(is_page()):
wp_title('');
elseif(is_archive()):
wp_title('|',true,'right');
bloginfo('name');
elseif(is_search()):
wp_title('-',true,'right');
elseif(is_404()):
echo'404 - ';
bloginfo('name');
endif;
if($paged >= 2 || $page >= 2):
echo'-'.sprintf('%sページ',
max($paged,$page));
endif;
?>">
<meta property="og:type" content="blog" />
<meta property="og:url" content="
<?php if (is_home()) { echo home_url(); } else { the_permalink(); }?>
" />
<meta property="og:image" content="<?php 
if (is_home()) {
	bloginfo('template_directory');
	echo "/img/logo600.png";
} else { 
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id, true);
	echo $image_url[0];
};
?>"/>
<meta property="og:description" content="<?php
//if (is_home()) {
	bloginfo('description');
//} else {
//	echo mb_substr( strip_tags( stinger_noshotcode( $post->post_content ) ), 0, 50 ) . ''; }
?>">
<meta property="og:site_name" content="つくログ">
<meta property="fb:admins" content="1667345770">
<meta property="og:locale" content="ja_JP" />
<link rel="publisher" href="https://plus.google.com/u/0/112541613552705398200/about"/>
<link rel="author" href="https://plus.google.com/112541613552705398200/posts">
<!-- meta end-->

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
	</div>