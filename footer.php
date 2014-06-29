	<!-- Category -->
	<div id="Category">
		<section>
			<h1 class="title">Category</h1>
			<ul>
				<li><a href="http://blog.t-tu.com/category/ios%E3%82%A2%E3%83%97%E3%83%AA/"><img src="<?php bloginfo('template_url'); ?>/img/apple.png"><br>アプリ</a></li>
				<li><a href="http://blog.t-tu.com/category/web%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9/"><img src="<?php bloginfo('template_url'); ?>/img/earth.png"><br>Webサービス</a></li>
				<li><a href="http://blog.t-tu.com/category/%E7%B4%B9%E4%BB%8B/"><img src="<?php bloginfo('template_url'); ?>/img/radio.png"><br>紹介</a></li>
				<li><a href="http://blog.t-tu.com/category/wordpress/"><img src="<?php bloginfo('template_url'); ?>/img/wp.png"><br>Wordpress</a></li>
				<li><a href="http://blog.t-tu.com/category/%E6%97%A5%E5%B8%B8/"><img src="<?php bloginfo('template_url'); ?>/img/light.png"><br>日常・その他</a></li>
			</ul>
		</section>
	</div>
	<!-- Author -->
	<div id="Author">
		<section class="clearfix">
			<h1 class="title">Author</h1>
			<h2><nobr>渡邊 タツアキ</nobr> <nobr>Watanabe Tatsuaki</nobr></h2>

			<img class="profile" src="http://www.gravatar.com/avatar/17d7df2ee1ecb4ddf6a0ac1261e14bf4.jpg?s=256&r=g">
			<div class="about">
				<p>1988年仙台生まれ。</p>
				<p>仕事はFujitsuでPC開発を、</p>
				<p>個人でWebサービスやアプリを作っています。</p>
				<p>2014年4月より育児休暇取得中。</p>
			</div>
			<ul>
				<li><a href="https://www.github.com/tatsuakiw" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/github_160.png"></a></li>
				<li><a href="https://www.twitter.com/tatsuaki_w" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/twitter_160.png"></a></li>
				<li><a href="https://www.facebook.com/tatsuaki.watanabe.58" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/facebook_160.png"></a></li>
				<li><a href="mailto:tatsuaki.w@gmail.com"><img src="<?php bloginfo('template_url'); ?>/img/mail_160.png"></a></li>
			</ul>
		</section>
	</div>
	<!-- footer -->
	<footer id="mainFooter">
		<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
	</footer>
</div>
<?php wp_footer(); ?> 
</body>
<!--ここからanalystic-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46137790-2', 't-tu.com');
  ga('send', 'pageview');

</script>
<!--ここまでanalystic-->
</html>