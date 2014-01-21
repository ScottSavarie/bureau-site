<?php 
$errors = '';
$myemail = 'frank@bureau.ca';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email'])||
   empty($_POST['tel']) || 
   empty($_POST['text']) ||
   empty($_POST['project']) || 
   empty($_POST['timeframe']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}
$name = $_POST['name'];
$email_address = $_POST['email']; 
$tel = $_POST['tel']; 
$text = $_POST['text']; 
$timeframe = $_POST['timeframe'];
$project = $_POST['project']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Worksheet form submission: $name";
	$email_body = "You have received a new worksheet. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Telephone: $tel \n Company: $text \n Timeframe: $timeframe \n Project: $project \n Message: \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>