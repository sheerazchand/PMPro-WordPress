 //Add this jQuery
  jQuery('#pmpro_form label').each(function(){
    if(jQuery(this).next().hasClass('pmpro_required')){
        jQuery(this).append('<span class="mt-required">(Required)*</span>');
    }

    if(jQuery(this).next().hasClass('StripeElement')){
        jQuery(this).append('<span class="mt-required">(Required)*</span>');
    }

    if(jQuery(this).parent().hasClass('pmpro_checkout-field-required') && jQuery(this).parent().hasClass('pmpro_checkout-field-checkbox_grouped') ){
        jQuery(this).append('<span class="mt-required">(Required)*</span>');
    } 
  });

//Add this CSS
.mt-required {
  float: right;
  text-transform: Capitalize;
  color: red;
  font-weight: 300;
  font-size: 14px;
}

//Hide Existing Mark
.pmpro-checkout span.pmpro_asterisk {
    display: none;
}
