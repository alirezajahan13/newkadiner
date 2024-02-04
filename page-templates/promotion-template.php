<?php
/*

Template Name: Promotion Template

*/
$kadiner_custom_mb_pro_is_active = get_field('kadiner_custom_mb_pro_is_active' , 'options');
$kadiner_custom_mb_pro_products = get_field('kadiner_custom_mb_pro_products', 'options');
get_header();
?>
<div class="promotionPage mainView archive woocommerce">
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php echo get_the_title(); ?></h1>
	<?php endif; ?>
	<div class="customProductSortWrapper">
		<div class="customProductSort">
			<div class="customProductSortTitle">مرتب سازی بر اساس:</div>
			<div class="customProductSortTitle customProductSortTitleMobile"><svg width="24" height="24" viewBox="0 0 24 24" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"><path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2" d="m10 15-4 4-4-4"/><path data-name="primary" d="M6 19V4m14 12h-5m5-5h-7m7-5H10" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2"/></svg></div>
			<div class="customProductSortOptions">
				<a class="<?php echo (isset($_GET['orderby'])) ? (''):('activeProductSort') ?>" href=".<?php echo $_GET['in_stock']? '?in_stock=1':''; ?>">جدیدترین</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='popularity') ? ('activeProductSort'):('') ?>" href="?<?php echo $_GET['in_stock']? 'in_stock=1&':''; ?>orderby=popularity">محبوب‌ترین</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='rating') ? ('activeProductSort'):('') ?>" href="?<?php echo $_GET['in_stock']? 'in_stock=1&':''; ?>orderby=rating">رتبه‌بندی</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='price') ? ('activeProductSort'):('') ?>" href="?<?php echo $_GET['in_stock']? 'in_stock=1&':''; ?>orderby=price">ارزان‌ترین</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='price-desc') ? ('activeProductSort'):('') ?>" href="?<?php echo $_GET['in_stock']? 'in_stock=1&':''; ?>orderby=price-desc">گران‌ترین</a>
			</div>
			<div class="customProductSortOptions customProductSortOptionsMobile">
				<span>مرتب سازی بر اساس:</span>
				<a class="<?php echo (isset($_GET['orderby'])) ? (''):('activeProductSort') ?>" href=".<?php echo $_GET['in_stock']? '?in_stock=1':''; ?>">جدیدترین</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='popularity') ? ('activeProductSort'):('') ?>" href="?<?php echo $_GET['in_stock']? 'in_stock=1&':''; ?>orderby=popularity">محبوب‌ترین</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='rating') ? ('activeProductSort'):('') ?>" href="?<?php echo $_GET['in_stock']? 'in_stock=1&':''; ?>orderby=rating">رتبه‌بندی</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='price') ? ('activeProductSort'):('') ?>" href="?<?php echo $_GET['in_stock']? 'in_stock=1&':''; ?>orderby=price">ارزان‌ترین</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='price-desc') ? ('activeProductSort'):('') ?>" href="?<?php echo $_GET['in_stock']? 'in_stock=1&':''; ?>orderby=price-desc">گران‌ترین</a>
			</div>
		</div>
		<div class="customProductStockSort">
			<div class="customProductStockSortLabel">فقط موجودها:</div>
			<label class="toggle">
				<input type="checkbox">
				<span class="slider"></span>
			</label>
		</div>
	</div>
</header>
<div class="kadinerPromotion promotionPageCountDownSec">
	<div class="sectionHeader mainView">
		<div class="generalHeading">
			<h2>شگفت‌انگیزهای کادینر</h2>
		</div>
		<div class="kadinerSaleCountDown">
			<span class="remainingText">زمان باقی‌مانده:</span>
			<span class="countDownNumber" id="kadinerSaleSeconds">00</span>
			<span class="divider">:</span>
			<span class="countDownNumber" id="kadinerSaleMinutes">00</span>
			<span class="divider">:</span>
			<span class="countDownNumber" id="kadinerSaleHours">00</span>
		</div>
		<a href="https://kadiner.ir/product-category/sticker/" class="generalButton productSectionDesktopBtn">مشاهده همه</a>
	</div>
</div>
    <ul class="products">
    <?php
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $arrayOfPromotions = array();
        foreach($kadiner_custom_mb_pro_products as $pro){
            if($pro['is_on_home']){
                $arrayOfPromotions[]=$pro['product'];
            }
        }
        $getProductsArgs = array(
            'post_type'=>'product',
            'posts_per_page'=>3,
            'post__in' => $arrayOfPromotions,
			'paged'=>$paged,
        );
        $getProductsQuery = new WP_Query($getProductsArgs);
        while($getProductsQuery->have_posts()): $getProductsQuery->the_post();
            wc_get_template_part( 'content', 'product' );
        endwhile;
        echo '</ul>';
		echo '<div class="paginationParent">';
		$offerPaginationArgs = array(
			'total' => $getProductsQuery->max_num_pages,
			'current' => max( 1, get_query_var( 'paged' ) ),
			'prev_text' => __( '→', 'kadiner' ),
			'next_text' => __( '←', 'kadiner' ),
		);
			echo paginate_links($offerPaginationArgs);
		echo '</div>';
        wp_reset_postdata();
    ?>
</div>
<?php get_footer(); ?>