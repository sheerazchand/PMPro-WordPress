/*
* This is how you can add the Current PMPro level to Body Class
* Place the code in Functions.php
*/


function add_pmpro_level_id_to_body_class( $classes ) {
	global $current_user;
	if( function_exists( 'pmpro_hasMembershipLevel' ) && pmpro_hasMembershipLevel() ) {  
		$classes[] = 'pmpro-body-has-level-' . $current_user->membership_level->ID;
	}
	return $classes;
}
add_filter( 'body_class', 'add_pmpro_level_id_to_body_class' );
