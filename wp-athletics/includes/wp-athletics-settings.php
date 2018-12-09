<?php

// WP Athletics Settings
return array(
	'create_demo_data_on_activate' => true, // must also be in WP_DEBUG mode for this to activate (wp-config.php)
	'display_date_format' => 'dd M yy',

	'default_age_categories' => array(
		'J' => array('name' => 'Junior', 'from' => 0, 'to' => 20),
		'S' => array('name' => 'Senior', 'from' => 20, 'to' => 35),
		'A35' => array('name' => '35', 'from' => 35, 'to' => 40),
		'A40' => array('name' => '40', 'from' => 40, 'to' => 45),
		'A45' => array('name' => '45', 'from' => 45, 'to' => 50),
		'A50' => array('name' => '50', 'from' => 50, 'to' => 55),
		'A55' => array('name' => '55', 'from' => 55, 'to' => 60),
		'A60' => array('name' => '60', 'from' => 60, 'to' => 65),
		'A65' => array('name' => '65', 'from' => 65, 'to' => 70),
		'A70' => array('name' => '70', 'from' => 70, 'to' => 75),
		'A75' => array('name' => '75', 'from' => 75, 'to' => 80),
		'A80' => array('name' => '80', 'from' => 80, 'to' => 85),
		'A85' => array('name' => '85', 'from' => 85, 'to' => 90),
		'A90' => array('name' => '90', 'from' => 90, 'to' => 95),
		'A95' => array('name' => '95', 'from' => 95, 'to' => 100),
	),

	'default_terrain_categories' => array(
		'A' => 'Altro',
		'Q' => 'Qualit&agrave',
		'S' => 'Gruppo',
		'I' => 'Individuale'
	),

	'table_max_event_name_length' => 50,
	'table_max_location_length' => 25
);

?>
