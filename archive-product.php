<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<div class="container">
		<?php 
			$category = get_queried_object();
			echo '<span class="jb_cat_subheading">'.get_field('cat_sub_heading', $category).'</span>';
			echo '<h1 class="jb_cat_heading">'.get_field('cat_heading', $category).'</h1>';
			if(is_shop()) {
				echo '<h1 class="jb_cat_heading">SHOP</h1>';
			}
		?>
	</div>
</header>



<?php if (isset($_GET['swoof'])): ?>

    <script>
        jQuery(function ($) {
//            alert('tyes');
        });
    </script>

<?php endif; ?>


	

<?php
if ( woocommerce_product_loop() ) { ?>
	
<div class="jb_archive_breadcrumb">
	 <?php woocommerce_breadcrumb(); ?>
</div>
<?php

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );
	
	?>

<div class="jb_product_div">
<?php

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();
	?>
</div>

<?php

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );





?>

<?php if(wp_is_mobile()) { ?>
<?php add_shortcode('wc_sorting','woocommerce_catalog_ordering'); ?>
<div class="jb_archive_footer">
	 <div class="jb_archive_footer_row">
		 <div class="jb_filter_text"><span class="material-icons">filter_list</span>Filter</div>
		 <div class="jb_sort_icon"><span class="material-icons jb_sorting_icon">sort</span><?php  echo do_shortcode('[wc_sorting]'); ?></div>
	</div>
</div>
<?php } ?>
<?php if(wp_is_mobile()) { remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 ); } ?>

<?php if(wp_is_mobile()) { ?>
<script type="text/javascript">

jQuery(document).ready(function($){
      
$('.jb_filter_text').on('click',function() {
    if($('.et_right_sidebar #sidebar').css('left')=='0px'){
        $('.et_right_sidebar #sidebar').animate({left: '-100%'}, 200);        
    }else{
        $('.et_right_sidebar #sidebar').animate({left:0}, 200); 
    }
});
	$('.jb_filter_span i').on('click',function() {
		alert('as');
		$('.et_right_sidebar #sidebar').animate({left: '-100%'}, 200);        
	});
	
	$( '<span class="jb_filter_span">Filter Products <i class="fa fa-arrow-left" aria-hidden="true"></i></span>' ).prependTo( "#sidebar" );

    });
</script>
<?php } ?>



<?php

echo do_shortcode('[ds_layout_sc id="615"]');
echo do_shortcode('[ds_layout_sc id="617"]');
echo do_shortcode('[ds_layout_sc id="616"]');


get_footer( 'shop' );
