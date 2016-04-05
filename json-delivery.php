<?php
	header('Content-type: application/json');

	$orders1 = array(
		'id' => 0,
		'name' => 'alex',
		'drink' => 'long black'
	);
	
	$orders2 = array(
		'id' => 1,
		'name' => 'smith',
		'drink'	=> 'espresso'
	);
	
	$arr = array($orders1, $orders2);
	
	$arr2 = array('orders' => $arr);
	
	echo json_encode($arr2);
	
?>
