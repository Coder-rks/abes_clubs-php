<?php $title = "Thanks" ?>

<body>
<?php include('inc/header.php'); ?> 
<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=clubs;port=3306","root","");
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $conn->beginTransaction();
    // our SQL statememtns
    $conn->exec("INSERT INTO {$_POST['select']}_result values(id,'{$_POST['name_event']}','{$_POST['winner1']}','{$_POST['winner2']}','{$_POST['winner3']}','{$_POST['id1']}','{$_POST['id2']}','{$_POST['id3']}')");
 
    
    // commit the transaction
    $conn->commit();?>
<br><br><br><br><br><br><br>

	<div class="strip">
				<h1 class=""><span class="hue"></span></h1>
				<h3 class="center about_strip">
					<h1>Thanks for updating</h1>	
				</h3>
			</div>
	<?php }
catch(PDOException $e)
    {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
    }

$conn = null;
?>








	<br><br><br><br><br><br><br>
 <?php include('inc/footer.php'); ?> 





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


