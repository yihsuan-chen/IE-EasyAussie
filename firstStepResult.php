<?php  

	$university = htmlentities($_POST['university']);
	$livingPlace = strtoupper(htmlentities($_POST['livingPlace']));
	$transportTimes = htmlentities($_POST['transportTimes']);
	$transSelect = htmlentities($_POST['transSelect']);
	$mealOut = htmlentities($_POST['eatOutside']);
	$vegan = htmlentities($_POST['vegan']);
	switch ($university) {
		case '0':
			$university = "Monash University";
			break;
		case '1':
		$university = "University of Melbourne";
			break;
		case '2':
		$university = "RMIT University";
			break;
		case '3':
		$university = "Swinburne University of Technology";
			break;
		case '4':
		$university = "University of Divinity";
			break;
		case '5':
		$university = "Victoria University";
			break;
		default:
		$university = "Deakin University";
			break;
	}

	$campus = strtoupper(htmlentities($_POST['campus']));

	if($campus === 'CITY'){
		$campus = 'CBD';
	}else if($campus === 'CAUFIELD'){
		$campus = 'CAULFIELD';
	}
	
	// echo $campus;
	// echo $livingPlace;
	// echo $transSelect;
	// echo $vegan;

	$distance="1.1";
	require('config/db.php');
	$queryCost = "SELECT * FROM distance";
	$resultCost = mysqli_query($conn, $queryCost);
	//$postsCost = mysqli_fetch_assoc($resultCost);
	while($row = mysqli_fetch_array($resultCost)){
		if($transSelect==='car'|| $transSelect==="taxi"){
			if($row['suburb'] === $campus && $row['university'] === $university 
				&& $row['campus'] === $campus){
				$distance = $row['distance'];
			}

		}	
	} 
	
?>

				 






<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="img/logo.ico">

  		<title>Cost of living Calculator - First Steps in Melbourne</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/firstStepForm_result.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<script type="text/javascript">


			
			$(document).ready(function(){
				 	

					<?php if ($livingPlace==='CITYLIVING'): ?>
						var price = 294;
						var classSel = $('#proAcc');
						totalCostPer = price/400*100 + "%";
						classSel.html('$' + price);
						classSel.css("width",totalCostPer);
					<?php endif; ?>
					<?php if ($livingPlace==='CAMPUSSUBURB' && $campus === 'CBD'): ?>
						var price = 294;
						var classSel = $('#proAcc');
						totalCostPer = price/400*100 + "%";
						classSel.html('$' + price);
						classSel.css("width",totalCostPer);
					<?php endif; ?>
					/*待补全数据库*/
					<?php if ($livingPlace === 'CAMPUSSUBURB' || $livingPlace === 'OTHERSUBURB'): ?>
						accoCost();
					<?php endif ?>

					<?php if ($transSelect === 'car'): ?>
						carCost();
					<?php endif ?>

					<?php if ($transSelect === 'taxi'): ?>
						taxiCost();
					<?php endif ?>

					<?php if ($transSelect === 'Public'): ?>
						var time = parseInt(<?php echo $transportTimes; ?>);
						transCost(time);
					<?php endif ?>

					<?php if ($transSelect === 'onFoot/bicycle'): ?>
						footCost();
					<?php endif ?>
					 
					
					// food cost
					var numOfDay = parseInt(<?php echo $mealOut; ?>);
					var price = 0;
					var classSel = $('#proFood');
					if('<?php echo $vegan; ?>' === 'vegan'){
						price = (numOfDay * 12 + (14 - numOfDay) * 7 + 7 * 2.5) * 0.8;
						var totalCostShow = "$" + price;
						console.log(classSel);
						totalCostPer = price/200*100 + "%";
						classSel.html(totalCostShow);
						classSel.css("width",totalCostPer);
					} else {
						price = (numOfDay * 12 + (14 - numOfDay) * 7 + 7 * 2.5);
						var totalCostShow = "$" + price;
						console.log(classSel);
						totalCostPer = price/200*100 + "%";
						classSel.html(totalCostShow);
						classSel.css("width",totalCostPer);
					}

					/*food loop*/

		    		//console.log(mealOut);
					
					
					/*food loop*/
					
		    		//console.log(mealOut);




							
						 //alert('aaa');
					
			});

			

			//Accommodtion Cost function
			function accoCost(){
				<?php 
					require('config/db.php');
					$queryCost = "SELECT * FROM livingcost WHERE Suburb = '$campus'";
					$resultCost = mysqli_query($conn, $queryCost);
					$postsCost = mysqli_fetch_assoc($resultCost);
					mysqli_close($conn);
				 ?>
				var price = parseInt(<?php echo $postsCost['Average_per_person']; ?>);
				var classSel = $('#proAcc');
				//console.log(classSel);
				totalCostPer = price/400*100 + "%";
				classSel.html('$' + price);
				classSel.css("width",totalCostPer);
			};

			function carCost(){
				var classSel = $('#proTr');
				var times = parseInt(<?php echo $transportTimes ?>);
				var price = Math.round((9*1.47)/100 * parseFloat(<?php echo $distance; ?>) * 2 * times);
				totalCostPer = price/60*100 + "%";
				var totalCostShow = '$' + price;
				classSel.html(totalCostShow);
				classSel.css("width",totalCostShow);
				
			}

			function taxiCost(){
				var classSel = $('#proTr');
				var times = parseInt(<?php echo $transportTimes ?>);
				var price =  Math.round((4.7 + (parseFloat(<?php echo $distance; ?>)-1)*1.71) * 2 * times);
				totalCostPer = price/200*100 + "%";
				var totalCostShow = '$' + price;
				classSel.html(totalCostShow);
				classSel.css("width",totalCostShow);
				
			}

			function transCost(times){
				var classSel = $('#proTr');
				var sequence = parseInt(times);
				total = 8.8 * sequence;
				totalCost = "$" + total.toFixed(1);
				totalCostPer = total/100*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}

			function footCost(){
				var classSel = $('#proTr');
				total = "$1";
				totalPer = 1/100*100 + "%";
				classSel.html(total);
				classSel.css("width",totalPer);

			}



		</script>
	</head>

	<body>
		<div class="container">
			<div class="header">
				<div class="intro">
					<span class="span1" style="font-weight: bold;font-size: 30px;">Your cost of living</span>
					<br>
					<span>per week(estimated)</span>
				</div>
				<hr>
			</div>
			<div class="table">
				<table>
					<tr>
						<td class="title" style="font-weight: bold;font-size: 15px;">Accommodation</td>
						<td>
							<div class="progress" style="height: 30px;">
								<div class="progress-bar bg-danger progress-bar-striped" id="proAcc" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="title" style="font-weight: bold;font-size: 15px;">Transport</td>
						<td width="300px">
							<div class="progress" style="height: 30px;">
								<div class="progress-bar bg-danger progress-bar-striped" id="proTr" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									Transport
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="title" style="font-weight: bold;font-size: 15px;">Food</td>
						<td width="300px">
							<div class="progress" style="height: 30px;">
								<div class="progress-bar bg-danger progress-bar-striped" id="proFood" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									Food
								</div>
							</div>
						</td>
						<!-- <td class="title" style="font-weight: bold;font-size: 15px;">Food</td>
						<td width="300px">
							<div class="progress" style="height: 30px;">
								<div class="progress-bar bg-danger progress-bar-striped" id="proFoo" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
									Food
								</div>
							</div>
						</td> -->
					</tr>
					<a href="index.html"><button type="button" class="btn btn-secondary btn-sm">Back here</button></a>
				</table>
			</div>

		</div>

	</body>
	<script type="text/javascript" src="js/firstStepForm_result.js"></script>

</html>