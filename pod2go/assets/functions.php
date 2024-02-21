<?php
/*This file is part of HelloElementorChild, hello-elementor child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function HelloElementorChild_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'HelloElementorChild_enqueue_child_styles' );

/*Write here your own functions */

/**
* Get stock data CRON
*/

function getStockData(){
    $curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, 'https://www.jamstockex.com/wp-json/jse-api/v1/latest');
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

    $jsonData = json_decode(curl_exec($curlSession));
    curl_close($curlSession);
    if(!empty($jsonData)){
       $data  = $jsonData->markets->{"main-market"}->instruments->{"138SL"}->data[0];
      //HOME PAGE  
       //Closing Price
       update_post_meta( 7, 'Close_Price', "$".number_format($data->ClosePrice,2) );
      //Last Traded Price
       update_post_meta( 7, 'Last_Traded_Price', "$".number_format($data->LastTradePrice,2) );
      //fiftytwo_Week_Range 
       update_post_meta( 7, 'fiftytwo_Week_Range','Close Price<br/><span class="WeekRange52" style="font-size: 11px; font-weight: normal">52 Week Range: $'.number_format($data->Low52Week,2).' to $'.number_format($data->High52Week,2).' </span>' );
      
      //RELATION PAGE
          //Closing Price
       update_post_meta( 232, 'Close_Price', "$".number_format($data->ClosePrice,2) );
      //Last Traded Price
       update_post_meta( 232, 'Last_Traded_Price', "$".number_format($data->LastTradePrice,2) );
      //fiftytwo_Week_Range 
       update_post_meta( 232, 'fiftytwo_Week_Range','Close Price<br/><span class="WeekRange52" style="font-size: 11px; font-weight: normal">52 Week Range: $'.number_format($data->Low52Week,2).' to $'.number_format($data->High52Week,2).' </span>' );
         //Volume Traded
        update_post_meta( 232, 'Volume_traded', number_format($data->VolumeTradedToday,0) );
          //Change_dollar
        update_post_meta( 232, 'Change_dollar', "$".number_format($data->TodayPriceChange,2) );
          //Volume Traded
        update_post_meta( 232, 'Change_percentage', number_format($data->TodayPercentageChange,0) );

  
   }
 }
 add_action('getJSE', 'getStockData');

 add_action('admin_menu', 'register_custom_menu_page');
function register_custom_menu_page() {
    add_submenu_page('Rental Application', 'Rental Application', 'edit_posts', 'rental_application', 'rental_application_callback', null);
}