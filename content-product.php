<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>


<li <?php wc_product_class( '', $product ); ?>>
	
	

	<div class="jb_product_block jb_product_hover_yellow jb_product_hover">    
	                <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
	                	<div class="jb_product_block_img_div">
		                	<span class="jb_product_block_img">
		                		<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
		                		<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
		                	</span>
		                </div>
	                        <?php 
	                         $average = $product->get_average_rating();
	                        	echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
	                        ?>
	                    <h5 class="jb_product_block_title"><?php the_title(); ?> <small> <?php echo '&nbsp;- '.$product->get_weight().esc_attr(get_option('woocommerce_weight_unit')); ?></small></h5>
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
							} else {  }
							
				                
				              ?>
				        </div>
	                </a>        
	            </div>


<?php
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>