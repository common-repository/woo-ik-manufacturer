<?php

//Frontend Product detail page
function display_manufacturer()
{
	 global $product;
	 $id = $product->id;
	$manufacturer = get_post_meta( $id, 'meta_box_manufacturer', true );
	
	echo "<p><b>Manufacturer:</b> $manufacturer</p>";

   
}

add_action('woocommerce_single_product_summary', 'display_manufacturer', 15 );

?>