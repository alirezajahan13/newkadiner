<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newkadiner
 */

?>
<div class="generalSinglePostStyle singleBox mainBox mediumMargined">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php newkadiner_post_thumbnail(); ?>

		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<!-- <div class="entry-meta">
					<?php
					//newkadiner_posted_on();
					//newkadiner_posted_by();
					?>
				</div>.entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'newkadiner' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'newkadiner' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
		<div class="postFooterSec">
			<div class="postAuthor">
				<span class="lighterText"><?php echo get_the_author() ?></span>
			</div>
			<div class="postDate">
				<span class="lighterText"><?php echo get_the_date() ?></span>
			</div>
			<div class="postLinkToBlog">
				<span><a href="#" class="lighterText">مقالات</a></span>
			</div>
			<div class="numViewCount">
				<span class="lighterText"><?php display_post_views(); ?></span>
				<span class="lighterText">بازدید</span>
			</div>
		</div>
		<!-- <footer class="entry-footer">
			<?php //newkadiner_entry_footer(); ?>
		</footer>.entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
