<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>first steps in Melbourne - Feedback System</title>

<!-- 	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" /> -->

	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script> -->

	<style type="text/css">
		#navbar ul>li>a:hover{
			color: gray;
		}
		.md-form{
			text-align: left;
			margin:auto;
		}
		span{
			font-size:20px;
		}
		.custom-radio{

		}
		ul li{
			font-size: 15px;
		}
	</style>
</head>
<body>

	 <div class="navbar-wrapper" style="position: fixed; top: 12px;left: 10px;right: 10px;z-index: 99">
        <div class="container-fluid">
            <nav class="navbar navbar-inverse navbar-static-top" style="background-color: white; color: white; border: 1px solid rgb(224,227,230);margin-top: -20px;box-shadow: 4px 4px 20px lightblue;">
                <div class="container">
                    <div class="navbar-header" style="height: 62px;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" value="click here to start" style="background-color: black; width: 40px;height: 40px; text-align: center;">
                        </button>
                        <a class="navbar-brand active" href="http://www.firststepsinmel.ml/"><img src="../img/webLogo3.png" style="display: inline; height: 43px; margin-top: -10px;">
                            <span class="hidden-sm-down hidden-xs" style="font-family: 'Arial Black';font-size: 24px;color:black; height: 20px; line-height: 20px;margin-left: 10px;">First Steps in Melbourne</span></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse col-md-5" style="margin-top: 3px;">
                        <ul class="nav navbar-nav">
                            <li><a href="http://www.firststepsinmel.ml/" style="color: black">Home</a></li>
                            <li class="dropdown" id="costDrag" onclick="calculatorDrag()">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="costFont"><span class="caret"></span>&nbsp;&nbsp;Living Cost Calculator</a>
                                <ul class="dropdown-menu">
                                    <li><a href="../introduction.php">Calculator</a></li>
                                    <li><a href="../Bills.html">Other expenses</a></li>
                                </ul>
                            </li>
                            <li class="dropdown" id="subSupDrag" onclick="calculatorDrag()">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="stuSup"><span class="caret"></span>&nbsp;&nbsp;Student Support</a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/find_a_suburb/">Find a Suburb</a></li>
                                    <li><a href="../TipsList.html">Guidance</a></li>
                                </ul>
                            </li>
                            <li><a href="../comparison.html" style="color: black;">Compare with Shanghai</a></li>
                            <li><a href="../prediction.php" style="color: black">Prediction</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="display: none;"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../introduction.php">Living Cost Calculator</a></li>
                                    <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/find_a_suburb/">Student Support</a></li>
                                    <li><a href="comparison.html">Compare with Shanghai</a></li><li><a href="../prediction.php" style="color: black">Prediction</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>


	<div class="col-xs-12 col-md-10 col-lg-10" style=" margin: auto; position: absolute; left: 0px; right: 0px; margin-top: 50px;">
		<div class="card">
			<div class="card-body">
				<div class="">
					<!--form login-->
					<div class="col-md-12 col-lg-12 col-xs-12">
						
						<h3 class="card-header info-color white-text text-center py-4" style="height: 50px; line-height: 50px; border-radius: 7px; background-color: rgb(91,192,222); color: white;">
							<strong>First Steps in Mel Mail System</strong>
						</h3>
						<div class="ccol-xs-12 col-md-12 col-lg-12" style="text-align: center;">
							<form action="mailSent.php" method="POST" class="text-center" style="color:#757575;">

								<div class="md-form">
									<span>Recipients:&nbsp;&nbsp;</span>
									<br>
									<input  type="email" name="email" class="form-control" placeholder="EassyAussie Team" value="EassyAussie Team" style="margin: auto; width: 500px; text-align: center; font-size:20px;" disabled>
								</div>
								<br>

								<div class="md-form">
									<span>Your Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
									<br>
									<input type="text" name="name" class="form-control" style="margin: auto; width: 500px; text-align: center; font-size: 20px;">
								</div>
								<br>

								<div class="md-form">
									<span>Subject:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
									<br>
									<input type="text" name="subject" class="form-control" style="margin: auto; width: 500px; text-align: center; font-size: 20px;">
								</div>

								<br>

								<div class="md-form">
									<span>Your feedback is about: </span>
									<p></p>
									<div class="custom-control custom-radio">
									  <input type="radio" name="feedbackType" class="custom-control-input" value="Bugs Report" checked="checked">
									  <span class="custom-control-label" for="customRadio1">Bugs Report</span>
									<br>
									  <input type="radio" name="feedbackType" class="custom-control-input" value="Corporation Requirement">
									  <span class="custom-control-label" for="customRadio1">Corporation Requirement</span>
									 <br>
									  <input type="radio" name="feedbackType" class="custom-control-input" value="Other Suggestions">
									  <span class="custom-control-label" for="customRadio1">Other Suggestions</span>
									</div>
								</div>
								<br>
								<br>
								<div class="md-form">
									<span>Would you like to add a comment? </span>
									<textarea type="text" name="msg" rows="8" cols="70" class="form-control" placeholder="Please give your feedback here" style="font-size: 18px;"></textarea>
								</div>
								<p></p>
								<button class="btn btn-info btn-block" type="submit" name="sendemail"><strong style="font-size: 18px;">Send</strong></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function calculatorDrag() {
	    $("#costFont").css('background-color', "white");
	    $("#stuSup").css('background-color', "white");
	    $("#preSup").css('background-color', "white");
	}
	</script>
</body>
</html>
