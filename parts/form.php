<?php

/** 
* Display Button and Echo CF7
*
*/

// Add inquiry Button

function scatalog_display_inquiry_button() {

  $label = get_option( 'wc_settings_tab_scatalog_form_label' );
  $form = get_option( 'wc_settings_tab_scatalog_form_shortcode' );
  if(get_option( 'wc_settings_tab_scatalog_form_show_inquiry_button' ) == 'yes') {
    echo '<button type="submit" id="scatalog_inquiry_button" class="single_add_to_cart_button button alt">';
    echo esc_attr($label); 
    echo '</button>';
    echo '<div id="scatalog_product_inq" style="display:none">';
    echo do_shortcode($form);
    echo '</div>';
  }

}

add_action( 'woocommerce_single_product_summary', 'scatalog_display_inquiry_button', 30 );
 
// Add inquiry Form

function scatalog_display_inquiry_form() {

  $labels = get_option( 'wc_settings_tab_scatalog_form_label' );

?>
  <script type="text/javascript">
    jQuery('#scatalog_inquiry_button').on('click', function(){
      var label = '<?php echo esc_attr($labels); ?>';
      if ( jQuery(this).text() == label ) {
        jQuery('#scatalog_product_inq').css("display","block");
        jQuery('input[name="your-subject"]').val('<?php the_title(); ?>');
        jQuery("#scatalog_inquiry_button").html('Close'); 
      } else {
          jQuery('#scatalog_product_inq').hide();
          jQuery("#scatalog_inquiry_button").html(label); 
        }
    });
  </script>
<?php

}

add_action( 'woocommerce_single_product_summary', 'scatalog_display_inquiry_form', 40 );