<?php 

	$m = $_REQUEST['m'];
	//echo $m;
	$matchingResult = '';

	$place = array();
	$newPlace = array();

	require('config/db.php');

	$queryPlace = "SELECT * FROM livingcost;";
	$results = mysqli_query($conn, $queryPlace);


	while($row = mysqli_fetch_assoc($results)){
		$place[] = $row['Suburb']." ";
	}
	//print_r($place);

	foreach ($place as $key => $value) {
		$newPlace[] =  $value;
	}
	//print_r($newPlace);



	// if ($m !== '') {
	// 	$m = strtolower($m);
	// 	$len = strlen($m);
	// 	foreach ($newPlace as $person) {
	// 		if (stristr($m, substr($person, 0, $len))){
	// 			if ($matchingResult === '') {
	// 				$matchingResult = $person;
	// 			} else {
	// 				$matchingResult .= "<br> $person";
	// 			}
	// 		}
	// 	}
	// }

		if ($m !== '') {
		$m = strtoupper($m);
		//echo(gettype($m));
		$len = strlen($m);
		foreach ($newPlace as $person => $value) {
			if (stristr($m, substr($value, 0, $len)) ){
				$matchingResult = 'found';
				break;
			}else{
				$matchingResult = 'Nothing found please enter the right suburb name';
			}
		}
				
	}
	echo $matchingResult;


 ?>