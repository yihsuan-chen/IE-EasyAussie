
<?php 
require 'database.php';

$residentnum = strval($_GET['residentnum']);
$dw = strval($_GET['dw']);
$wm = strval($_GET['wm']);
$ec = strval($_GET['ec']);
$dwf = strval($_GET['dwf']);
$wmf = strval($_GET['wmf']);
$ech = strval($_GET['ech']);

$usual = "SELECT waterpermonth FROM waterresidents WHERE noofres='$residentnum'";
					$usuall = mysqli_query($con, $usual);
					$usualll = mysqli_fetch_assoc($usuall);
					$usual4 = implode(',',$usualll);
					
$dwfsql = "SELECT dwlpermonth FROM `dishwasher` where dwfrequencyperweek = '$dwf'";
					$dwfsqll = mysqli_query($con, $dwfsql);
					$dwfsqlll = mysqli_fetch_assoc($dwfsqll);
					$dwfsql4 = implode(',',$dwfsqlll);

$wmfsql = "SELECT wmlpermonth FROM `washinmachinedb`where wmfrequencyperweek = '$wmf'";
					$wmfsqll = mysqli_query($con, $wmfsql);
					$wmfsqlll = mysqli_fetch_assoc($wmfsqll);
					$wmfsql4 = implode(',',$wmfsqlll);
		
$echsql = "SELECT evlinamonth FROM `coolerdb` where evhours = '$ech'";
					$echsqll = mysqli_query($con, $echsql);
					$echsqlll = mysqli_fetch_assoc($echsqll);
					$echsql4 = implode(',',$echsqlll);
	
	$waterconsumption = intval($usual4) + (intval($dw) * intval($dwfsql4)) + (intval($wm) * intval($wmfsql4)) + (intval($ec) * intval($echsql4));
	
	$dailyconsumption = $waterconsumption/30000;
	$sweagecost = ($waterconsumption/1000) * 1.1390;
	$recyclecost = ($waterconsumption/1000) * 2.3191;
	$unchorinecost = ($waterconsumption/1000) * 2.6436;
	if ($dailyconsumption < 441) {
	$totalcost = ($waterconsumption/1000) * 2.6436 + $sweagecost + $recyclecost + $unchorinecost;
	}
	elseif($dailyconsumption > 440 && $dailyconsumption < 881) {
	$cost1 = (440*2.6436*30);
	$cost2 = (pareseInt($dailyconsumption) - 440) *3.1058*30;
	$totalcost = $cost1 + $cost2 + $sweagecost +$recyclecost + $unchorinecost;
	}
	elseif($dailyconsumption > 880) {
	$cost3 = (440*2.6436*30);
	$cost4 = (440*3.1058*30);
	$cost5 = (intval($dailyconsumption) - 880) *4.6193 *30;
	$totalcost = $cost3 + $cost4 + $cost5 + $sweagecost +$recyclecost + $unchorinecost;
	}
	else
	{
		echo "erroring out";
	}
	echo round ($totalcost, 2);
?> 