	<?php get_header(); ?>
	<div id="contents" class="post-list">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<article <?php post_class(); ?>>
			<div class="post-inner">
				<div class="postinfo">
					<span class="post-category">
						<?php categories_label() ?>
					</span>
				</div>
				<div class="post-content">
					<a href="<?php the_permalink(); ?>" >
						<div class="main-thumb"><?php the_post_thumbnail('thumb'); ?></div>
					</a>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<!-- <?php the_content('',FALSE,''); ?> -->
					<span class="post-text"><?php echo mb_substr(strip_tags($post-> post_content),0,64).'...'; ?>
					<!-- <a href="<?php the_permalink() ?>" class="more-link">Read more→</a> -->
				</div>
				<time class="date" datetime="<?php echo get_the_date('Y-m-d')?>"><?php echo get_the_date(); ?>
				</time>
			</div>
		</article>
		<?php endwhile; endif; ?>
		<div class="pagination">
			<?php
			global $wp_query;
			$big = 999999999;
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages,
				'prev_text'    => __('«'),
				'next_text'    => __('»')
			) );
			?>
		</div>
	</div><!-- contents-end -->
	<?php get_sidebar(); ?>
</div><!-- bg-white-end -->
<?php get_footer(); ?>