<?php
$data = array(
	array('id' => 1,	'name' => 'Part 1'),
	array('id' => 2,	'name' => 'Part 2'),
	array('id' => 3,	'name' => 'Part 3'),
	array('id' => 4,	'name' => 'Part 4'),
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