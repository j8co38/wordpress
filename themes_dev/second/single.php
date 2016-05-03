	<?php get_header(); ?>
	<div id="contents" class="clearfix">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<article <?php post_class(); ?> class="single-post">
			<div class="single-post-inner">
				<div class="postinfo clearfix">
					<time class="date" datetime="<?php echo get_the_date('Y-m-d')?>"><?php echo get_the_date(); ?></time>
					<span class="post-category">
						<i class="fa fa-folder"></i><?php the_category(','); ?>
					</span>
				</div>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="post-content">
					<?php the_content(); ?>
				</div>
				<script>document.write('<p class="ad-tit">広告<p>');</script>
				<?php if (wp_is_mobile()) :?>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- sp-single-bottom -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:300px;height:250px"
					     data-ad-client="ca-pub-5653909761408361"
					     data-ad-slot="1232208134"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				<?php else: ?>
					<table class="bottom-ad">
						<tr>
							<td>
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								<!-- single-pc-left -->
								<ins class="adsbygoogle"
								     style="display:inline-block;width:300px;height:250px"
								     data-ad-client="ca-pub-5653909761408361"
								     data-ad-slot="6520458136"></ins>
								<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
								</script>
							</td>
							<td>
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								<!-- single-pc-right -->
								<ins class="adsbygoogle"
								     style="display:inline-block;width:300px;height:250px"
								     data-ad-client="ca-pub-5653909761408361"
								     data-ad-slot="7997191339"></ins>
								<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
								</script>
							</td>
						</tr>
					</table>
				<?php endif; ?>
				<div class="related-post">
					<h4>同じカテゴリの記事</h4>
					<ul>
						<?php
						foreach((get_the_category()) as $cat) {
						$cat_id = $cat->cat_ID ;
						break ;
						}
						$query = 'cat=' . $cat_id. '&showposts=4&offset=1';
						query_posts($query) ;
						?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li>・<a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></li>
						<?php endwhile; endif; ?>
						<?php wp_reset_query() ?>
					</ul>
				</div>
				<?php if( is_single() ): ?>
					<span class="post-tag">
						<?php the_tags('',' '); ?>
					</span>
					<div class="pagenav clearfix">
						<span class="old">
							<?php previous_post_link('%link', '&lt;&lt; %title'); ?>
						</span>
						<span class="new">
							<?php next_post_link('%link', '%title &gt;&gt;'); ?>
						</span>
					</div>
				<?php endif; ?>
				<?php comments_template(); ?>
			</div>
		</article>
		<?php endwhile; endif; ?>
	</div><!-- contents-end -->
	<?php get_sidebar(); ?>
</div><!-- bg-white-end -->
<?php get_footer(); ?>