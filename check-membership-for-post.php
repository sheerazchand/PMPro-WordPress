/*
* This code will check the membership from Database for Specific post
* Place this in Functions.php
*/

if(!is_admin()){
	function shortcode_membership(){
		global $current_user;
		global $wpdb;
		
		$page_ids = $wpdb->get_col( "SELECT membership_id FROM {$wpdb->pmpro_memberships_pages} WHERE page_id = '" . get_the_ID() . "'" );
		
		$current_user->membership_level = pmpro_getMembershipLevelForUser($current_user->ID);
		
		if(in_array($current_user->membership_level->ID, $page_ids)){
			echo "membership-yes";
		}
		else{
			echo "membership-no";
		}
		
	}
	add_shortcode('membership_level_shortcode','shortcode_membership');
}
