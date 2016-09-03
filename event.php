<?php 
error_reporting(0);
ini_set('display_errors', FALSE);
ini_set('display_startup_errors', FALSE);

include('inc/database_connectivity.php');
$table_name = $_GET["id"];



$results = $db -> query("select id,category,name_event,conducted_by,registration_detail,fee,date,time1,time2,venue from $table_name");


$categories = $results -> fetchAll(PDO::FETCH_ASSOC);

?>
<body>





<?php include('inc/header.php'); ?>
	
	<!--categories-->
	<!--yellow header-->
	<div class="jumbotron">
	<div class="container">
  <h1><center>EVENTS
  </center></h1>
  </div>
  </div>
	
    
           	<div class="container wrapper">
			<div class="inner_content">
			
			
                <!-- portfolio_block -->

				<div class="row">      
                    
                <?php 	foreach ($categories as $id => $category) { ?>
			   <div class="col-md-12">
                <center><ol class="breadcrumb"><li><?php echo $categories[$id]["name_event"]?></li></ol></center>
  
				</div>
<div class="col-md-12">
			    <div class="table-responsive">			
				<table class="table table-bordered">
  
               
  <tr>
  <td><center><b><u>DATE(yyyy-mm-dd)</u></b></center></td>
  <td><center><b><u>TIME</u></b></center></td>
  <td><center><b><u>VENUE</u></b></center></td>
  <td><center><b><u>CONDUCTED BY</u></b></center></td>
  <td><center><b><u>REGISTRATION</u></b></center></td>
  <td><center><b><u>FEE(Rs)</u></b></center></td>
  </tr>
  
  <tr>
  <td><center><?php echo $categories[$id]["date"] ?></center></td>
  <td><center><?php echo $categories[$id]["time1"] ?>-<?php echo $categories[$id]["time2"] ?></center></td>
  <td><center><?php echo $categories[$id]["venue"] ?></center></td>
  <td><center><?php echo $categories[$id]["conducted_by"] ?></center></td>
  <td><center><?php echo $categories[$id]["registration_detail"] ?></center></td>
  <td><center><?php echo $categories[$id]["fee"] ?></center></td>
  </tr>
  
  
  
                </table>
                </div>
				
</div>
			
				
					                          

							<?php } ?>
           			
				<div class="clear"></div>
                <!--portfolio_block -->   
            </div>
        </div>
    </div>
	<div class="pad25 hidden-md hidden-lg"></div>
	<!--//categories-->

		 <br>
<br><br><br>
<?php include('inc/footer.php'); ?>

				<!-- up to top -->
				<a href="#"><i class="go-top fa fa-angle-double-up"></i></a>
				<!--//end-->
				 
<!-- SCRIPTS -->
<script src="js/jquery.js"></script>			
<script src="js/bootstrap.min.js"></script>	
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- slider settings -->
<script type="text/javascript">
	//<![CDATA[
			jQuery(document).ready(function() {
					jQuery('.tp-banner').show().revolution(
				{
					delay:9000,
					startwidth:1170,
					startheight:500,
					navigationType:"bullet",
					navigationStyle:"square",
					hideBulletsOnMobile:"on",
					hideArrowsOnMobile: "on",
					shadow:0,
					fullWidth:"on",
				});
			});	
		//]]>
	</script>

<script src="js/jquery.touchSwipe.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>				
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/retina.js"></script>
<!-- carousel -->
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function($) {
	$("#slider_home").carouFredSel({ 
		width : "100%", 
		height : "auto",
		responsive : true,
		auto : false,
		items : { width : 280, visible: { min: 1, max: 3 }
		},
		swipe : { onTouch : true, onMouse : true },
		scroll: { items: 1, },
		prev : { button : "#sl-prev", key : "left"},
		next : { button : "#sl-next", key : "right" }
		});
	});
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
	$(document).ready(function(){
	var $container = $('.projects');
	$container.imagesLoaded(function() {
	$('.projects').fadeIn(1000).isotope({
	layoutMode : 'fitRows',
    itemSelector : '.element' });
	});
	$('.element').css('opacity',0);
	$('.element').each(function(i){
	$(this).delay(i*150).animate({'opacity':1},350);
	});
});
//]]>
</script>

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
