<?php 
error_reporting(0);
ini_set('display_errors', FALSE);
ini_set('display_startup_errors', FALSE);

include('inc/database_connectivity.php');

$table_name = $_GET["id"];

$results = $db -> query("select id,category,about,club_name,link_to_events,link_to_gallery,link_to_contact,link_to_result from  $table_name");
$categories = $results -> fetchAll(PDO::FETCH_ASSOC);
$section = "category";
$title = "ABES|Club|About Us"
?>
<body>
<?php include('inc/header.php'); ?>
	
	<!--categories-->
	<!--yellow header-->
	<div class="jumbotron">
	<div class="container">
  <h1><center><?php foreach ($categories as $id => $category)?> 
                            <?php echo $categories[$id]["club_name"] ?>
  </center></h1>
  </div>
  </div>
	
    
           	<div class="container wrapper">
			<div class="inner_content">
			
			
                <!-- portfolio_block -->

				<div class="row">      
                <div class="projects">                            
                    
                <?php 	foreach ($categories as $id => $category) { ?>
			   <div class="col-md-12">
<?php if($categories[$id]["category"]=='dramatics' || $categories[$id]["category"]=='yoga' || $categories[$id]["category"]=='nss' ) { ?>
							<a href="club-<?php echo $categories[$id]["link_to_events"]?>"><button type="button" class="btn btn-warning btn-lg">Events</button></a>
							<a href="contact-<?php echo $categories[$id]["link_to_contact"]?>"><button type="button" class="btn btn-warning btn-lg">Contact</button></a>
							<a href="gallery-<?php echo $categories[$id]["link_to_gallery"]?>"><button type="button" class="btn btn-warning btn-lg">Gallery</button></a>

							<?php } else if($categories[$id]["category"]=='publication') { ?>
                           <a href="contact-<?php echo $categories[$id]["link_to_contact"]?>"><button type="button" class="btn btn-warning btn-lg">Contact</button></a>
							<?php } else { ?>
							<a href="club-<?php echo $categories[$id]["link_to_events"]?>"><button type="button" class="btn btn-warning btn-lg">Events</button></a>
							<a href="result-<?php echo $categories[$id]["link_to_result"]?>"><button type="button" class="btn btn-warning btn-lg">Result</button></a>
							<a href="contact-<?php echo $categories[$id]["link_to_contact"]?>"><button type="button" class="btn btn-warning btn-lg">Contact</button></a>
							<a href="gallery-<?php echo $categories[$id]["link_to_gallery"]?>"><button type="button" class="btn btn-warning btn-lg">Gallery</button></a>
							
				
				<?php } }?>
							</div>
			                              
<div class="col-md-12">
							
							<center><H1 style="color:orange";>ABOUT US</H1></center>
							<hr>
							<center><h3><?php echo $categories[$id]["about"] ?></h3></center>
							<hr>
							</div>
               				<br><br>
							
							
							
							
                                  							
				<div class="clear"></div>
                </div>   
                <!-- //portfolio_block -->   
            </div>
        </div>
    </div>
	<div class="pad25 hidden-md hidden-lg"></div>
	<!--//categories-->

		
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
