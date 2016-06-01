<?php
$data = array(
	array('id' => 1,	'name' => 'Agustian'),
	array('id' => 2,	'name' => 'Joko'),
	array('id' => 3,	'name' => 'Alfian'),
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