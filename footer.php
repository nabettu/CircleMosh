	<!-- Category -->
	<div id="Category">
		<section>
			<?php get_sidebar('footer'); ?>
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
				<li><a href="https://www.github.com/tatsuaki_w" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/github_160.png"></a></li>
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