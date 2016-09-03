<?php 
$errors = '';
$myemail = 'suggestus@getallbest.com';//<-----Put Your email address here.


$name = $_POST['name']; 
$email_address = $_POST['email']; 
$subject = $_POST['username'];
$message = $_POST['address']; 




if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address\ n Category: $subject \n Description: $message"; 
	
	$headers = "From: $email_address\n"; 
	$headers .= "Reply-To: $myemail";
	
	$retval = mail($to,$email_subject,$email_body,$headers);
	
	 if( $retval == true )
   {
      echo "Message sent successfully..We will respond you soon.";
   }
   else
   {
      echo "Message could not be sent...";
   }
	//redirect to the 'thank you' page
	//header('Location: contact-form-thank-you.html');
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63207475-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>