<?php
// footerエリアのウィジェット,アーカイブ
register_sidebar(array(
		'name' => 'archive',
		'description' => 'archive',
		'before_widget'  =>   '<ul>',
		'after_widget'   =>   '</ul>',
		'before_title'   =>   '<p class="title">',
		'after_title'    =>   '</p>'
		));
// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(200, 140, true);
?>