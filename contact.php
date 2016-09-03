<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
$errors = '';
$myemail = 'abesclubs@gmail.com';//<-----Put Your email address here.

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$subject = $_POST['subject'];
$message = $_POST['message']; 

$email_body = "";
$email_body = $email_body . "Name: " . $name . "\n";
$email_body = $email_body . "Email: " . $email_address . "\n";
$email_body = $email_body . "Subject: " . $subject . "\n";
$email_body = $email_body . "Message: " . $message;


	if( empty($errors))
	{
		$to = $myemail; 		
		$headers = "From: $email_address \n"; 
		$headers .= "Reply-To: $myemail";
		
		$retval = mail($to,$subject,$email_body,$headers);
		
		 if( $retval == true )
	   {
	      // echo "Message sent successfully.We will contact you soon.";
	   	  header("Location: contact.php?status=thanks");
	   	  exit;
	   }
	   else
	   {
	      echo "Message could not be sent...";
	   }
	} 

}

$section = "contact";
$title = "Contact Us";

?>
<body>

<?php include('inc/header.php'); ?> 

<div class="jumbotron">
	<div class="container">
  <h1><center>CONTACT US
  </center></h1>
  </div>
  </div>
	



	<?php if (isset($_GET["status"]) == "thanks") { ?>
<br><br><br>
		<!--thanks code-->
			<div class="strip">
				<h1 class=""><span class="hue"></span></h1>
				<h3 class="center about_strip">
					<h1>Thanks</h1>	
				</h3>
			</div>
		<!--/thanks code-->
		
	<?php } else { ?>


			<div class="container wrapper pad10">
				<div class="inner_content">
					<div class="row pad10">
					
					<div class="col-sm-6 col-md-12">
						<div class="contact_form">  
						<div id="note"></div>
						<div id="fields">
							<form id="registration-form"  method="POST" action="contact.php"  >
								<p class="form_info">name <span class="required">*</span></p>
								<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="name"  id="name" value="" />
								<p class="form_info">email <span class="required">*</span></p>
								<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="email" id="email" value=""  />
								<p class="form_info">subject</p>
								<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="subject" id="subject" value="" /><br>
								<p class="form_info">message</p>
								<textarea   class="col-xs-12 col-sm-12 col-md-8"  name="message" id="message" value="" ></textarea>
								<div class="clear"></div>
								<input type="submit" class="btn btn-warning btn-form marg-right5" value="submit" />
								<div class="clear pad45"></div>
							</form>
						</div>
						</div>                   
					</div>                	
			</div>
		</div>
	</div>
	<!--//page-->
	<?php  } ?>
<br><br><br>
<?php
include('inc/footer.php'); 
?>

<!-- up to top -->
<a href="#"><i class="go-top fa fa-angle-double-up"></i></a>
<!--//end--> 

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/retina.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
	
<!--//GOOGLE MAP - ADD YOUR ADDRESS HERE -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(28.6205610,77.4373220),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<script src="js/script.js"></script> 

<script src="js/jquery.validate.js"></script> 
 
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
