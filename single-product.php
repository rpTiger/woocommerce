<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

<?php
	$category = get_queried_object();
	$catTerms = get_the_terms( get_the_ID(),'product_cat' ); foreach ($catTerms as $cat) { 
		$catname =  $cat->name; 
		$catid = $cat->term_id;
	}

	$thumbnail_id = get_term_meta($catid, 'single_image', true ); 
	// get the image URL
	$img = wp_get_attachment_url( $thumbnail_id ); 
?>
<header class="woocommerce-products-header jb_single_banner" style="background-image: url(<?php echo $img; ?>) !important">
	<div class="container">
		<?php 
			echo '<span class="jb_single_heading">'.$catname.'</span>';
		?>
	</div>
	<?php // echo '<img src="'.$img.'" />'; ?>
</header>



		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );

?>

<div class="jb_single_sliders jb_single_related_sliders">
	<div class="container">
		<h4 class="jb_single_slider_heading">RELATED PRODUCTS</h4>
		<?php
			$product_args = array(
				'posts_per_page' => -1,
				'post_status' => 'publish',
				'post_type' => 'product',
				'orderby' => 'ID',
				'order' => 'ASC',
			);


			$product_args['tax_query'] = array(
				array(
					'taxonomy' => 'product_cat',
					'field' => 'id',
					'terms' => $product->get_category_ids(),
					'operator' => 'IN',
			));

	// 		$allproduct = get_posts($product_args);

			$the_query = new WP_Query( $product_args );
		?>
		
		<div class="jb_product_div jb_arrow jb_black_product jb_product_wrapper owl-carousel owl-theme woocommerce">
			<?php
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post(); global $product; 
						?>
						<div class="jb_product_block jb_product_hover_yellow jb_product_hover">    
							<a href="<?php echo get_permalink( $the_query->post->ID ) ?>" title="<?php echo esc_attr($the_query->post->post_title ? $the_query->post->post_title : $the_query->post->ID); ?>">
								<div class="jb_product_block_img_div">
									<span class="jb_product_block_img">
										<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
										<?php if (has_post_thumbnail( $the_query->post->ID )) echo get_the_post_thumbnail($the_query->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
									</span>
								</div>
									<?php 
									 $average = $product->get_average_rating();
										echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
									?>
								<h5 class="jb_product_block_title"><?php the_title(); ?> <small> <?php echo '&nbsp;- '.$product->get_weight().esc_attr(get_option('woocommerce_weight_unit')); ?></small></h5>
								<span class="jb_product_block_desc"><?php echo $product->get_short_description(); ?></span>
								<div class="jb_product_block_cart <?php $product_cart_id = WC()->cart->generate_cart_id( $product->get_id() );
										$in_cart = WC()->cart->find_product_in_cart( $product_cart_id );
										if ( $in_cart ) { echo 'jb_cart_added'; }?> <?php  echo 'jb_product_block_'.$product->get_id(); ?>">
									<?php // print_r(wp_list_pluck(WC()->cart->get_cart_contents(), 'product_id')); ?>
									<span class="jb_product_block_price">₹ <?php 
										if($product->get_sale_price()) {
												$price = $product->get_sale_price();
											} else { $price = $product->get_regular_price(); }
											echo $price;
										?> 
										<span class="jb_p100_span">
											<?php 
												$weight = $product->get_weight();
												$p100 = (100*$price)/$weight;
												echo '(₹ '.round($p100,2).'/100g)';
											?>
										</span>
									 </span>
									
									<?php
									if($product->is_in_stock()) {
										echo sprintf( '<a href="%s" data-quantity="1" class="%s" %s"><img src="https://jabsons.pegasusdigital.in/wp-content/uploads/icons/Cart icon.svg"><img src="https://jabsons.pegasusdigital.in/wp-content/uploads/icons/Cart - Black.svg" class="added_cart_img" /></a>',
											esc_url( $product->add_to_cart_url() ),
											esc_attr( implode( ' ', array_filter( array(
												'button', 'product_type_' . $product->get_type(),
												$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
												$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
											) ) ) ),
											wc_implode_html_attributes( array(
												'data-product_id'  => $product->get_id(),
												'data-product_sku' => $product->get_sku(),
												'aria-label'       => $product->add_to_cart_description(),
												'rel'              => 'nofollow',
											) ),
										);
									} else  { echo '<span class="jb_ous_span">Out Of Stock</span>'; }
									  ?>
								</div>
							</a>        
						</div>
							 <?php
					endwhile;
				endif;
				wp_reset_query();
			?>
		</div>
	</div>
</div>



<div class="jb_single_sliders jb_single_best_sliders">
	<div class="container">
		<h4 class="jb_single_slider_heading">BEST SELLERS</h4>
		<?php
			$product_args =  array(
        'posts_per_page' => -1,
        'post_type' => 'product',
        'post_status' => 'publish',
        'ignore_sticky_posts' => 1,
        'meta_key' => 'total_sales',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
	'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
				'field' => 'id',
				'terms' => $product->get_category_ids(),
				'operator' => 'IN',
            )
        )
    );

			$the_query = new WP_Query( $product_args );
		?>
		
		<div class="jb_product_div jb_arrow jb_product_wrapper owl-carousel owl-theme woocommerce">
			<?php
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post(); global $product; 
			
			 $total_sale =  get_post_meta( $the_query->post->ID, 'total_sales', true) . ')</p>';
			if($total_sale > 0) {
			
						?>
						<div class="jb_product_block jb_product_hover_yellow jb_product_hover">    
							<a href="<?php echo get_permalink( $the_query->post->ID ) ?>" title="<?php echo esc_attr($the_query->post->post_title ? $the_query->post->post_title : $the_query->post->ID); ?>">
								<div class="jb_product_block_img_div">
									<span class="jb_product_block_img">
										<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
										<?php if (has_post_thumbnail( $the_query->post->ID )) echo get_the_post_thumbnail($the_query->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
									</span>
								</div>
									<?php 
									 $average = $product->get_average_rating();
										echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
									?>
								<h5 class="jb_product_block_title"><?php the_title(); ?> <small> <?php echo '&nbsp;- '.$product->get_weight().esc_attr(get_option('woocommerce_weight_unit')); ?></small></h5>
								<span class="jb_product_block_desc"><?php echo $product->get_short_description(); ?></span>
								<div class="jb_product_block_cart <?php $product_cart_id = WC()->cart->generate_cart_id( $product->get_id() );
										$in_cart = WC()->cart->find_product_in_cart( $product_cart_id );
										if ( $in_cart ) { echo 'jb_cart_added'; }?> <?php  echo 'jb_product_block_'.$product->get_id(); ?>">
									<?php // print_r(wp_list_pluck(WC()->cart->get_cart_contents(), 'product_id')); ?>
									<span class="jb_product_block_price">₹ <?php 
										if($product->get_sale_price()) {
												$price = $product->get_sale_price();
											} else { $price = $product->get_regular_price(); }
											echo $price;
										?> 
										<span class="jb_p100_span">
											<?php 
												$weight = $product->get_weight();
												$p100 = (100*$price)/$weight;
												echo '(₹ '.round($p100,2).'/100g)';
											?>
										</span>
								 	</span>
									<?php
									if($product->is_in_stock()) {
										echo sprintf( '<a href="%s" data-quantity="1" class="%s" %s"><img src="https://jabsons.pegasusdigital.in/wp-content/uploads/icons/Cart icon.svg"><img src="https://jabsons.pegasusdigital.in/wp-content/uploads/icons/Cart - Black.svg" class="added_cart_img" /></a>',
											esc_url( $product->add_to_cart_url() ),
											esc_attr( implode( ' ', array_filter( array(
												'button', 'product_type_' . $product->get_type(),
												$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
												$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
											) ) ) ),
											wc_implode_html_attributes( array(
												'data-product_id'  => $product->get_id(),
												'data-product_sku' => $product->get_sku(),
												'aria-label'       => $product->add_to_cart_description(),
												'rel'              => 'nofollow',
											) ),
										);
									} else  { echo '<span class="jb_ous_span">Out Of Stock</span>'; }
									  ?>
								</div>
							</a>        
						</div>
							 <?php
							}
					endwhile;
				endif;
				wp_reset_query();
			?>
		</div>
	</div>
</div>






<div class="jb_single_sliders jb_single_related_sliders">
	<div class="container">
		<h4 class="jb_single_slider_heading">YOU MAY ALSO LIKE</h4>
		<?php

		$product_args = array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'you_may_like',
                'value' => 'Yes',
                'compare' => '=',
            ),
           
        ), 
    );

			$the_query = new WP_Query( $product_args );
		
		
		?>
		
		<div class="jb_product_div jb_arrow jb_black_product jb_product_wrapper owl-carousel owl-theme woocommerce">
			<?php
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post(); global $product; 
			
			 $total_sale =  get_post_meta( $the_query->post->ID, 'total_sales', true) . ')</p>';
			if($total_sale > 0) {
			
						?>
						<div class="jb_product_block jb_product_hover_yellow jb_product_hover">    
							<a href="<?php echo get_permalink( $the_query->post->ID ) ?>" title="<?php echo esc_attr($the_query->post->post_title ? $the_query->post->post_title : $the_query->post->ID); ?>">
								<div class="jb_product_block_img_div">
									<span class="jb_product_block_img">
										<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
										<?php if (has_post_thumbnail( $the_query->post->ID )) echo get_the_post_thumbnail($the_query->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
									</span>
								</div>
									<?php 
									 $average = $product->get_average_rating();
										echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
									?>
								<h5 class="jb_product_block_title"><?php the_title(); ?> <small> <?php echo '&nbsp;- '.$product->get_weight().esc_attr(get_option('woocommerce_weight_unit')); ?></small></h5>
								<span class="jb_product_block_desc"><?php echo $product->get_short_description(); ?></span>
								<div class="jb_product_block_cart <?php $product_cart_id = WC()->cart->generate_cart_id( $product->get_id() );
										$in_cart = WC()->cart->find_product_in_cart( $product_cart_id );
										if ( $in_cart ) { echo 'jb_cart_added'; }?> <?php  echo 'jb_product_block_'.$product->get_id(); ?>">
									<?php // print_r(wp_list_pluck(WC()->cart->get_cart_contents(), 'product_id')); ?>
									<span class="jb_product_block_price">₹ <?php 
										if($product->get_sale_price()) {
												$price = $product->get_sale_price();
											} else { $price = $product->get_regular_price(); }
											echo $price;
										?> 
										<span class="jb_p100_span">
											<?php 
												$weight = $product->get_weight();
												$p100 = (100*$price)/$weight;
												echo '(₹ '.round($p100,2).'/100g)';
											?>
										</span>
								 	</span>
									<?php
									if($product->is_in_stock()) {
										echo sprintf( '<a href="%s" data-quantity="1" class="%s" %s"><img src="https://jabsons.pegasusdigital.in/wp-content/uploads/icons/Cart icon.svg"><img src="https://jabsons.pegasusdigital.in/wp-content/uploads/icons/Cart - Black.svg" class="added_cart_img" /></a>',
											esc_url( $product->add_to_cart_url() ),
											esc_attr( implode( ' ', array_filter( array(
												'button', 'product_type_' . $product->get_type(),
												$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
												$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
											) ) ) ),
											wc_implode_html_attributes( array(
												'data-product_id'  => $product->get_id(),
												'data-product_sku' => $product->get_sku(),
												'aria-label'       => $product->add_to_cart_description(),
												'rel'              => 'nofollow',
											) ),
										);
									} else  { echo '<span class="jb_ous_span">Out Of Stock</span>'; }
									  ?>
								</div>
							</a>        
						</div>
							 <?php
							}
					endwhile;
				endif;
				wp_reset_query();
			?>
		</div>
	</div>
</div>





<?php

echo do_shortcode('[ds_layout_sc id="615"]');
echo do_shortcode('[ds_layout_sc id="617"]');
echo do_shortcode('[ds_layout_sc id="616"]');


get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
