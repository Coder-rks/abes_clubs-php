<?phpinclude('inc/database_connectivity.php');?>



<?php $title="CLUBS|Login"?>
<body>
<?php include('inc/header.php'); ?> 



<div class="jumbotron">
	<div class="container">
  <h1><center>LOGIN
  </center></h1>
  </div>
  </div>
	
<center><H3><b><u>ONLY FOR THE CLUB HEAD</u></b></H3></CENTER>


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
							<form id="registration-form"  method="POST" >
							
							
								<p class="form_info">email id<span class="required">*</span></p>
								<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="username" id="username" value=""  />
								<p class="form_info">password<span class="required">*</span></p>
								<input class="col-xs-12 col-sm-12 col-md-8" type="password" name="password" id="password" value="" /><br>
								<div class="clear"></div>
								<br><input type="submit" class="btn btn-warning btn-form marg-right5" name="submit" value="login" />
								
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
<?php include('inc/footer.php');?>
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
