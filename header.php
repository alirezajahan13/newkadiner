<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newkadiner
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<div class="kadinerMobileMenuContainer">
	<div class="headerMobileMenu">
		<div class="logoSection">
			<svg xmlns="http://www.w3.org/2000/svg" height="40px" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 773.74 217.85"><defs><linearGradient id="linear-gradient" x1="554.63" y1="-5.65" x2="720.73" y2="244.45" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#5b5b5b"/><stop offset=".99" stop-color="#1a1e1c"/></linearGradient><linearGradient id="linear-gradient-2" x1="567.07" y1="-13.91" x2="733.18" y2="236.18" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-3" x1="622.2" y1="-50.53" x2="788.31" y2="199.57" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-4" x1="534" y1="-23.71" x2="699.3" y2="143.89" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff" stop-opacity=".7"/><stop offset=".95" stop-color="#fff" stop-opacity="0"/></linearGradient><style>.cls-7{fill:#2f322e}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M773.74 53.55v23.76c0 1.35 0 2.67-.13 4v-1.49c-.53 15.47-7.7 25.17-24.58 25.62h-32.69a55.19 55.19 0 0 0-55.18 55.18v31.84c-.08 17.62-9.83 24.8-25.61 25.34h.79c-1.11.06-2.24.1-3.4.1h-23.51a53.54 53.54 0 0 1-53.54-53.54V53.55A53.54 53.54 0 0 1 609.43 0H720.2a53.54 53.54 0 0 1 53.54 53.55Z" style="fill:#fdcf00"/><path d="M675.47 123.51a55 55 0 0 0-14.31 37.07v12.09a49.29 49.29 0 0 1-45.4-41.88 6.38 6.38 0 0 1 6.32-7.28Z" style="fill:url(#linear-gradient)"/><path d="M773.58 79.78v1.49l-.06 5.93a44.49 44.49 0 0 1-13.06 31.05L676 202.67a51.39 51.39 0 0 1-35.79 15h-4.65c15.78-.54 25.53-7.72 25.61-25.34v-31.75a55.19 55.19 0 0 1 55.18-55.18H749c16.88-.4 24.05-10.15 24.58-25.62Z" style="fill:#feea8e"/><path d="M644.3 81.91a5.57 5.57 0 0 1-5.57-5.57 13.64 13.64 0 1 0-27.27 0 5.57 5.57 0 0 1-11.14 0 24.77 24.77 0 0 1 49.54 0 5.57 5.57 0 0 1-5.56 5.57Z" style="fill:url(#linear-gradient-2)"/><path d="M723.75 81.91a5.57 5.57 0 0 1-5.57-5.57 13.64 13.64 0 1 0-27.28 0 5.57 5.57 0 1 1-11.13 0 24.77 24.77 0 1 1 49.54 0 5.57 5.57 0 0 1-5.56 5.57Z" style="fill:url(#linear-gradient-3)"/><path d="M773.74 53.55v23.76c0 1.35 0 2.67-.13 4v-1.49c-.53 15.47-7.7 25.17-24.58 25.62h-32.69a55.19 55.19 0 0 0-55.18 55.18v31.84c-.08 17.62-9.83 24.8-25.61 25.34h.79c-1.11.06-2.24.1-3.4.1h-23.51a53.54 53.54 0 0 1-53.54-53.54V53.55A53.54 53.54 0 0 1 609.43 0H720.2a53.54 53.54 0 0 1 53.54 53.55Z" style="fill:url(#linear-gradient-4)"/><path class="cls-7" d="M497.05 125.83c.37 21.38-17.59 38.88-39 38.88h-88.16a43.16 43.16 0 0 1-43.13-43.11V50.76h29.54v70.84a13.58 13.58 0 0 0 13.58 13.57h88.95a8.69 8.69 0 1 0 0-17.38l-47-.23a18.5 18.5 0 0 1-13-5.41l-11.6-11.6A18.47 18.47 0 0 1 384.5 78l20.82-34.7 25.33 15.2-17.86 29.75h46a38.27 38.27 0 0 1 38.26 37.58Zm-234.26 39.09H240.4v-29.54h22.39a17.88 17.88 0 1 0 0-35.75H240.4l7.09-29.54h15.3a47.42 47.42 0 1 1 0 94.83Zm-68.21-94.09V104a26.76 26.76 0 1 1-53.51 0V70.83h-29.54v5.27l-.28 28.49a26.76 26.76 0 1 1-53.51 0V71.38H28.2v28.79A68.55 68.55 0 0 1 8 149l-8 9.4 22 19.67 7.15-8.54a98.64 98.64 0 0 0 17.27-23.48 56.18 56.18 0 0 0 79.95-3.92A56.27 56.27 0 0 0 224.12 104V70.83Z"/><circle class="cls-7" cx="178.91" cy="182.01" r="13.93"/><circle class="cls-7" cx="126.65" cy="48.31" r="14.17"/><circle class="cls-7" cx="209.46" cy="181.24" r="13.93"/></g></g></svg>
		</div>
		<div class="mobileMenuClose">
			<svg width="20" height="20" viewBox="0 0 24 24" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><path style="fill:none;stroke:#FF0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2" d="M19 19 5 5"></path><path data-name="primary" style="fill:none;stroke:#FF0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2" d="M19 5 5 19"></path></svg>
		</div>
	</div>
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-2',
				'container_class'=>'productMenu',
			)
		);
	?>
</div>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="mobileFiboSearch">
	<?php echo do_shortcode('[fibosearch]'); ?>
</div>
<div class="kadinerMobileNavbar">
	<a href="https://kadiner.ir/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path d="m256 29.6 10.5-12.3c-6.1-5.2-15-5.2-21 0L256 29.6ZM29.6 223.7l-10.5-12.3-5.7 4.9v7.4h16.2Zm161.7 258.7v16.2c8.9 0 16.2-7.2 16.2-16.2h-16.2Zm129.3 0h-16.2c0 8.9 7.2 16.2 16.2 16.2v-16.2Zm161.7-258.7h16.2v-7.4l-5.7-4.9-10.5 12.3ZM62 498.5h129.3v-32.3H62v32.3Zm430.9-287.1-226.4-194-21 24.6 226.4 194 21-24.6Zm-247.4-194-226.4 194 21 24.6L266.5 41.9l-21-24.6Zm-38 465v-97h-32.3v97h32.3Zm97-97v97h32.3v-97h-32.3Zm16.2 113.2H450v-32.3H320.7v32.3Zm177.9-48.5V223.7h-32.3v226.4h32.3ZM13.5 223.7v226.4h32.3V223.7H13.5ZM256 336.9c26.8 0 48.5 21.7 48.5 48.5h32.3c0-44.6-36.2-80.8-80.8-80.8v32.3Zm0-32.3c-44.6 0-80.8 36.2-80.8 80.8h32.3c0-26.8 21.7-48.5 48.5-48.5v-32.3Zm194 194c26.8 0 48.5-21.7 48.5-48.5h-32.3c0 8.9-7.2 16.2-16.2 16.2v32.3ZM62 466.3c-8.9 0-16.2-7.2-16.2-16.2H13.5c0 26.8 21.7 48.5 48.5 48.5v-32.3Z" style="stroke-width:0"/></svg></a>
	<a href="#" class="navbarSearchIcon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path d="m483.24 465.65-99.69-99.69c31.7-36.92 50.88-84.89 50.88-137.25 0-116.34-94.65-210.99-210.99-210.99s-211 94.65-211 210.99S107.09 439.7 223.43 439.7c52.36 0 100.33-19.18 137.25-50.88l99.69 99.69c3.16 3.16 7.29 4.74 11.43 4.74s8.28-1.58 11.43-4.74c6.31-6.31 6.31-16.55 0-22.87ZM44.78 228.71c0-98.51 80.14-178.65 178.65-178.65s178.65 80.14 178.65 178.65-80.14 178.65-178.65 178.65S44.78 327.22 44.78 228.71Z" style="stroke-width:0"/></svg></a>
	<a class="kadinerNavbarMiniCart" href="https://kadiner.ir/cart/"><span class="mainCartCount"><?php echo WC()->cart->get_cart_contents_count(); ?></span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path d="M418.4 342c7 0 13.1-4.4 15.3-11l67.4-201.4c1.6-4.8.9-10.1-2-14.3-2.9-4.2-7.5-6.8-12.6-7L190.1 94.5c-8.9-.4-16.5 6.5-16.9 15.4-.4 8.9 6.5 16.5 15.4 16.9l275.1 12.8-56.9 170.1H163.5L113.3 65.3c-1.1-5.4-4.9-9.8-10-11.8L32.1 25.8c-8.3-3.2-17.7.9-20.9 9.2-3.2 8.3.9 17.7 9.2 20.9l63 24.4L134.5 329c1.5 7.5 8.2 12.9 15.8 12.9h4.3l-17.1 45.8c-1.9 5-1.2 10.5 1.9 14.9 3 4.4 8 6.9 13.3 6.9h13.9c-7.8 8.2-12.6 19.4-12.6 31.6 0 25.4 20.6 46 46 46s46-20.6 46-46-4.8-23.4-12.6-31.6h104.7c-7.8 8.2-12.6 19.4-12.6 31.6 0 25.4 20.6 46 46 46s46-20.6 46-46-4.8-23.4-12.6-31.6h16.9c8.9 0 16.2-7.2 16.2-16.2s-7.2-16.2-16.2-16.2H176.2l13.2-35.3h229.3ZM199.8 454.9c-7.5 0-13.7-6.1-13.7-13.7s6.1-13.7 13.7-13.7 13.7 6.1 13.7 13.7-6.1 13.7-13.7 13.7Zm171.4 0c-7.5 0-13.7-6.1-13.7-13.7s6.1-13.7 13.7-13.7 13.7 6.1 13.7 13.7-6.1 13.7-13.7 13.7Z" style="stroke-width:0"/></svg></a>
	<a href="https://kadiner.ir/my-account/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path d="M265.8 243.5c-61.9 0-112.3-50.4-112.3-112.3S203.9 18.9 265.8 18.9s112.3 50.4 112.3 112.3-50.4 112.3-112.3 112.3Zm0-192.2c-44.1 0-80 35.9-80 80s35.9 80 80 80 80-35.9 80-80-35.9-80-80-80ZM53 492.6V433c0-77.4 63-140.4 140.4-140.4h125.1c77.4 0 140.4 63 140.4 140.4v59.6h32.3V433c0-95.3-77.5-172.8-172.8-172.8H193.3C98 260.2 20.5 337.7 20.5 433v59.6h32.3Z" style="stroke-width:0"/></svg></a>
</div>

<div id="page" class="site">
	<div class="mainHeaderContainer">
		<div class="mainHeader mainView">
			<div class="HeadewrRight">
				<a href="https://kadiner.ir/">
					<svg height="40" viewBox="0 0 774 219" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M773.927 54.355v23.76c0 1.35 0 2.67-.13 4v-1.49c-.53 15.47-7.7 25.17-24.58 25.62h-32.69a55.187 55.187 0 0 0-55.18 55.18v31.84c-.08 17.62-9.83 24.8-25.61 25.34h.79c-1.11.06-2.24.1-3.4.1h-23.51a53.54 53.54 0 0 1-53.54-53.54V54.355a53.548 53.548 0 0 1 15.678-37.865A53.537 53.537 0 0 1 609.617.805h110.77a53.537 53.537 0 0 1 49.467 33.058 53.548 53.548 0 0 1 4.073 20.492Z" fill="#FDCF00"/><path d="M675.657 124.315a55 55 0 0 0-14.31 37.07v12.09a49.292 49.292 0 0 1-45.4-41.88 6.382 6.382 0 0 1 3.67-6.706 6.377 6.377 0 0 1 2.65-.574h53.39Z" fill="url(#a)"/><path d="M773.767 80.585v1.49l-.06 5.93a44.489 44.489 0 0 1-13.06 31.05l-84.46 84.42a51.394 51.394 0 0 1-35.79 15h-4.65c15.78-.54 25.53-7.72 25.61-25.34v-31.75a55.192 55.192 0 0 1 55.18-55.18h32.65c16.88-.4 24.05-10.15 24.58-25.62Z" fill="#FEEA8E"/><path d="M644.487 82.715a5.575 5.575 0 0 1-3.939-1.632 5.573 5.573 0 0 1-1.631-3.938 13.647 13.647 0 0 0-3.86-9.883 13.64 13.64 0 0 0-23.41 9.883 5.572 5.572 0 0 1-5.57 5.57 5.572 5.572 0 0 1-5.57-5.57 24.771 24.771 0 0 1 49.54 0 5.567 5.567 0 0 1-5.56 5.57Z" fill="url(#b)"/><path d="M723.937 82.715a5.572 5.572 0 0 1-5.57-5.57 13.64 13.64 0 1 0-27.28 0 5.573 5.573 0 0 1-5.565 5.806 5.572 5.572 0 0 1-5.565-5.806 24.767 24.767 0 0 1 15.291-22.885 24.768 24.768 0 0 1 34.249 22.885 5.567 5.567 0 0 1-5.56 5.57Z" fill="url(#c)"/><path d="M773.927 54.355v23.76c0 1.35 0 2.67-.13 4v-1.49c-.53 15.47-7.7 25.17-24.58 25.62h-32.69a55.187 55.187 0 0 0-55.18 55.18v31.84c-.08 17.62-9.83 24.8-25.61 25.34h.79c-1.11.06-2.24.1-3.4.1h-23.51a53.54 53.54 0 0 1-53.54-53.54V54.355a53.548 53.548 0 0 1 15.678-37.865A53.537 53.537 0 0 1 609.617.805h110.77a53.537 53.537 0 0 1 49.467 33.058 53.548 53.548 0 0 1 4.073 20.492Z" fill="url(#d)"/><path d="M497.237 126.635c.37 21.38-17.59 38.88-39 38.88h-88.16a43.162 43.162 0 0 1-43.13-43.11v-70.84h29.54v70.84a13.584 13.584 0 0 0 13.58 13.57h88.95a8.69 8.69 0 0 0 0-17.38l-47-.23a18.505 18.505 0 0 1-13-5.41l-11.6-11.6a18.468 18.468 0 0 1-2.73-22.55l20.82-34.7 25.33 15.2-17.86 29.75h46a38.268 38.268 0 0 1 38.26 37.58Zm-234.26 39.09h-22.39v-29.54h22.39a17.886 17.886 0 0 0 16.901-10.935 17.887 17.887 0 0 0 0-13.88 17.874 17.874 0 0 0-16.901-10.935h-22.39l7.09-29.54h15.3a47.414 47.414 0 0 1 33.975 13.641 47.407 47.407 0 0 1 14.134 33.774 47.423 47.423 0 0 1-48.109 47.415Zm-68.21-94.09v33.17a26.747 26.747 0 0 1-7.651 19.255 26.753 26.753 0 0 1-19.104 8.022 26.746 26.746 0 0 1-19.104-8.022 26.747 26.747 0 0 1-7.651-19.255v-33.17h-29.54v5.27l-.28 28.49a26.747 26.747 0 0 1-7.651 19.255 26.75 26.75 0 0 1-19.104 8.022 26.748 26.748 0 0 1-19.104-8.022 26.764 26.764 0 0 1-7.651-19.255v-33.21h-29.54v28.79a68.545 68.545 0 0 1-20.2 48.83l-8 9.4 22 19.67 7.15-8.54a98.668 98.668 0 0 0 17.27-23.48 56.174 56.174 0 0 0 40.796 14.774 56.173 56.173 0 0 0 39.154-18.694 56.272 56.272 0 0 0 87.97-6.321 56.263 56.263 0 0 0 9.78-31.809v-33.17h-29.54Zm-15.67 125.11c7.693 0 13.93-6.237 13.93-13.93 0-7.694-6.237-13.93-13.93-13.93s-13.93 6.236-13.93 13.93c0 7.693 6.237 13.93 13.93 13.93Zm-52.26-133.46c7.826 0 14.17-6.344 14.17-14.17s-6.344-14.17-14.17-14.17-14.17 6.344-14.17 14.17 6.344 14.17 14.17 14.17Zm82.81 132.69c7.693 0 13.93-6.237 13.93-13.93 0-7.694-6.237-13.93-13.93-13.93s-13.93 6.236-13.93 13.93c0 7.693 6.237 13.93 13.93 13.93Z" fill="#2F322E"/><defs><linearGradient id="a" x1="-790.282" y1="-571.693" x2="-444.85" y2="947.268" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#5B5B5B"/><stop offset=".99" stop-color="#1A1E1C"/></linearGradient><linearGradient id="b" x1="-519.128" y1="-469.469" x2="204.009" y2="1898.19" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#5B5B5B"/><stop offset=".99" stop-color="#1A1E1C"/></linearGradient><linearGradient id="c" x1="-898.801" y1="-726.812" x2="-185.799" y2="1625.67" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#5B5B5B"/><stop offset=".99" stop-color="#1A1E1C"/></linearGradient><linearGradient id="d" x1="-77.56" y1="-22.905" x2="7.68" y2="284.056" gradientUnits="userSpaceOnUse"><stop stop-color="#fff" stop-opacity=".7"/><stop offset=".95" stop-color="#fff" stop-opacity="0"/></linearGradient></defs></svg>
				</a>
				<div class="menuProductParent">
					<span class="menuProductParentSvgPart"><svg width="25" height="25" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none"><path fill="#000" fill-rule="evenodd" d="M19 4a1 1 0 0 1-1 1H2a1 1 0 0 1 0-2h16a1 1 0 0 1 1 1zm0 6a1 1 0 0 1-1 1H2a1 1 0 1 1 0-2h16a1 1 0 0 1 1 1zm-1 7a1 1 0 1 0 0-2H2a1 1 0 1 0 0 2h16z"/></svg></span>
					<span class="menuProductParentTitlePart">محصولات</span>
					<!-- <div class="menuProductItems"></div> -->
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'container_class'=>'productMenu',
							)
						);
					?>
				</div>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container_class'=>'desktopMenu',
						)
					);
				?>
			</div>
			<div class="HeadewrLeft">
				<div class="kadinerHeaderMenuBtn">
					<a href="#" class="generalButton">چاپ اختصاصی</a>
					<div>
						<li><a href="https://kadiner.ir/product/%d8%a7%d8%b3%d8%aa%db%8c%da%a9%d8%b1-%d8%a7%d8%ae%d8%aa%d8%b5%d8%a7%d8%b5%db%8c/">چاپ استیکر اختصاصی</a></li>
						<li><a href="https://kadiner.ir/product/special-mug/">چاپ ماگ اختصاصی</a></li>
						<li><a href="https://kadiner.ir/product/special-book/">چاپ کتاب اختصاصی</a></li>
					</div>
				</div>
				<div class="headerWoocomerceItemsPart">
				<?php echo do_shortcode('[fibosearch]'); 
				if ( is_user_logged_in() ) {
				?>
				<div class="headerMyAcountIcon">
					<a href="#" class="kadinerUsers"><svg width="20" height="20" viewBox="8 8 50 50" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2"><path style="fill:none" d="M0 0h1280v800H0z" transform="translate(-1216 -192)"/><path d="M50 46.5c-7.2 0-13-5.8-13-13s5.8-13 13-13 13 5.8 13 13-5.8 13-13 13Zm0-22c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9Z" style="fill-rule:nonzero" transform="translate(-1216 -192) matrix(.9393 0 0 .9393 1200.662 180.725)"/><path d="M34.036 58.5V67H30.4v-8.5c0-7.182 8.818-12.727 20-12.727s20 5.545 20 12.727V67h-3.636v-8.5c0-4.909-7.455-9.091-16.364-9.091S34.036 53.591 34.036 58.5Z" style="fill-rule:nonzero" transform="translate(-1216 -192) translate(1195.93 178.799) scale(1.03318)"/></svg></a>
					<div>
						<li><a href="https://kadiner.ir/my-account/">پنل کاربری</a></li>
						<li><a href="https://kadiner.ir/my-account/orders/">سفارشات من</a></li>
						<li><a href="https://kadiner.ir/my-account/edit-account/">تنظیمات</a></li>
						<li><a href="https://kadiner.ir/my-account/customer-logout/?_wpnonce=cce25a7ee3"><svg height="20" width="20" fill="#000" stroke="#000" stroke-width="10px" xmlns="http://www.w3.org/2000/svg" viewBox="10 -20 380 520" xml:space="preserve"><path d="M227.619 444.2h-122.9c-33.4 0-60.5-27.2-60.5-60.5V87.5c0-33.4 27.2-60.5 60.5-60.5h124.9c7.5 0 13.5-6 13.5-13.5s-6-13.5-13.5-13.5h-124.9c-48.3 0-87.5 39.3-87.5 87.5v296.2c0 48.3 39.3 87.5 87.5 87.5h122.9c7.5 0 13.5-6 13.5-13.5s-6.1-13.5-13.5-13.5z"/><path d="m450.019 226.1-85.8-85.8c-5.3-5.3-13.8-5.3-19.1 0-5.3 5.3-5.3 13.8 0 19.1l62.8 62.8h-273.9c-7.5 0-13.5 6-13.5 13.5s6 13.5 13.5 13.5h273.9l-62.8 62.8c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l85.8-85.8c5.4-5.4 5.4-14 .1-19.2z"/></svg></a></li>
					</div>
				</div>
				<div class="kadinerMiniCartContainer">
					<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 446.853 446.853" xml:space="preserve"><path d="M444.274 93.36a14.332 14.332 0 0 0-11.145-6.123L155.942 75.289c-7.953-.348-14.599 5.792-14.939 13.708-.338 7.913 5.792 14.599 13.707 14.939l258.421 11.14L362.32 273.61H136.205L95.354 51.179a14.336 14.336 0 0 0-8.861-10.753L19.586 14.141c-7.374-2.887-15.695.735-18.591 8.1-2.891 7.369.73 15.695 8.1 18.591l59.491 23.371 41.572 226.335a14.341 14.341 0 0 0 14.104 11.746h6.896l-15.747 43.74a11.927 11.927 0 0 0 1.468 10.916 11.947 11.947 0 0 0 9.772 5.078h11.045c-6.844 7.617-11.045 17.646-11.045 28.675 0 23.718 19.299 43.012 43.012 43.012s43.012-19.294 43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847 7.617-11.047 17.646-11.047 28.675 0 23.718 19.294 43.012 43.012 43.012 23.719 0 43.012-19.294 43.012-43.012 0-11.028-4.2-21.058-11.042-28.675h13.432c6.6 0 11.948-5.349 11.948-11.947 0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221a14.332 14.332 0 0 0 13.651-9.96l59.739-186.387a14.306 14.306 0 0 0-1.89-12.573zm-274.61 316.454c-10.543 0-19.117-8.573-19.117-19.116s8.574-19.117 19.117-19.117 19.116 8.574 19.116 19.117-8.573 19.116-19.116 19.116zm157.709 0c-10.543 0-19.116-8.573-19.116-19.116s8.573-19.117 19.116-19.117 19.116 8.574 19.116 19.117-8.573 19.116-19.116 19.116z"/></svg></span>
					<span>سبد خرید</span>
					<span class="numberOfMiniCartItems mainCartCount"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
					<div class="headerMiniCartContainer"><?php echo do_shortcode('[kadiner_custom_minicart]'); ?></div>
				</div>
				<?php
				 } else { ?>
					<div class="headerMyAcountIcon">
						<a href="#" class="kadinerUsers"><svg width="20" height="20" viewBox="8 8 50 50" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2"><path style="fill:none" d="M0 0h1280v800H0z" transform="translate(-1216 -192)"/><path d="M50 46.5c-7.2 0-13-5.8-13-13s5.8-13 13-13 13 5.8 13 13-5.8 13-13 13Zm0-22c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9Z" style="fill-rule:nonzero" transform="translate(-1216 -192) matrix(.9393 0 0 .9393 1200.662 180.725)"/><path d="M34.036 58.5V67H30.4v-8.5c0-7.182 8.818-12.727 20-12.727s20 5.545 20 12.727V67h-3.636v-8.5c0-4.909-7.455-9.091-16.364-9.091S34.036 53.591 34.036 58.5Z" style="fill-rule:nonzero" transform="translate(-1216 -192) translate(1195.93 178.799) scale(1.03318)"/></svg></a>
						<div>
							<li><a href="https://kadiner.ir/my-account/">ورود / عضویت</a></li>
						</div>
					</div>
					<div class="kadinerMiniCartContainer">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 446.853 446.853" xml:space="preserve"><path d="M444.274 93.36a14.332 14.332 0 0 0-11.145-6.123L155.942 75.289c-7.953-.348-14.599 5.792-14.939 13.708-.338 7.913 5.792 14.599 13.707 14.939l258.421 11.14L362.32 273.61H136.205L95.354 51.179a14.336 14.336 0 0 0-8.861-10.753L19.586 14.141c-7.374-2.887-15.695.735-18.591 8.1-2.891 7.369.73 15.695 8.1 18.591l59.491 23.371 41.572 226.335a14.341 14.341 0 0 0 14.104 11.746h6.896l-15.747 43.74a11.927 11.927 0 0 0 1.468 10.916 11.947 11.947 0 0 0 9.772 5.078h11.045c-6.844 7.617-11.045 17.646-11.045 28.675 0 23.718 19.299 43.012 43.012 43.012s43.012-19.294 43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847 7.617-11.047 17.646-11.047 28.675 0 23.718 19.294 43.012 43.012 43.012 23.719 0 43.012-19.294 43.012-43.012 0-11.028-4.2-21.058-11.042-28.675h13.432c6.6 0 11.948-5.349 11.948-11.947 0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221a14.332 14.332 0 0 0 13.651-9.96l59.739-186.387a14.306 14.306 0 0 0-1.89-12.573zm-274.61 316.454c-10.543 0-19.117-8.573-19.117-19.116s8.574-19.117 19.117-19.117 19.116 8.574 19.116 19.117-8.573 19.116-19.116 19.116zm157.709 0c-10.543 0-19.116-8.573-19.116-19.116s8.573-19.117 19.116-19.117 19.116 8.574 19.116 19.117-8.573 19.116-19.116 19.116z"/></svg></span>
						<span>سبد خرید</span>
						<span class="numberOfMiniCartItems mainCartCount"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
						<div class="headerMiniCartContainer"><?php echo do_shortcode('[kadiner_custom_minicart]'); ?></div>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>




	<div class="mobileHeaderContainer">
		<div class="mobileHeader mainView">
			<a class="logosection" href="https://kadiner.ir/">
				<svg height="40" viewBox="0 0 774 219" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M773.927 54.355v23.76c0 1.35 0 2.67-.13 4v-1.49c-.53 15.47-7.7 25.17-24.58 25.62h-32.69a55.187 55.187 0 0 0-55.18 55.18v31.84c-.08 17.62-9.83 24.8-25.61 25.34h.79c-1.11.06-2.24.1-3.4.1h-23.51a53.54 53.54 0 0 1-53.54-53.54V54.355a53.548 53.548 0 0 1 15.678-37.865A53.537 53.537 0 0 1 609.617.805h110.77a53.537 53.537 0 0 1 49.467 33.058 53.548 53.548 0 0 1 4.073 20.492Z" fill="#FDCF00"/><path d="M675.657 124.315a55 55 0 0 0-14.31 37.07v12.09a49.292 49.292 0 0 1-45.4-41.88 6.382 6.382 0 0 1 3.67-6.706 6.377 6.377 0 0 1 2.65-.574h53.39Z" fill="url(#a)"/><path d="M773.767 80.585v1.49l-.06 5.93a44.489 44.489 0 0 1-13.06 31.05l-84.46 84.42a51.394 51.394 0 0 1-35.79 15h-4.65c15.78-.54 25.53-7.72 25.61-25.34v-31.75a55.192 55.192 0 0 1 55.18-55.18h32.65c16.88-.4 24.05-10.15 24.58-25.62Z" fill="#FEEA8E"/><path d="M644.487 82.715a5.575 5.575 0 0 1-3.939-1.632 5.573 5.573 0 0 1-1.631-3.938 13.647 13.647 0 0 0-3.86-9.883 13.64 13.64 0 0 0-23.41 9.883 5.572 5.572 0 0 1-5.57 5.57 5.572 5.572 0 0 1-5.57-5.57 24.771 24.771 0 0 1 49.54 0 5.567 5.567 0 0 1-5.56 5.57Z" fill="url(#b)"/><path d="M723.937 82.715a5.572 5.572 0 0 1-5.57-5.57 13.64 13.64 0 1 0-27.28 0 5.573 5.573 0 0 1-5.565 5.806 5.572 5.572 0 0 1-5.565-5.806 24.767 24.767 0 0 1 15.291-22.885 24.768 24.768 0 0 1 34.249 22.885 5.567 5.567 0 0 1-5.56 5.57Z" fill="url(#c)"/><path d="M773.927 54.355v23.76c0 1.35 0 2.67-.13 4v-1.49c-.53 15.47-7.7 25.17-24.58 25.62h-32.69a55.187 55.187 0 0 0-55.18 55.18v31.84c-.08 17.62-9.83 24.8-25.61 25.34h.79c-1.11.06-2.24.1-3.4.1h-23.51a53.54 53.54 0 0 1-53.54-53.54V54.355a53.548 53.548 0 0 1 15.678-37.865A53.537 53.537 0 0 1 609.617.805h110.77a53.537 53.537 0 0 1 49.467 33.058 53.548 53.548 0 0 1 4.073 20.492Z" fill="url(#d)"/><path d="M497.237 126.635c.37 21.38-17.59 38.88-39 38.88h-88.16a43.162 43.162 0 0 1-43.13-43.11v-70.84h29.54v70.84a13.584 13.584 0 0 0 13.58 13.57h88.95a8.69 8.69 0 0 0 0-17.38l-47-.23a18.505 18.505 0 0 1-13-5.41l-11.6-11.6a18.468 18.468 0 0 1-2.73-22.55l20.82-34.7 25.33 15.2-17.86 29.75h46a38.268 38.268 0 0 1 38.26 37.58Zm-234.26 39.09h-22.39v-29.54h22.39a17.886 17.886 0 0 0 16.901-10.935 17.887 17.887 0 0 0 0-13.88 17.874 17.874 0 0 0-16.901-10.935h-22.39l7.09-29.54h15.3a47.414 47.414 0 0 1 33.975 13.641 47.407 47.407 0 0 1 14.134 33.774 47.423 47.423 0 0 1-48.109 47.415Zm-68.21-94.09v33.17a26.747 26.747 0 0 1-7.651 19.255 26.753 26.753 0 0 1-19.104 8.022 26.746 26.746 0 0 1-19.104-8.022 26.747 26.747 0 0 1-7.651-19.255v-33.17h-29.54v5.27l-.28 28.49a26.747 26.747 0 0 1-7.651 19.255 26.75 26.75 0 0 1-19.104 8.022 26.748 26.748 0 0 1-19.104-8.022 26.764 26.764 0 0 1-7.651-19.255v-33.21h-29.54v28.79a68.545 68.545 0 0 1-20.2 48.83l-8 9.4 22 19.67 7.15-8.54a98.668 98.668 0 0 0 17.27-23.48 56.174 56.174 0 0 0 40.796 14.774 56.173 56.173 0 0 0 39.154-18.694 56.272 56.272 0 0 0 87.97-6.321 56.263 56.263 0 0 0 9.78-31.809v-33.17h-29.54Zm-15.67 125.11c7.693 0 13.93-6.237 13.93-13.93 0-7.694-6.237-13.93-13.93-13.93s-13.93 6.236-13.93 13.93c0 7.693 6.237 13.93 13.93 13.93Zm-52.26-133.46c7.826 0 14.17-6.344 14.17-14.17s-6.344-14.17-14.17-14.17-14.17 6.344-14.17 14.17 6.344 14.17 14.17 14.17Zm82.81 132.69c7.693 0 13.93-6.237 13.93-13.93 0-7.694-6.237-13.93-13.93-13.93s-13.93 6.236-13.93 13.93c0 7.693 6.237 13.93 13.93 13.93Z" fill="#2F322E"/><defs><linearGradient id="a" x1="-790.282" y1="-571.693" x2="-444.85" y2="947.268" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#5B5B5B"/><stop offset=".99" stop-color="#1A1E1C"/></linearGradient><linearGradient id="b" x1="-519.128" y1="-469.469" x2="204.009" y2="1898.19" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#5B5B5B"/><stop offset=".99" stop-color="#1A1E1C"/></linearGradient><linearGradient id="c" x1="-898.801" y1="-726.812" x2="-185.799" y2="1625.67" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#5B5B5B"/><stop offset=".99" stop-color="#1A1E1C"/></linearGradient><linearGradient id="d" x1="-77.56" y1="-22.905" x2="7.68" y2="284.056" gradientUnits="userSpaceOnUse"><stop stop-color="#fff" stop-opacity=".7"/><stop offset=".95" stop-color="#fff" stop-opacity="0"/></linearGradient></defs></svg>
			</a>
			<a href="https://kadiner.ir/product/%d8%a7%d8%b3%d8%aa%db%8c%da%a9%d8%b1-%d8%a7%d8%ae%d8%aa%d8%b5%d8%a7%d8%b5%db%8c" class="generalButton">چاپ اختصاصی</a>
			<div class="menuProductParent">
				<span class="menuProductParentSvgPart"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none"><path fill="#000" fill-rule="evenodd" d="M19 4a1 1 0 0 1-1 1H2a1 1 0 0 1 0-2h16a1 1 0 0 1 1 1zm0 6a1 1 0 0 1-1 1H2a1 1 0 1 1 0-2h16a1 1 0 0 1 1 1zm-1 7a1 1 0 1 0 0-2H2a1 1 0 1 0 0 2h16z"></path></svg></span>
				<span class="menuProductParentTitlePart">محصولات</span>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'container_class'=>'productMenu',
						)
					);
				?>
				<!-- <div class="menuProductItems"></div> -->
			</div>
		</div>
	</div>
	
	<div class="mainSiteOverlay"></div>






