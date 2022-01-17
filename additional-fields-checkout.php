/*
* Here are the different type of customization for checkout fileds
* This code should be added into functions.php
* The checkout fields are for different levels
*/




function pmpro_customfields_top(){
	if ( ! function_exists( 'pmprorh_add_registration_field' ) ) {
		return false;
	}
	
	$fields = array();
	
	
	
	$fields[] = new PMProRH_Field(
		'acc_address_1',							
		'text',							
		array(
			'label'		=> 'ADDRESS 1',		
			'size'		=> 30,			
			'class'		=> 'acc_address_1',	
			'profile'	=> true,			
			'required'	=> true,			
			'levels'		=> array(1,2,3,4,5,6)
		)
	);
	
	
	$fields[] = new PMProRH_Field(
		'acc_address_2',							
		'text',							
		array(
			'label'		=> 'ADDRESS 2',		
			'size'		=> 30,			
			'class'		=> 'acc_address_2',	
			'profile'	=> true,			
			'required'	=> false,			
			'levels'		=> array(1,2,3,4,5,6)
		)
	);
	
	$fields[] = new PMProRH_Field(
		'acc_city',							
		'text',							
		array(
			'label'		=> 'CITY',		
			'size'		=> 30,			
			'class'		=> 'acc_city',	
			'profile'	=> true,			
			'required'	=> true,			
			'levels'		=> array(1,2,3,4,5,6)
		)
	);
	
	
	$fields[] = new PMProRH_Field(
		'acc_state',							
		'text',							
		array(
			'label'		=> 'STATE',		
			'size'		=> 30,			
			'class'		=> 'acc_state',	
			'profile'	=> true,			
			'required'	=> true,			
			'levels'		=> array(1,2,3,4,5,6)
		)
	);
	
	$fields[] = new PMProRH_Field(
		'acc_postal_code',							
		'text',							
		array(
			'label'		=> 'POSTAL CODE',		
			'size'		=> 30,			
			'class'		=> 'acc_postal_code',	
			'profile'	=> true,			
			'required'	=> true,			
			'levels'		=> array(1,2,3,4,5,6)
		)
	);
	
	$fields[] = new PMProRH_Field(
		'acc_country',							
		'select',						
		array(
			'label'		=> 'COUNTRY',	
			'size'		=> 40,			
			'class'		=> 'acc_country',	
			'profile'	=> true,			
			'required'	=> true,			
			'levels'		=> array(1,2,3,4,5,6),	
			'options' => array(					
                'AF' => 'Afghanistan',
                'AX' => 'Aland Islands',
                'AL' => 'Albania',
                'DZ' => 'Algeria',
                'AS' => 'American Samoa',
                'AD' => 'Andorra',
                'AO' => 'Angola',
                'AI' => 'Anguilla',
                'AQ' => 'Antarctica',
                'AG' => 'Antigua and Barbuda',
                'AR' => 'Argentina',
                'AM' => 'Armenia',
                'AW' => 'Aruba',
                'AU' => 'Australia',
                'AT' => 'Austria',
                'AZ' => 'Azerbaijan',
                'BS' => 'Bahamas',
                'BH' => 'Bahrain',
                'BD' => 'Bangladesh',
                'BB' => 'Barbados',
                'BY' => 'Belarus',
                'BE' => 'Belgium',
                'BZ' => 'Belize',
                'BJ' => 'Benin',
                'BM' => 'Bermuda',
                'BT' => 'Bhutan',
                'BO' => 'Bolivia',
                'BA' => 'Bosnia and Herzegovina',
                'BW' => 'Botswana',
                'BV' => 'Bouvet Island',
                'BR' => 'Brazil',
                'IO' => 'British Indian Ocean Territory',
                'VG' => 'British Virgin Islands',
                'BN' => 'Brunei',
                'BG' => 'Bulgaria',
                'BF' => 'Burkina Faso',
                'BI' => 'Burundi',
                'KH' => 'Cambodia',
                'CM' => 'Cameroon',
                'CA' => 'Canada',
                'CV' => 'Cape Verde',
                'KY' => 'Cayman Islands',
                'CF' => 'Central African Republic',
                'TD' => 'Chad',
                'CL' => 'Chile',
                'CN' => 'China',
                'CX' => 'Christmas Island',
                'CC' => 'Cocos (Keeling) Islands',
                'CO' => 'Colombia',
                'KM' => 'Comoros',
                'CG' => 'Congo (Brazzaville)',
                'CD' => 'Congo (Kinshasa)',
                'CK' => 'Cook Islands',
                'CR' => 'Costa Rica',
                'HR' => 'Croatia',
                'CU' => 'Cuba',
                'CY' => 'Cyprus',
                'CZ' => 'Czech Republic',
                'DK' => 'Denmark',
                'DJ' => 'Djibouti',
                'DM' => 'Dominica',
                'DO' => 'Dominican Republic',
                'EC' => 'Ecuador',
                'EG' => 'Egypt',
                'SV' => 'El Salvador',
                'GQ' => 'Equatorial Guinea',
                'ER' => 'Eritrea',
                'EE' => 'Estonia',
                'ET' => 'Ethiopia',
                'FK' => 'Falkland Islands',
                'FO' => 'Faroe Islands',
                'FJ' => 'Fiji',
                'FI' => 'Finland',
                'FR' => 'France',
                'GF' => 'French Guiana',
                'PF' => 'French Polynesia',
                'TF' => 'French Southern Territories',
                'GA' => 'Gabon',
                'GM' => 'Gambia',
                'GE' => 'Georgia',
                'DE' => 'Germany',
                'GH' => 'Ghana',
                'GI' => 'Gibraltar',
                'GR' => 'Greece',
                'GL' => 'Greenland',
                'GD' => 'Grenada',
                'GP' => 'Guadeloupe',
                'GU' => 'Guam',
                'GT' => 'Guatemala',
                'GG' => 'Guernsey',
                'GN' => 'Guinea',
                'GW' => 'Guinea-Bissau',
                'GY' => 'Guyana',
                'HT' => 'Haiti',
                'HM' => 'Heard Island and McDonald Islands',
                'HN' => 'Honduras',
                'HK' => 'Hong Kong S.A.R., China',
                'HU' => 'Hungary',
                'IS' => 'Iceland',
                'IN' => 'India',
                'ID' => 'Indonesia',
                'IR' => 'Iran',
                'IQ' => 'Iraq',
                'IE' => 'Ireland',
                'IM' => 'Isle of Man',
                'IL' => 'Israel',
                'IT' => 'Italy',
                'CI' => 'Ivory Coast',
                'JM' => 'Jamaica',
                'JP' => 'Japan',
                'JE' => 'Jersey',
                'JO' => 'Jordan',
                'KZ' => 'Kazakhstan',
                'KE' => 'Kenya',
                'KI' => 'Kiribati',
                'KW' => 'Kuwait',
                'KG' => 'Kyrgyzstan',
                'LA' => 'Laos',
                'LV' => 'Latvia',
                'LB' => 'Lebanon',
                'LS' => 'Lesotho',
                'LR' => 'Liberia',
                'LY' => 'Libya',
                'LI' => 'Liechtenstein',
                'LT' => 'Lithuania',
                'LU' => 'Luxembourg',
                'MO' => 'Macao S.A.R., China',
                'MK' => 'Macedonia',
                'MG' => 'Madagascar',
                'MW' => 'Malawi',
                'MY' => 'Malaysia',
                'MV' => 'Maldives',
                'ML' => 'Mali',
                'MT' => 'Malta',
                'MH' => 'Marshall Islands',
                'MQ' => 'Martinique',
                'MR' => 'Mauritania',
                'MU' => 'Mauritius',
                'YT' => 'Mayotte',
                'MX' => 'Mexico',
                'FM' => 'Micronesia',
                'MD' => 'Moldova',
                'MC' => 'Monaco',
                'MN' => 'Mongolia',
                'ME' => 'Montenegro',
                'MS' => 'Montserrat',
                'MA' => 'Morocco',
                'MZ' => 'Mozambique',
                'MM' => 'Myanmar',
                'NA' => 'Namibia',
                'NR' => 'Nauru',
                'NP' => 'Nepal',
                'NL' => 'Netherlands',
                'AN' => 'Netherlands Antilles',
                'NC' => 'New Caledonia',
                'NZ' => 'New Zealand',
                'NI' => 'Nicaragua',
                'NE' => 'Niger',
                'NG' => 'Nigeria',
                'NU' => 'Niue',
                'NF' => 'Norfolk Island',
                'KP' => 'North Korea',
                'MP' => 'Northern Mariana Islands',
                'NO' => 'Norway',
                'OM' => 'Oman',
                'PK' => 'Pakistan',
                'PW' => 'Palau',
                'PS' => 'Palestinian Territory',
                'PA' => 'Panama',
                'PG' => 'Papua New Guinea',
                'PY' => 'Paraguay',
                'PE' => 'Peru',
                'PH' => 'Philippines',
                'PN' => 'Pitcairn',
                'PL' => 'Poland',
                'PT' => 'Portugal',
                'PR' => 'Puerto Rico',
                'QA' => 'Qatar',
                'RE' => 'Reunion',
                'RO' => 'Romania',
                'RU' => 'Russia',
                'RW' => 'Rwanda',
                'BL' => 'Saint Barthelemy',
                'SH' => 'Saint Helena',
                'KN' => 'Saint Kitts and Nevis',
                'LC' => 'Saint Lucia',
                'MF' => 'Saint Martin (French part)',
                'PM' => 'Saint Pierre and Miquelon',
                'VC' => 'Saint Vincent and the Grenadines',
                'WS' => 'Samoa',
                'SM' => 'San Marino',
                'ST' => 'Sao Tome and Principe',
                'SA' => 'Saudi Arabia',
                'SN' => 'Senegal',
                'RS' => 'Serbia',
                'SC' => 'Seychelles',
                'SL' => 'Sierra Leone',
                'SG' => 'Singapore',
                'SK' => 'Slovakia',
                'SI' => 'Slovenia',
                'SB' => 'Solomon Islands',
                'SO' => 'Somalia',
                'ZA' => 'South Africa',
                'GS' => 'South Georgia and the South Sandwich Islands',
                'KR' => 'South Korea',
                'ES' => 'Spain',
                'LK' => 'Sri Lanka',
                'SD' => 'Sudan',
                'SR' => 'Suriname',
                'SJ' => 'Svalbard and Jan Mayen',
                'SZ' => 'Swaziland',
                'SE' => 'Sweden',
                'CH' => 'Switzerland',
                'SY' => 'Syria',
                'TW' => 'Taiwan',
                'TJ' => 'Tajikistan',
                'TZ' => 'Tanzania',
                'TH' => 'Thailand',
                'TL' => 'Timor-Leste',
                'TG' => 'Togo',
                'TK' => 'Tokelau',
                'TO' => 'Tonga',
                'TT' => 'Trinidad and Tobago',
                'TN' => 'Tunisia',
                'TR' => 'Turkey',
                'TM' => 'Turkmenistan',
                'TC' => 'Turks and Caicos Islands',
                'TV' => 'Tuvalu',
                'VI' => 'U.S. Virgin Islands',
                'USAF' => 'US Armed Forces',
                'UG' => 'Uganda',
                'UA' => 'Ukraine',
                'AE' => 'United Arab Emirates',
                'GB' => 'United Kingdom',
                'US" selected="selected' => 'United States',
                'UM' => 'United States Minor Outlying Islands',
                'UY' => 'Uruguay',
                'UZ' => 'Uzbekistan',
                'VU' => 'Vanuatu',
                'VA' => 'Vatican',
                'VE' => 'Venezuela',
                'VN' => 'Vietnam',
                'WF' => 'Wallis and Futuna',
                'EH' => 'Western Sahara',
                'YE' => 'Yemen',
                'ZM' => 'Zambia',
                'ZW' => 'Zimbabwe',
			)
		)
	);

	$fields[] = new PMProRH_Field(
		'irrigator',
		'checkbox',
		array(
			'label' => 'Irrigator',
			'required' => true,
			'profile' => true,
		)
	);
	
	$fields[] = new PMProRH_Field(
		'acc_phone',							
		'text',							
		array(
			'label'		=> 'PHONE',		
			'size'		=> 30,			
			'class'		=> 'acc_phone',	
			'profile'	=> true,			
			'required'	=> true,			
			'levels'		=> array(1,2,3,4,5,6)
		)
	);
	
	
	
	
	foreach ( $fields as $field ) {
		pmprorh_add_registration_field(
			'checkout_boxes',				// location on checkout page
			$field							// PMProRH_Field object
		);
	}
	
}
add_action( 'init', 'pmpro_customfields_top');




//Custom Fields for Vet Paraprofessional  - Level 5&1
function pmpro_customfields(){
	// Don't break if Register Helper is not loaded.
	if ( ! function_exists( 'pmprorh_add_registration_field' ) ) {
		return false;
	}
	
	// Define the fields.
	$fields = array();
	
	$fields[] = new PMProRH_Field(
		'organizaton_company',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'ORGANIZATION/COMPANY',		// custom field label
			'size'		=> 30,				// input size
			'class'		=> 'organizaton_company',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1,5)	// only levels 1 and 2 should have the company field
		)
	);
	
	$fields[] = new PMProRH_Field(
		'degree_type',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'DEGREE TYPE',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'degree_type',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1,5)	// only levels 1 and 2 should have the company field
		)
	);
	
	
    $fields[] = new PMProRH_Field(
		'scope_of_practice',						// input name, will also be used as meta key
		'checkbox_grouped',							// type of field
		array(
			'label' => 'SCOPE OF PRACTICE',
			'profile'	=> true,
			'memberslistcsv' => true,
			'levels'		=> array(1,5),
			'required'	=> true,
			'class'  => 'scope_of_practice',
			'options' => array(
				'small_animal_vet' => 'Small Animal Veterinarian',
				'large_animal_vet' => 'Large Animal Veterinarian',
				'mixed_vet' => 'Mixed Practice Veterinarian',
				'exotic_zoo' => 'Exotic/Zoo',
				'laboratory' => 'Laboratory/Research',
				'retired_vet' => 'Retired Vet',
				'non-clinical' => 'Non-Clinical Practice',
				'other' => 'Other'
			)
		)
	);
	
	
	
	$fields[] = new PMProRH_Field(
		'scope_other_field',							// input name, will also be used as meta key
		'text',								// type of field
		array(
		    'label'     => 'Please Specify',
			'size'		=> 40,				// input size
			'class'		=> 'scope_other_field',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1,5),	// only levels 1 and 2 should have the company field
			'depends'   => array(array('id' => 'scope_of_practice', 'value' => 'other'))
		)
	);
	
	
	
	$fields[] = new PMProRH_Field(
		'how_you',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'HOW DO YOU LEARN ABOUT VCS?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'how_you',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> false,			// make this field required
			'levels'		=> array(1,5)	// only levels 1 and 2 should have the company field
		)
	);
	
	$fields[] = new PMProRH_Field(
		'personel_story',							// input name, will also be used as meta key
		'textarea',								// type of field
		array(
			'label'		=> 'DO YOU HAVE A PERSONAL PET CANNABIS RELATED STORY YOU WOULD LIKE TO SHARE WITH VCS?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'personel_story',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> false,			// make this field required
			'levels'		=> array(1,5)	// only levels 1 and 2 should have the company field
		)
	);


	$fields[] = new PMProRH_Field(
		'story',							// input name, will also be used as meta key
		'select',							// type of field
		array(
			'label'		=> 'Can we share your story?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'personel_story',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> false,			// make this field required
			'levels'		=> array(1,5),	// only levels 1 and 2 should have the company field
			'options' => array(				// <option> elements for select field
				''		=> '',				// blank option - cannot be selected if this field is required
				'yes'	=> 'YES',		
				'no'	=> 'NO',		// <option value="2000to5000">$2,000-$5,000</option>
			)
		)
	);
	
	
	$fields[] = new PMProRH_Field(
		'listed_as_licensed',							// input name, will also be used as meta key
		'select',							// type of field
		array(
			'label'		=> 'Do you want to be listed as a licensed Paraprofessional in our Cannabis Practitioner Directory (this information will be available to the public)?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'listed_as_licensed',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(5),	// only levels 1 and 2 should have the company field
			'options' => array(				// <option> elements for select field
				''		=> '',				// blank option - cannot be selected if this field is required
				'yes'	=> 'YES',		
				'no'	=> 'NO',		// <option value="2000to5000">$2,000-$5,000</option>
			)
		)
	);
    
    
    	$fields[] = new PMProRH_Field(
		'listed_as_licensed',							// input name, will also be used as meta key
		'select',							// type of field
		array(
			'label'		=> 'Do you want to be listed as a licensed Veterinarian in our Cannabis Practitioner Directory (this information will be available to the public)?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'listed_as_licensed',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1),	// only levels 1 and 2 should have the company field
			'options' => array(				// <option> elements for select field
				''		=> '',				// blank option - cannot be selected if this field is required
				'yes'	=> 'YES',		
				'no'	=> 'NO',		// <option value="2000to5000">$2,000-$5,000</option>
			)
		)
	);
	
	
	/*Doctor Sub form*/
    
    $fields[] = new PMProRH_Field(
        'html_title_directory',               // input name, will also be used as meta key
        'html',                       // type of field
        array(
            'html' => '<label>DIRECTORY CONTACT INFO</label>', 
            'label' => ' ', 
			'levels'		=> array(1,5)	,
			'required'	=> false,
           'depends'   =>array(array('id' => 'listed_as_licensed', 'value' => 'yes' ) )
        )
    );
	
    
    
	
	$fields[] = new PMProRH_Field(
		'doctor_full_name',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'Doctor First and Last Name',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'doctor_full_name',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1,5),	// only levels 1 and 2 should have the company field
			'depends'   =>array(array('id' => 'listed_as_licensed', 'value' => 'yes' ) )
		)
	);
	
	
	$fields[] = new PMProRH_Field(
		'name_of_practice',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'Name of Practice',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'name_of_practice',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1,5),	// only levels 1 and 2 should have the company field
			'depends'   =>array(array('id' => 'listed_as_licensed', 'value' => 'yes' ) )
		)
	);
	
	
	$fields[] = new PMProRH_Field(
		'doctor_address',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'Address',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'doctor_address',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1,5),	// only levels 1 and 2 should have the company field
			'depends'   =>array(array('id' => 'listed_as_licensed', 'value' => 'yes' ) )
		)
	);
	
	$fields[] = new PMProRH_Field(
		'doctor_phone',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'Phone',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'doctor_phone',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1,5),	// only levels 1 and 2 should have the company field
			'depends'   =>array(array('id' => 'listed_as_licensed', 'value' => 'yes' ) )
		)
	);
	
	
	$fields[] = new PMProRH_Field(
		'doctor_email',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'Email',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'doctor_email',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1,5),	// only levels 1 and 2 should have the company field
			'depends'   =>array(array('id' => 'listed_as_licensed', 'value' => 'yes' ) )
		)
	);
	
		
	$fields[] = new PMProRH_Field(
		'doctor_liecense',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'State of License',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'doctor_liecense',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1,5),	// only levels 1 and 2 should have the company field
			'depends'   =>array(array('id' => 'listed_as_licensed', 'value' => 'yes' ) )
		)
	);


	$fields[] = new PMProRH_Field(
		'doctor_liecense_no',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'License Number',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'doctor_liecense_no',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1,5),	// only levels 1 and 2 should have the company field
			'depends'   =>array(array('id' => 'listed_as_licensed', 'value' => 'yes' ) )
		)
	);
	


	// Add the fields into a new checkout_boxes are of the checkout page.
	foreach ( $fields as $field ) {
		pmprorh_add_registration_field(
			'checkout_boxes',				// location on checkout page
			$field							// PMProRH_Field object
		);
	}


	
}

add_action( 'init', 'pmpro_customfields');




//Custom Fields for Pet Parent - Level 4
function pmpro_customfields_pp(){
	// Don't break if Register Helper is not loaded.
	if ( ! function_exists( 'pmprorh_add_registration_field' ) ) {
		return false;
	}
	
	// Define the fields.
	$fields = array();
	
	
	$fields[] = new PMProRH_Field(
		'pp_how_you',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'HOW DO YOU LEARN ABOUT VCS?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'pp_how_you',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> false,			// make this field required
			'levels'		=> array(4)	// only levels 1 and 2 should have the company field
		)
	);
	
	$fields[] = new PMProRH_Field(
		'pp_personel_story',							// input name, will also be used as meta key
		'textarea',								// type of field
		array(
			'label'		=> 'DO YOU HAVE A PERSONAL PET CANNABIS RELATED STORY YOU WOULD LIKE TO SHARE WITH VCS?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'pp_personel_story',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> false,			// make this field required
			'levels'		=> array(4)	// only levels 1 and 2 should have the company field
		)
	);
	
	
	$fields[] = new PMProRH_Field(
		'pp_story',							// input name, will also be used as meta key
		'select',							// type of field
		array(
			'label'		=> 'Can we share your story?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'pp_story',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> false,			// make this field required
			'levels'		=> array(4),	// only levels 1 and 2 should have the company field
			'options' => array(				// <option> elements for select field
				''		=> '',				// blank option - cannot be selected if this field is required
				'yes'	=> 'YES',		
				'no'	=> 'NO',		// <option value="2000to5000">$2,000-$5,000</option>
			)
		)
	);
	
	
	
	
	foreach ( $fields as $field ) {
		pmprorh_add_registration_field(
			'checkout_boxes',				
			$field							
		);
	}

}
add_action( 'init', 'pmpro_customfields_pp');




//Custom Fields for Product Industry - Level 6
function pmpro_customfields_pi(){
	// Don't break if Register Helper is not loaded.
	if ( ! function_exists( 'pmprorh_add_registration_field' ) ) {
		return false;
	}
	
	// Define the fields.
	$fields = array();
	
	$fields[] = new PMProRH_Field(
		'pi_company',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'COMPANY',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'pi_company',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(6)	// only levels 1 and 2 should have the company field
		)
	);
	
	
	
	
	$fields[] = new PMProRH_Field(
		'pi_producthemp',							// input name, will also be used as meta key
		'select',							// type of field
		array(
			'label'		=> 'If applicable, are your products derived from hemp or high THC cannabis:',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'pi_producthemp',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(6),	// only levels 1 and 2 should have the company field
			'options' => array(				// <option> elements for select field
				''		=> '',				// blank option - cannot be selected if this field is required
				'hemp'	=> 'Hemp',		
				'high_thc_cannabis'	=> 'High THC Cannabis',
		        'both'	=> 'Both',
			)
		)
	);
	

	
    $fields[] = new PMProRH_Field(
		'pi_canabies',						// input name, will also be used as meta key
		'checkbox_grouped',							// type of field
		array(
			'label' => 'SCOPE OF PRACTICE',
			'profile'	=> true,
			'memberslistcsv' => true,
			'levels'		=> array(6),
			'required' => true,
			'class'  => 'pi_canabies',
			'options' => array(
				'manufacturing'	=> 'Manufacturing',		
				'testing-labs'	=> 'Testing/Labs',
				'farming-agricultural'	=> 'Farming/agricultural',
				'research-and-development'	=> 'Research and Development',
				'dispensary'	=> 'Dispensary',
				'product-sales'	=> 'Product Sales',
			)
		)
	);

	
	
	
	$fields[] = new PMProRH_Field(
		'pi_how_you',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'HOW DO YOU LEARN ABOUT VCS?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'pi_how_you',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> false,			// make this field required
			'levels'		=> array(6)	// only levels 1 and 2 should have the company field
		)
	);
	
	$fields[] = new PMProRH_Field(
		'pi_personel_story',							// input name, will also be used as meta key
		'textarea',								// type of field
		array(
			'label'		=> 'DO YOU HAVE A PERSONAL PET CANNABIS RELATED STORY YOU WOULD LIKE TO SHARE WITH VCS?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'pi_personel_story',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> false,			// make this field required
			'levels'		=> array(6)	// only levels 1 and 2 should have the company field
		)
	);
	
	
	$fields[] = new PMProRH_Field(
		'pi_story',							// input name, will also be used as meta key
		'select',							// type of field
		array(
			'label'		=> 'Can we share your story?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'pi_story',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> false,			// make this field required
			'levels'		=> array(6),	// only levels 1 and 2 should have the company field
			'options' => array(				// <option> elements for select field
			    ''      => '',
				'yes'	=> 'YES',		
				'no'	=> 'NO',		// <option value="2000to5000">$2,000-$5,000</option>
			)
		)
	);
	
	
	
	
	foreach ( $fields as $field ) {
		pmprorh_add_registration_field(
			'checkout_boxes',				
			$field							
		);
	}

}
add_action( 'init', 'pmpro_customfields_pi');






//Custom Fields for Vet Students - Level 3
function pmpro_customfields_vs(){
	// Don't break if Register Helper is not loaded.
	if ( ! function_exists( 'pmprorh_add_registration_field' ) ) {
		return false;
	}
	
	// Define the fields.
	$fields = array();
	

    $fields[] = new PMProRH_Field(
        'html_title_students',               // input name, will also be used as meta key
        'html',                       // type of field
        array(
            'html' => '<label>In order to receive the Student Membership rate please complete the following:</label>', 
            'label' => ' ', 
			'levels'		=> array(3)	,
			'required'	=> false,
        )
    );
	

	$fields[] = new PMProRH_Field(
		'vs_school_name',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'What school/institution/technical school are you enrolled in?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'vs_school_name',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(3)	// only levels 1 and 2 should have the company field
		)
	);
	
	
	$fields[] = new PMProRH_Field(
		'vs_school_date',							// input name, will also be used as meta key
		'date',								// type of field
		array(
			'label'		=> 'Start Date:',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'vs_school_date',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(3)	// only levels 1 and 2 should have the company field
		)
	);
	
	
	$fields[] = new PMProRH_Field(
		'anticipated_date',							// input name, will also be used as meta key
		'date',								// type of field
		array(
			'label'		=> 'Anticipated Graduation Date:',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'anticipated_date',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(3)	// only levels 1 and 2 should have the company field
		)
	);
	
	
	
	$fields[] = new PMProRH_Field(
		'anticipated_degree:',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'Anticipated Degree:',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'anticipated_degree',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(3)	// only levels 1 and 2 should have the company field
		)
	);
	
	
	
	
	$fields[] = new PMProRH_Field(
		'vs_how_you',							// input name, will also be used as meta key
		'text',								// type of field
		array(
			'label'		=> 'HOW DO YOU LEARN ABOUT VCS?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'vs_how_you',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> false,			// make this field required
			'levels'		=> array(3)	
		)
	);
	
	$fields[] = new PMProRH_Field(
		'vs_personel_story',							// input name, will also be used as meta key
		'textarea',								// type of field
		array(
			'label'		=> 'DO YOU HAVE A PERSONAL PET CANNABIS RELATED STORY YOU WOULD LIKE TO SHARE WITH VCS?',		// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'vs_personel_story',		// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> false,			// make this field required
			'levels'		=> array(3)	// only levels 1 and 2 should have the company field
		)
	);
	
	
	$fields[] = new PMProRH_Field(
		'vs_story',						
		'select',						
		array(
			'label'		=> 'Can we share your story?',		
			'size'		=> 40,				
			'class'		=> 'vs_story',	
			'profile'	=> true,			
			'required'	=> false,		
			'levels'		=> array(3),	
			'options' => array(			
			    ''      => '',
				'yes'	=> 'YES',		
				'no'	=> 'NO',	
			)
		)
	);
	
	
	
	
	foreach ( $fields as $field ) {
		pmprorh_add_registration_field(
			'checkout_boxes',				
			$field							
		);
	}

}
add_action( 'init', 'pmpro_customfields_vs');
