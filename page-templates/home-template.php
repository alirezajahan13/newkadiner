<?php
/*

Template Name: Home

*/

$homepage_sliders_mb = get_field( "homepage_sliders_mb");
$minislider_right_up = get_field( "minislider_right_up");
$minislider_right_down = get_field( "minislider_right_down");
$grid_banner_under_slider = get_field( "grid_banner_under_slider");
$grid_middle__home_mb = get_field( "grid_middle__home_mb");
$kadiner_custom_mb_pro_is_active = get_field('kadiner_custom_mb_pro_is_active' , 'options');
$kadiner_custom_mb_pro_products = get_field('kadiner_custom_mb_pro_products', 'options');
get_header();
?>

<div class="kadinerIntroSectionContainer sectionPadding">
    <div class="kadinerIntroSection mainView">
        <div class="generalHeading">
            <h2>کادینر، مرجع خرید استیکر لپتاپ و گوشی، ماگ و کتاب زبان اصلی</h2>
        </div>
        <div class="introFlexBannerContainer">
            <div class="generalBannerParentRight">
                <?php if($minislider_right_up){
                    echo '<a href=" '. $minislider_right_up['link']['url'] .' "><img src=" '. $minislider_right_up['image']['url'] .' " alt=""></a>';
                } ?>
                <?php if($minislider_right_down){
                    echo '<a href=" '. $minislider_right_down['link']['url'] .' "><img src=" '. $minislider_right_down['image']['url'] .' " alt=""></a>';
                } ?>
            </div>
            <div class="introSliderParentLeft">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php 
                            foreach($homepage_sliders_mb as $homeslider){
                                echo '<a href=" '. $homeslider['slider_link_mb']['url'] .' " class="swiper-slide"><img src=" '. $homeslider['slider_img_mb']['url'] .' " alt=""></a>';
                            }
                        ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="kadinerProductCat mainView">
        <?php foreach($grid_banner_under_slider as $gridbaner){
            echo '<a href=" '. $gridbaner['link']['url'] .' " class="swiper-slide"><img src=" '. $gridbaner['image']['url'] .' " alt=""></a>';
        } ?>
    </div>
</div>
<div class="generalKadinerHomeProductCaontainer sectionPadding woocommerce HomePromotion">

    <?php if($kadiner_custom_mb_pro_is_active){ ?>
    <div class="promotionBackgroundOverlay"></div>
    <div class="homeProductContainer mainView kadinerPromotion">
        
        <div class="sectionHeader">
            <div class="generalHeading promotionHeading">
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
            <a href="https://kadiner.ir/product-category/sticker/" class="generalButton productSectionDesktopBtn promotionLinkBtn">مشاهده همه</a>
        </div>
        <?php customSaleCounter(); ?>
        <div class="swiper stickerProductSwiper">
            <ul class="swiper-wrapper products">
                <?php
                    $arrayOfPromotions = array();
                    foreach($kadiner_custom_mb_pro_products as $pro){
                        if($pro['is_on_home']){
                            $arrayOfPromotions[]=$pro['product'];
                        }
                    }
                    $getProductsArgs = array(
                        'post_type'=>'product',
                        'posts_per_page'=>10,
                        'post__in' => $arrayOfPromotions
                    );
                    $getProductsQuery = new WP_Query($getProductsArgs);
                    while($getProductsQuery->have_posts()): $getProductsQuery->the_post();
                        wc_get_template_part( 'content', 'product-swiper' );
                    endwhile;
                    wp_reset_postdata();
                ?>
            </ul>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
        <a href="https://kadiner.ir/product-category/sticker/" class="generalButton productSectionMobileBtn">مشاهده همه</a>
        
    </div>
    <?php } ?>
    
</div>
<div class="generalKadinerHomeProductCaontainer sectionPadding woocommerce">
    <div class="homeProductContainer mainView">
        <div class="sectionHeader">
            <div class="generalHeading">
                <h2>خرید استیکر لپ تاپ و گوشی</h2>
            </div>
            <a href="https://kadiner.ir/product-category/sticker/" class="generalButton productSectionDesktopBtn">همه استیکرها</a>
        </div>
        <div class="swiper stickerProductSwiper">
            <ul class="swiper-wrapper products">
                <?php
                    $getProductsArgs = array(
                        'post_type'=>'product',
                        'posts_per_page'=>10,
                        'tax_query'=>array(
                            array(
                                'taxonomy'=>'product_cat',
                                'terms'=>'22',
                                'field'=>'term_id',
                            ),
                        ),
                    );
                    $getProductsQuery = new WP_Query($getProductsArgs);
                    while($getProductsQuery->have_posts()): $getProductsQuery->the_post();
                        wc_get_template_part( 'content', 'product-swiper' );
                    endwhile;
                    wp_reset_postdata();
                ?>
            </ul>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
        <a href="https://kadiner.ir/product-category/sticker/" class="generalButton productSectionMobileBtn">همه استیکرها</a>
    </div>
</div>
<div class="generalKadinerHomeProductCaontainer sectionPadding woocommerce">
    <div class="homeProductContainer mainView">
        <div class="sectionHeader">
            <div class="generalHeading">
                <h2>خرید کتاب زبان اصلی</h2>
            </div>
            <a href="https://kadiner.ir/product-category/%d8%ae%d8%b1%db%8c%d8%af-%da%a9%d8%aa%d8%a7%d8%a8-%d8%b2%d8%a8%d8%a7%d9%86-%d8%a7%d8%b5%d9%84%db%8c/" class="generalButton productSectionDesktopBtn">همه کتاب‌ها</a>
        </div>
        <div class="swiper bookProductSwiper">
                <ul class="swiper-wrapper products">
                    <?php
                        $getProductsArgs = array(
                            'post_type'=>'product',
                            'posts_per_page'=>10,
                            'tax_query'=>array(
                                array(
                                    'taxonomy'=>'product_cat',
                                    'terms'=>'3559',
                                    'field'=>'term_id',
                                ),
                            ),
                        );
                        $getProductsQuery = new WP_Query($getProductsArgs);
                        while($getProductsQuery->have_posts()): $getProductsQuery->the_post();
                            wc_get_template_part( 'content', 'product-swiper' );
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </ul>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- <div class="swiper-pagination"></div> -->
        </div>
        <a href="https://kadiner.ir/product-category/%d8%ae%d8%b1%db%8c%d8%af-%da%a9%d8%aa%d8%a7%d8%a8-%d8%b2%d8%a8%d8%a7%d9%86-%d8%a7%d8%b5%d9%84%db%8c/" class="generalButton productSectionMobileBtn">همه کتاب‌ها</a>
    </div>
</div>
<div class="homeSerialBanerContainer sectionPadding">
    <div class="homeSerialBaner mainView">
        <?php foreach($grid_middle__home_mb as $gridmiddle){
            echo '<a href=" '. $gridmiddle['link']['url'] .' " class="swiper-slide"><img src=" '. $gridmiddle['image']['url'] .' " alt=""></a>';
        } ?>
    </div>
</div>
<div class="generalKadinerHomeProductCaontainer sectionPadding woocommerce">
    <div class="homeProductContainer mainView">
        <div class="sectionHeader">
            <div class="generalHeading">
                <h2>خرید ماگ و لیوان</h2>
            </div>
            <a href="https://kadiner.ir/product-category/mug/" class="generalButton productSectionDesktopBtn">همه ماگ‌ها</a>
        </div>
        <div class="swiper mugProductSwiper">
            <ul class="swiper-wrapper products">
                <?php
                    $getProductsArgs = array(
                        'post_type'=>'product',
                        'posts_per_page'=>10,
                        'tax_query'=>array(
                            array(
                                'taxonomy'=>'product_cat',
                                'terms'=>'3499',
                                'field'=>'term_id',
                            ),
                        ),
                    );
                    $getProductsQuery = new WP_Query($getProductsArgs);
                    while($getProductsQuery->have_posts()): $getProductsQuery->the_post();
                        wc_get_template_part( 'content', 'product-swiper' );
                    endwhile;
                    wp_reset_postdata();
                ?>
            </ul>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
        <a href="https://kadiner.ir/product-category/mug/" class="generalButton productSectionMobileBtn">همه ماگ‌ها</a>
    </div>
</div>
<div class="generalKadinerHomeProductCaontainer sectionPadding woocommerce">
    <div class="homeProductContainer mainView">
        <div class="sectionHeader">
            <div class="generalHeading">
                <h2>خرید شیت استیکر</h2>
            </div>
            <a href="https://kadiner.ir/product-category/sticker-sheet/" class="generalButton productSectionDesktopBtn">همه شیت استیکرها</a>
        </div>
        <div class="swiper sheetStickerProductSwiper">
            <ul class="swiper-wrapper products">
                <?php
                    $getProductsArgs = array(
                        'post_type'=>'product',
                        'posts_per_page'=>10,
                        'tax_query'=>array(
                            array(
                                'taxonomy'=>'product_cat',
                                'terms'=>'3342',
                                'field'=>'term_id',
                            ),
                        ),
                    );
                    $getProductsQuery = new WP_Query($getProductsArgs);
                    while($getProductsQuery->have_posts()): $getProductsQuery->the_post();
                        wc_get_template_part( 'content', 'product-swiper' );
                    endwhile;
                    wp_reset_postdata();
                ?>
            </ul>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
        <a href="https://kadiner.ir/product-category/sticker-sheet/" class="generalButton productSectionMobileBtn">همه شیت استیکرها</a>
    </div>
</div>
<div class="kadinerHomeLatestBlogContainer sectionPadding">
    <div class="kadinerHomeLatestBlog mainView">
        <div class="sectionHeader">
            <div class="generalHeading">
                <h2>آخرین مطالب بلاگ</h2>
            </div>
            <a href="https://kadiner.ir/blog/" class="generalButton productSectionDesktopBtn">همه بلاگ</a>
        </div>
        <div class="swiper lastPostBlogSwiper">
            <div class="swiper-wrapper">
            <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 6,
                    'order'          => 'DESC',
                    'orderby'        => 'date',
                );

                $query = new WP_Query($args);

                while ($query->have_posts()) : $query->the_post();
                ?>
                    <a href="<?php the_permalink(); ?>" class="lastPostBlogLink swiper-slide">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="postImageSec">
                                <?php the_post_thumbnail(); ?>
                                <div class="datePublishedPost">
                                    <span class="date"><?php echo esc_html(get_the_date('d')); ?></span>
                                    <span class="month"><?php echo esc_html(get_the_date('F')); ?></span>
                                </div>
                            </div>
                        <?php endif; ?>

                        <h2 class="smallHeading"><?php the_title(); ?></h2>
                    </a>
                <?php endwhile;
                wp_reset_postdata();
            ?>
            </div>
            <div class="lastPostSwiper-pagination"></div>
        </div>
        <a href="https://kadiner.ir/blog/" class="generalButton productSectionMobileBtn">همه بلاگ</a>
    </div>
</div>
<div class="kadinerCtaSectionContainer sectionPadding">
    <div class="kadinerCtaSection mainView">
        <div class="generalKadinerCtaColumn">
            <div class="generalHeading">
                <h3>درباره کادینر</h3>
            </div>
            <p>کادینر، دنیای استیکر و برچسب لپ‌تاپ و گوشی هست، شما توی کادینر خیلی راحت می‌تونید از بین صدها طرح موجود استیکرهای مد نظر خودتون رو انتخاب کنید و خیلی زود تحویلشون بگیرید. توی کادینر ما انواع مختلف استیکر در دسته‌بندی‌های متنوع رو داریم. </p>
            <a href="https://kadiner.ir/about-us/">بیشتر بخوانید</a>
        </div>
        <div class="generalKadinerCtaColumn">
            <div class="generalHeading">
                <h3>چاپ استیکر اختصاصی</h3>
            </div>
            <p>خیلی وقت‌ها بعضی عکس‌ها یا طرح‌هایی که داریم رو دوست داریم تبدیل کنیم به طرح‌های واقعی‌ای که بتونیم جاهای مختلف ازش استفاده کنیم، توی کادینر، میتونید طرح‌های دلخواهتون رو تبدیل کنید به استیکرهای خفن تازه بدون اینکه هزینه‌ی بیشتری بخواید پرداخت کنید.</p>
            <a href="https://kadiner.ir/product/%d8%a7%d8%b3%d8%aa%db%8c%da%a9%d8%b1-%d8%a7%d8%ae%d8%aa%d8%b5%d8%a7%d8%b5%db%8c/">خرید استیکر اختصاصی</a>
        </div>
    </div>
</div>
<?php
get_footer();