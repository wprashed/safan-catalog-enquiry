<?php

function scatalog_custom_css(){
	
	// Get CSS Options From Style Setting 

	$margin 	= get_option( 'wc_settings_tab_scatalog_button_margin' );
	$padding 	= get_option( 'wc_settings_tab_scatalog_button_padding' );
	$background = get_option( 'wc_settings_tab_scatalog_button_background' );
	$border 	= get_option( 'wc_settings_tab_scatalog_button_border' );
	$color 		= get_option( 'wc_settings_tab_scatalog_button_color' );
	$custom 	= get_option( 'wc_settings_tab_scatalog_custom_css' );

    ?>
	<style>

	/* Enquiry Button Style */

	#scatalog_Enquiry_button{
		margin: <?php echo esc_attr($margin); ?> !important;
		display: inline-block !important;
	    font-weight: 500 !important;
	    color: <?php echo esc_attr($color); ?> !important;
	    background-color: <?php echo esc_attr($background); ?> !important;
	    border-color: <?php echo esc_attr($border); ?> !important;
	    text-align: center !important;
	    vertical-align: middle !important;
	    cursor: pointer !important;
	    -webkit-user-select: none !important;
	    -moz-user-select: none !important;
	    -ms-user-select: none !important;
	    user-select: none !important;
	    border: 1px solid transparent !important;
	    padding: <?php echo esc_attr($padding); ?> !important;
	    font-size: 1rem !important;
	    line-height: 1.5 !important;
	    border-radius: .25rem !important;
	    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out !important;
	}

	/* Enquiry Form Style */
	
	.wpcf7-form-control-wrap input{
	    display: block !important;
	    width: 100% !important;
	    height: calc(1.5em + .75rem + 2px) !important;
	    padding: .375rem .75rem !important;
	    font-size: 1rem !important;
	    font-weight: 400 !important;
	    line-height: 1.5 !important;
	    color: #495057 !important;
	    background-color: #fff !important;
	    background-clip: padding-box !important;
	    border: 1px solid #ced4da !important;
	    border-radius: .25rem !important;
	    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out !important;
	}

	.wpcf7-form-control-wrap textarea{
		height: 250px !important;
	}

	/* Enquiry Form Button Style */
	
	.wpcf7-submit{
		margin: <?php echo esc_attr($margin); ?> !important;
		display: inline-block !important;
	    font-weight: 500 !important;
	    color: <?php echo esc_attr($color); ?> !important;
	    background-color: <?php echo esc_attr($background); ?> !important;
	    border-color: <?php echo esc_attr($border); ?> !important;
	    text-align: center !important;
	    vertical-align: middle !important;
	    cursor: pointer !important;
	    -webkit-user-select: none !important;
	    -moz-user-select: none !important;
	    -ms-user-select: none !important;
	    user-select: none !important;
	    border: 1px solid transparent !important;
	    padding: <?php echo esc_attr($padding); ?> !important;
	    font-size: 1rem !important;
	    line-height: 1.5 !important;
	    border-radius: .25rem !important;
	    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out !important;
	}

	/* Custom CSS */
	
	<?php echo esc_attr($custom); ?>
	</style>
    <?php
}
add_action('wp_head','scatalog_custom_css');
?>