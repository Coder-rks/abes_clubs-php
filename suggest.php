<!-- Checking database connectivity, if true than proceed else stop -->
<?php 
error_reporting(0);
include('inc/database_connectivity.php');
session_start();

?>
<?php 
	try{
		$results = $db -> query("select category,description,icon,group_name,modal_name,link_to_table,is_direct from main_category");
		$categories = $results -> fetchAll(PDO::FETCH_ASSOC);
	}catch(Exception $ex){
	}

$section = "suggest";
$title = "ABES|Team";
include('inc/header.php'); 
?>



<div class="container-fluid">
			<div class="row">
			<?php 	foreach ($categories as $id => $category) { ?>
					<div class="col-sm-6 col-md-4">
					<img src="img/<?php echo $categories[$id]["icon"] ?>" /> 
			        <?php echo $categories[$id]["description"] ?>
												
						                        </br>
												</br>
					</div>
					<?php } ?>
					</div>
            </div>

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
<script type="text/javascript">
	//<![CDATA[
		$(document).ready(function(){	
			$("#ajax-contact-form").submit(function() {
				var str = $(this).serialize();		
				$.ajax({
					type: "POST",
					url: "contact_form/contact_process.php",
					data: str,
					success: function(msg) {
						// Message Sent - Show the 'Thank You' message and hide the form
						if(msg == 'OK') {
							result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
							$("#fields").hide();
						} else {
							result = msg;
						}
						$('#note').html(result);
					}
				});
				return false;
			});															
		});
	//]]>		
</script>


	
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
