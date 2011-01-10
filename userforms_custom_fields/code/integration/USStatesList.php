<?php 
class  USStatesList{
	
	protected static $us_state_codes = array(
	'None Selected' => "Select",
	'Outside US' => "Outside US",
	'AL' => "Alabama",
	'AK' => "Alaska",
	'Alberta' => "Alberta",
	'AZ' => "Arizona",
	'AR' => "Arkansas",
	'Br. Columbia' => "Br. Columbia",
	'CA' => "California",
	'CO' => "Colorado",
	'CT' => "Connecticut",
	'DE' => "Delaware",
	'DC' => "District of Columbia",
	'FL' => "Florida",
	'GA' => "Georgia",
	'Guam' => "Guam",
	'HI' => "Hawaii",
	'ID' => "Idaho",
	'IL' => "Illinois",
	'IN' => "Indiana",
	'IA' => "Iowa",
	'KS' => "Kansas",
	'KY' => "Kentucky",
	'LO' => "Louisiana",
	'ME' => "Maine",
	'Manitoba' => "Manitoba",
	'MD' => "Maryland",
	'MA' => "Massachusetts",
	'MI' => "Michigan",
	'MN' => "Minnesota",
	'MS' => "Mississippi",
	'MO' => "Missouri",
	'MT' => "Montana",
	'NE' => "Nebraska",
	'NV' => "Nevada",
	'New Brunswick' => "New Brunswick",
	'NH' => "New Hampshire",
	'NJ' => "New Jersey",
	'NM' => "New Mexico",
	'NY' => "New York",
	'Newfoundland' => "Newfoundland",
	'NC' => "North Carolina",
	'ND' => "North Dakota",
	'Nova Scotia' => "Nova Scotia",
	'OH' => "Ohio",
	'OK' => "Oklahoma",
	'Ontaria' => "Ontario",
	'OR' => "Oregon",
	'PA' => "Pennsylvania",
	'Pr. Edward Isl.' => "Pr. Edward Island",
	'PR' => "Puerto Rico",
	'Quebec' => "Quebec",
	'RI' => "Rhode Island",
	'Saskatchewan' => "Saskatchewan",
	'SC' => "South Carolina",
	'SD' => "South Dakota",
	'TN' => "Tennessee",
	'TX' => "Texas",
	'UT' => "Utah",
	'VT' => "Vermont",
	'VA' => "Virginia",
	'WA' => "Washington",
	'WV' => "West Virginia",
	'WI' => "Wisconsin",
	'WY' => "Wyoming"
	);

	/**
	 * Returns an array of  State Names
	 */
	static function USStatesDropdown() {
		$dropdown = USStatesList::$us_state_codes;
		asort($dropdown);
		return $dropdown;
	}
}