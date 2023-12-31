<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newkadiner
 */

get_header();
?>

	<main id="primary" class="site-main mainView mainBox highMargined">
		<div class="generalHeading highMargined">
			<h1>بلاگ کادینر</h1>
		</div>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			echo '<div class="archiveParent">';
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'archive' );

			endwhile;

			// the_posts_navigation();
			echo '</div>';
			?>
			<div class="archivePagination">
				<?php pagination_bar(); ?>
			</div>
			<?php
			else :

			get_template_part( 'template-parts/content', 'none' );

		endif;?>
		<div class="blogPageFooter highMargined">
			<div class="blogPageFooterSec">
				<div class="generalHeading highMargined">
					<h4>درباره کادینر</h4>
				</div>
				<div class="contentBox">
					<p class="justified">با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده،</p>
					<a href="#">بیشتر بخوانید</a>
				</div>
			</div>
			<div class="blogPageFooterSec">
				<div class="generalHeading highMargined">
					<h4>چاپ استیکر اختصاصی</h4>
				</div>
				<div class="contentBox">
					<p class="justified">با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده،</p>
					<a href="#">خرید استیکر اختصاصی</a>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
