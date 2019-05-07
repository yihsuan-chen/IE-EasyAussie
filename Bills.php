<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial; max-width:auto; margin: auto; text-decoration: none;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.11.1.min.js"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.button.min.js"></script>
</head>
<body>
<nav style="background: rgb(34,34,34); width: 95%; margin: auto; border-radius: 5px;">
<div>
<table cellspacing=10 cellpadding=4><tr>
        <td><a href="http://www.firststepsinmel.ml/"><img src="img/webLogo3.png" style="display: inline; height: 52px; margin-top: -5px; margin-bottom: -5px background-color: rgb(34,34,34); border-radius: 10px;"></td>
        <td><span style="text-decoration: none; font-family: 'Arial Black';font-size: 24px;color:white; margin-left: 10px; display: inline;" >First Steps in Melbourne</span></a></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><a href="https://www.firststepsinmel.ml/"><span style="text-decoration: none; font-family: 'Arial';font-size: 15px;color:white; text-align: center;" >Home</span></a></td>
		<td><a href="firstStepForm.php"><span style="text-decoration: none; font-family: 'Arial';font-size: 15px;color:white; text-align: center;">Living Cost calculator</span></a></td>
		<td><a href="Bills.php"><span style="text-decoration: none; font-family: 'Arial';font-size: 15px;color:white; text-align: center;">Bills</span></a></td>
		<td><a href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/"><span style="text-decoration: none; font-family: 'Arial';font-size: 15px;color:white; text-align: center;">Student support</span></a></td>
		<td><a href="comparsion.html"><span style="text-decoration: none; font-family: 'Arial';font-size: 15px;color:white; text-align: center;">Compare with shanghai</span></a></td>
		
</table>       
	   </div>
    </nav>

<p align="center"><h4>Calculate the approximate cost of bills based on usage</h4></p>

<div class="tab">
  <button class="tablinks" onclick="Name(event, 'Phone')">Phone</button>
  <button class="tablinks" onclick="Name(event, 'Internet')">Internet</button>
  <button class="tablinks" onclick="Name(event, 'Electricity')">Electricity</button>
  <button class="tablinks" onclick="Name(event, 'Gas')">Gas</button>
  <button class="tablinks" onclick="Name(event, 'Water')">Water</button>
</div>

<div id="Phone" class="tabcontent">
  <h3>Phone Usage</h3>
  <p>How much data would you need?</p>
  <div id="RadioButtons1">
	  <input type="radio" name="RadioButtons1" id="Radio1">
	  <label for="Radio1">2GB</label>
	  <input type="radio" name="RadioButtons1" id="Radio2">
	  <label for="Radio2">6GB</label>
	  <input type="radio" name="RadioButtons1" id="Radio3">
	  <label for="Radio3">10GB</label>
  </div>
	<p>Do you require ineternational calling?</p>
  <div id="RadioButtons2">
	  <input type="radio" name="RadioButtons2" id="Radio4">
	  <label for="Radio4">Yes</label>
	  <input type="radio" name="RadioButtons2" id="Radio5">
	  <label for="Radio5">No</label>
  </div>
	<br>
	<div>
	  <button id="Button1">Calculate</button>
	</div>
	<br>
	<div> Average cost per month is:</div>
</div>

<div id="Internet" class="tabcontent">
  <h3>Internet</h3>
  <p>How much data do you need per month?</p>
	<div id="RadioButtons3">
	  <input type="radio" name="RadioButtons3" id="Radio6" onClick="lowinternet()">
	  <label for="Radio6">200GB</label>
	  <input type="radio" name="RadioButtons3" id="Radio7" onClick="midinternet()">
	  <label for="Radio7">500GB</label>
	  <input type="radio" name="RadioButtons3" id="Radio8" onClick="unlimited()">
	  <label for="Radio8">Unlimited</label>
  </div>
	<br>
<div> Average cost per month is:<b><span id="myText"></span></b></div>
</div>

<div id="Electricity" class="tabcontent">
  <h3>Electricity</h3>
  <p>My Usage is:</p>
  <div id="RadioButtons4">
	  <input type="radio" name="RadioButtons4" id="Radio9">
	  <label for="Radio9">Low</label>
	  <input type="radio" name="RadioButtons4" id="Radio10">
	  <label for="Radio10">Medium</label>
	  <input type="radio" name="RadioButtons4" id="Radio11">
	  <label for="Radio11">High</label>
  </div>
	<br>
	<div> Average cost per month is:</div>
</div>

<div id="Gas" class="tabcontent">
  <h3>Gas</h3>
  <p>My Usage is:</p>
  <div id="RadioButtons5">
	  <input type="radio" name="RadioButtons5" id="Radio12">
	  <label for="Radio12">Low</label>
	  <input type="radio" name="RadioButtons5" id="Radio13">
	  <label for="Radio13">Medium</label>
	  <input type="radio" name="RadioButtons5" id="Radio14">
	  <label for="Radio14">High</label>
  </div>
	<br>
	<div> Average cost per month is:</div>
</div>

<div id="Water" class="tabcontent">
  <h3>Water</h3>
  <p>My Usage is:</p>
  <div id="RadioButtons6">
	  <input type="radio" name="RadioButtons6" id="Radio15">
	  <label for="Radio15">Low</label>
	  <input type="radio" name="RadioButtons6" id="Radio16">
	  <label for="Radio16">Medium</label>
	  <input type="radio" name="RadioButtons6" id="Radio17">
	  <label for="Radio17">High</label>
  </div>
	<br>
	<div> Average cost per month is:</div>
</div>

<script>
function Name(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
$(function() {
	$( "#RadioButtons1" ).buttonset(); 
});
$(function() {
	$( "#RadioButtons2" ).buttonset(); 
});
$(function() {
	$( "#Button1" ).button(); 
});
$(function() {
	$( "#RadioButtons3" ).buttonset(); 
});
$(function() {
	$( "#RadioButtons4" ).buttonset(); 
});
$(function() {
	$( "#RadioButtons5" ).buttonset(); 
});
$(function() {
	$( "#RadioButtons6" ).buttonset(); 
});
	function unlimited() {
var  cost= 70;
  document.getElementById("myText").innerHTML = cost+'$';
	}
		
	function midinternet() {
var  midintr= 40;
  document.getElementById("myText").innerHTML = midintr+'$';
	}
	
	function lowinternet() {
var  lowintr= 20;
  document.getElementById("myText").innerHTML = lowintr+'$';
	}
</script>
   
</body>
</html> 
