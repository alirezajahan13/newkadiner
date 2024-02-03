<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newkadiner
 */

$footer_aboutus_cl = get_field( 'footer_aboutus_cl' , 'option');
$footer_icon_cl = get_field( 'footer_icon_cl' , 'option');
$footer_cl_mb_one = get_field( 'footer_cl_mb_one' , 'option');
$footer_cl_mb_two = get_field( 'footer_cl_mb_two' , 'option');

?>

<div class="mainFooterContainer sectionPadding">
	<div class="mainFooter mainView">
		<div class="generalFooterCulomn footerAboutSection">
			<div><svg id="Layer_1"     height="40px"  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 773.7 217.9"><defs><linearGradient id="linear-gradient" x1="534" y1="243.7" x2="699.3" y2="76.1" gradientTransform="matrix(1 0 0 -1 0 220)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff" stop-opacity=".7"/><stop offset=".9" stop-color="#fff" stop-opacity="0"/></linearGradient><style>.cls-3{stroke-width:0;fill:#2f322e}</style></defs><path d="M773.7 53.5v23.8c0 1.3 0 2.7-.1 4v-1.5c-.5 15.5-7.7 25.2-24.6 25.6h-32.7c-30.5 0-55.2 24.7-55.2 55.2v31.8c0 17.6-9.8 24.8-25.6 25.3h.8c-1.1 0-2.2.1-3.4.1h-23.5c-29.6 0-53.5-24-53.5-53.5V53.5c0-29.5 24-53.5 53.5-53.5h110.8c29.6 0 53.5 24 53.5 53.5Z" style="fill:#fdcf00;stroke-width:0"/><path d="M773.6 79.8v7.4a45.3 45.3 0 0 1-13.1 31.1L676 202.7c-9.5 9.5-22.4 14.9-35.8 15h-4.6c15.8-.5 25.5-7.7 25.6-25.3v-31.8c0-30.5 24.7-55.2 55.2-55.2H749c16.9-.4 24-10.2 24.6-25.6Z" style="fill:#feea8e;stroke-width:0"/><path class="cls-3" d="M611.3 76.6c0-20.1 27.4-19 27.4 0 0 7.2 11 7.2 11 0 0-33-49.5-33.3-49.5 0 1.2 6.3 10.2 6.1 11 0Zm79.5 0c0-20.1 27.4-19 27.4 0 0 7.2 11 7.2 11 0 0-33-49.5-33.3-49.5 0 1.2 6.3 10.2 6.1 11 0Zm-15.3 46.9h-53.4c-3.5 0-6.9 2.9-6.3 7.3 4.7 26.5 26.4 41.4 45.4 41.9-.6-29.4 3.7-33.3 14.3-49.2Z"/><path d="M773.7 53.5v23.8c0 1.3 0 2.7-.1 4v-1.5c-.5 15.5-7.7 25.2-24.6 25.6h-32.7c-30.5 0-55.2 24.7-55.2 55.2v31.8c0 17.6-9.8 24.8-25.6 25.3h.8c-1.1 0-2.2.1-3.4.1h-23.5c-29.6 0-53.5-24-53.5-53.5V53.5c0-29.5 24-53.5 53.5-53.5h110.8c29.6 0 53.5 24 53.5 53.5Z" style="stroke-width:0;fill:url(#linear-gradient)"/><path class="cls-3" d="M497 125.8c.4 21.4-17.6 38.9-39 38.9h-88.2c-23.8 0-43.1-19.3-43.1-43.1V50.8h29.5v70.8c0 7.5 6.1 13.6 13.6 13.6h88.9c4.8 0 8.7-3.9 8.7-8.7 0-4.8-3.9-8.7-8.7-8.7l-47-.2c-4.9 0-9.5-2-13-5.4l-11.6-11.6c-6-6-7.1-15.3-2.7-22.5l20.8-34.7 25.3 15.2-17.9 29.8h46c20.9 0 37.9 16.7 38.3 37.6Zm-234.2 39.1h-22.4v-29.5h22.4c9.9.2 18.1-7.6 18.3-17.5.2-9.9-7.6-18.1-17.5-18.3h-23.2l7.1-29.5h15.3c26.2-.4 47.7 20.5 48.1 46.7.4 26.2-20.5 47.7-46.7 48.1h-1.4Zm-68.2-94.1V104c.3 14.8-11.5 27-26.2 27.3-14.8.3-27-11.5-27.3-26.2V70.9h-29.5v5.3l-.3 28.5c.3 14.8-11.5 27-26.2 27.3-14.8.3-27-11.5-27.3-26.2V71.6H28.3v28.8c0 18.3-7.2 35.9-20.2 48.8l-8 9.4 22 19.7 7.1-8.5c6.9-6.9 12.7-14.8 17.3-23.5 22.8 21 58.4 19.5 79.4-3.3l.6-.6c21 22.9 56.6 24.5 79.5 3.5 11.7-10.7 18.3-25.8 18.2-41.6V71.1h-29.5Z"/><circle class="cls-3" cx="178.9" cy="182" r="13.9"/><circle class="cls-3" cx="126.7" cy="48.3" r="14.2"/><circle class="cls-3" cx="209.5" cy="181.2" r="13.9"/></svg></div>
			<p><?php echo $footer_aboutus_cl; ?></p>
			<div class="socialMediaContainer">
				<?php foreach($footer_icon_cl as $ficon){ ?>
					<a href="<?php echo $ficon['link']['url']; ?>"><?php echo $ficon['icon'] ?></a>
				<?php } ?>
			</div>
		</div>
		<div class="generalFooterCulomn">
			<h3 class="bottomBorder">دسترسی سریع</h3>
			<?php
			foreach($footer_cl_mb_one as $fclone){
				?>
				<li  class="noListStyle">
					<a href="<?php echo $fclone['footer_item']['url'] ; ?> "><?php echo $fclone['footer_item']['title']; ?></a>
				</li>
			<?php } ?>
		</div>
		<div class="generalFooterCulomn">
			<h3 class="bottomBorder">محصولات پربازدید</h3>
			<?php
			foreach($footer_cl_mb_two as $fcltwo){
				?>
				<li  class="noListStyle">
					<a href="<?php echo $fcltwo['footer_item']['url'] ; ?> "><?php echo $fcltwo['footer_item']['title']; ?></a>
				</li>
			<?php } ?>
		</div>
	</div>
</div>
<?php wp_footer();?>

</body>
</html>
