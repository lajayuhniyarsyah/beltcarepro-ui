<?php
$data = array(
	array('id' => 1,	'name' => 'Belt Conveyor'),
	array('id' => 2,	'name' => 'Frame'),
	array('id' => 3,	'name' => 'Roller'),
	array('id' => 4,	'name' => 'Pulley'),
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