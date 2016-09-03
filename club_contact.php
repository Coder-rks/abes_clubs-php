<!-- Checking database connectivity, if true than proceed else stop -->
<?php 
error_reporting(0);
include('inc/database_connectivity.php');
session_start();

?>
<?php 
$table_name=$_GET["id"];
	try{
		$results = $db -> query("select id,head1,head2,contact2,contact1,contact3,department,email1,email2,counsellor,counsellor_email from $table_name");
		$categories = $results -> fetchAll(PDO::FETCH_ASSOC);
	}catch(Exception $ex){
	}
$section = "home";
$title = "ABES|clubs|contact"

?>

<body>

<?php include('inc/header.php'); ?>

<div class="jumbotron">
	<div class="container">
  <h1><center>CONTACT
  </center></h1>
  </div>
  </div>
	<br><br>
	

	<!--categories-->
	
			<div class="container-fluid">
			<div class="row">
			       <?php 	foreach ($categories as $id => $category) { ?>
					<div class="col-md-12"><center>
					                                                       ABES Engineering College<br>
                                                                           Campus -1, 19th KM Stone,
                                                                           NH-24, Delhi-Hapur Bypass Road, Vijay Nagar, Ghaziabad U.P., India 
                                                                           <br>Tel : +91-22-6694-5555<br><br>
					</center></div>
				
					<div class="col-md-12">
					<center><ol class="breadcrumb"><li><?php echo $categories[$id]["department"] ?></li></ol>
                    </center>
				</div>		

					<div class="col-md-4">
					<center><ol class="breadcrumb"><li>CLUB HEAD</li></ol>
					<center><?php echo $categories[$id]["head1"] ?>
                    </center>
					<center><?php echo $categories[$id]["email1"] ?>
                    </center>
					<center><?php echo $categories[$id]["contact1"] ?>
                    </center>
					
                    
					</center>
				</div>		
				
					<div class="col-md-4">
					<center><ol class="breadcrumb"><li>CLUB COUNSELOR</li></ol>
                    </center>
					
					<center><?php echo $categories[$id]["counsellor"] ?>
                    </center>
					<center><?php echo $categories[$id]["counsellor_email"] ?>
                    </center>
					<center><?php echo $categories[$id]["contact2"] ?>
                    </center>
				</div>		
					<div class="col-md-4">
					<center><ol class="breadcrumb"><li>CLUB HEAD</li></ol>
                    </center>
					<center><?php echo $categories[$id]["head2"] ?>
                    </center>
					<center><?php echo $categories[$id]["email2"] ?>
                    </center>
				<center><?php echo $categories[$id]["contact3"] ?>
                    </center>
				
				</div>		
				
				
				
				
						                       <br> <br>
												<br>
					</div>
					<?php } ?>
					</div>
            </div>
			
			
			   <br> <br>
												
												<br>   <br> <br>
												<br>
			<?php include('inc/footer.php'); ?>

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
					startheight:600,
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
	$(this).delay(i*40).animate({'opacity':1},350);
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
