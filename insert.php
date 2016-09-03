

<?php $title = "RESULT|update";?>
<body>
<?php include('inc/header.php'); ?> 



<div class="jumbotron">
	<div class="container">
  <h1><center>INSERT RESULT DETAILS
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
							<form id="registration-form"  method="POST" action="insert1.php" >
							
							<p class="form_info">CLUB name<span class="required">*</span></p>
							    <select  name="select" class="col-xs-12 col-sm-12 col-md-8" >
  <option name="technovation">technovation</option>
  
  <option name="literary">literary</option>

  <option name="dramatics">dramatics</option>
  <option name="hobby">hobby</option>
  <option name="entrepreneur">entrepreneur</option>
  
  <option name="research">research</option>
  <option name="robotics">robotics</option>
  <option name="cultural">cultural</option>
  

  </select>
								<p class="form_info">event name<span class="required">*</span></p>
								<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="name_event" id="name_event" value=""  />
								<p class="form_info"> FIRST winner <span class="required">*</span></p>
								<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="winner1" id="winner1" value=""  />
                                <p class="form_info">SECOND winner </p>
								<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="winner2" id="winner2" value=""  />
								<p class="form_info">THIRD winner </p>
								<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="winner3" id="winner3" value=""  />
														
							    <p class="form_info">ID OF FIRST WINNER<span class="required">*</span></p>
								<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="id1" id="id1" value=""  />
								<p class="form_info">ID OF SECOND WINNER</p>
								<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="id2" id="id2" value=""  />
								<p class="form_info">ID OF THIRD WINNER</p>
								<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="id3" id="id3" value=""  />
								
								
								
								<div class="clear"></div>
								<br><input type="submit" class="btn btn-warning btn-form marg-right5" value="submit" />
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


