<?php
// Check for empty fields
if(empty($_POST['name'])  	      	||
   empty($_POST['mobile'])          ||
   empty($_POST['email'])           ||
   empty($_POST['start_date'])      ||
   empty($_POST['launch_date']) 	||
   empty($_POST['budget'])	        ||
   empty($_POST['message'])	        ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$start_date = $_POST['start_date'];
$launch_date = $_POST['launch_date'];
$budget = $_POST['budget'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = "noreply@yourbusiness.com"; 

// Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "thelight.com Contact Form:  $name";
$email_body = "You have received a new message/enquiries from your website contact form.\n\n"."Here are the details:\n\nName: $name\n
\nMobile: $mobile\n\nEmail: $email_address\n\nStart_date: $start_date\n\nLaunch_date: $launch_date\n\nBudget: $budget\n\nMessage:\n$message";

$headers = "From: noreply@yourbusiness.com\n"; 
// This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>

