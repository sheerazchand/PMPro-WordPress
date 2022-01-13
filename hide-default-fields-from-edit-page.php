<?php
/*
* Here is how you can hide default fields
* such as First Name, Last Name and Display Name
* From Edit page of PMPro
* Place this code in function.php
*/

function mypmpro_member_profile_edit_user_object_fields($fields) {
	unset($fields['first_name']);
	unset($fields['last_name']);
	unset($fields['display_name']);
	return $fields;
}

add_filter('pmpro_member_profile_edit_user_object_fields', 'mypmpro_member_profile_edit_user_object_fields', 10 , 1);

