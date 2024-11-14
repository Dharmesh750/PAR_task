<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
	wp_enqueue_script("jquery");
	wp_enqueue_script( 'astra-child-theme-js', get_stylesheet_directory_uri() . '/script.js', array(),false);

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function subscribe_plan(){ ?>
	<div id="subscribe_process">
		<form id="subscribe_form">
			<select id="subcribe_plan">
				<option value="0">Select the Plan</option>
				<option value="student">Student Plan</option>
				<option value="professional">Professional Plan</option>
			</select>
			<div id="option_form">
				<select id="option_type" style="display:none">
					<option value="0">Select the option</option>
					<option value="pickup">Pickup/Dine-in</option>
					<option value="delivery">Delivery</option>
				</select>
			</div>
			<div id="pickup_form">
				<select id="option_pickup" style="display:none">
					<option value="0">Select the adresss</option>
					<option value="pickup">Pickup/Dine-in</option>
					<option value="delivery">Delivery</option>
				</select>
			</div>
		</form>

	</div>
<?php }
add_shortcode("subscribe","subscribe_plan");