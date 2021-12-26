<?php

//----------------------------------------------------------------------------------
// hooking into archive-product.php to add some html div's and classes for styling
//----------------------------------------------------------------------------------

add_action('woocommerce_before_main_content', 'fancy_lab_open_container_row', 5); // ensure priorities are in correct order so that divs appear ion the ight order on the page
function fancy_lab_open_container_row() {
	echo '<div class="container shop-content"><div class="row">';
 }

 //-----------------------------

add_action('woocommerce_after_main_content', 'fancy_lab_close_container_row', 5);
function fancy_lab_close_container_row() {
	echo '</div></div>';
}

//-----------------------------

// Add div and classes for sidebar
add_action('woocommerce_before_main_content', 'fancy_lab_add_sidebar_tags', 6);
function fancy_lab_add_sidebar_tags() {
	echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
};

//-----------------------------

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar'); // always rmeove same priority as when add_action was addeded. in this case it was left blank so defaulted to 10
add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);

add_action('woocommerce_before_main_content', 'fancy_lab_close_sidebar_tags', 8);
function fancy_lab_close_sidebar_tags() {
	echo '</div>';
}

//-----------------------------

add_action('woocommerce_before_main_content', 'fancy_lab_add_shop_tags', 9);
function fancy_lab_add_shop_tags() {
	 echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
 }

add_action('woocommerce_after_main_content', 'fancy_lab_close_shop_tags', 4);
function fancy_lab_close_shop_tags() {
	echo '</div>';
}


// adds excerpt to hook location with priority of first place
add_action('woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);

// FILTERS ---------------------
// first param is the filter (used on archive-product.php main template), second param is new function which we define below 
// add_filter('woocommerce_show_page_title', 'remove_woo_page_title');
// function remove_woo_page_title() {
// 	return false;
// }

?>