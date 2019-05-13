<?php 
//require 'vendor/autoload.php';
	require("sendgrid-php.php");
	$API_KEY = "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";

if (isset($_POST['sendemail'])) {
	$name = $_POST['name'];
	$email_id = 'firststepinmelservices@gmail.com';
	$subject = $_POST['subject'];
	$feedbackType = $_POST['feedbackType'];
	$message = $_POST['msg'];

	// echo $name;
	// echo $email;

	$email = new \SendGrid\Mail\Mail(); 
	$email->setFrom("firstStepsinMel@Feedback.ml", "Living Cost Feedback");
	$email->setSubject($subject);
	$email->addTo($email_id, $name);
	$email->addContent("text/plain", $message);
	$email->addContent(
	    "text/html", 
		    "<div class='card'>
				<div class='card-body'>
					<h3>
						Type of feedback: 
						<strong>$feedbackType</strong>
					</h3>
					<h5>
						content: $message
					</h5>
				</div>
		    </div>"
	);
	$sendgrid = new \SendGrid($API_KEY);

	if ($sendgrid->send($email)) {
		// echo 
		// "<script>
		// 	$('.alert').alert();
		// </script>";
	}
	// try {
	//     $response = $sendgrid->send($email);
	//     print $response->statusCode() . "\n";
	//     print_r($response->headers());
	//     print $response->body() . "\n";
	// } catch (Exception $e) {
	//     echo 'Caught exception: '. $e->getMessage() ."\n";
	// }
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="alert alert-success" role="alert">
	  <h4 class="alert-heading">Thank You!</h4>
	  <p>Your feedback will be our motivation!</p>
	  <hr>
	</div>

	<a href="http://www.firststepsinmel.ml/" style="position: absolute; right: 10px;">
		<button class="btn btn-success">Back to Home Page</button>
	</a>
</body>
<script type="text/javascript">
	$('.alert').alert();
</script>
</html>