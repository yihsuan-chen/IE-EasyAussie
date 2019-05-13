<?php 

	$q = $_REQUEST['q'];

	$suggestion = '';

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



	// if ($q !== '') {
	// 	$q = strtolower($q);
	// 	$len = strlen($q);
	// 	foreach ($newPlace as $person) {
	// 		if (stristr($q, substr($person, 0, $len))){
	// 			if ($suggestion === '') {
	// 				$suggestion = $person;
	// 			} else {
	// 				$suggestion .= "<br> $person";
	// 			}
	// 		}
	// 	}
	// }

		if ($q !== '') {
		$q = strtolower($q);
		$len = strlen($q);
		foreach ($newPlace as $person) {
			if (stristr($q, substr($person, 0, $len))){
				if ($suggestion === '') {
					$suggestion = $person;
				} else {
					$suggestion .= "<option>$person<option> <br>";
				}
			}
		}
	}

 echo $suggestion === "" ? "No Suggestion" : $suggestion;


 ?>