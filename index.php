	<?php get_header(); ?>
	<!-- blog -->
	<div id="blog">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article>
					<header>
						<h1 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?></a></h1>
					</header>
					<div class="entrySummary centering">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('post-thumbnails'); ?></a>
						<?php endif;?>
						<p><?php the_excerpt(); ?></p>
						<ul class="summaryMeta clearfix">
							<li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">続きを読む</a></li>
							<li>カテゴリー： <?php the_category(', ') ?></li>
							<li>タグ： <?php the_tags('', ', '); ?></li>
						</ul>
					</div>
				</article>
			<?php endwhile; ?>
			<div class='wp-pagenavi'>
				<span class="nav-previous"><?php previous_post_link('%link', '古い記事へ'); ?></span>
				<span class="nav-next"><?php next_post_link('%link', '新しい記事へ'); ?></span>
			</div>	
		<?php else : ?>
			<h2 class="title">記事が見つかりませんでした。</h2>
			<p>検索で見つかるかもしれません。</p><br />
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
	<!-- page -->
	<?php get_footer(); ?>