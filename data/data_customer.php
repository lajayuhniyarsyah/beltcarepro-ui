<?php
$data = array(
	array('id' => 1,	'name' => 'Freeport Indonesia, PT'),
	array('id' => 2,	'name' => 'Aneka Tambang, PT'),
	array('id' => 3,	'name' => 'Holcim Indonesia, PT'),
	array('id' => 4,	'name' => 'Adaro, PT'),
);

$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : '';

// Searching
if(trim($q))
{
	$data = array_filter($data, 'filter_by_name');
}

$data = array_values($data);

function filter_by_name($el)
{
	global $q;
	
	return stristr($el['name'], $q) ? true : false;
}


echo json_encode($data);