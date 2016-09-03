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
$section = "home";
$title = "Welcome to GAB"

?>

<body>

<?php include('inc/header.php'); ?>
<?php include('inc/slider.php'); ?>
	


	<div id="banner">
	<div class="container intro_wrapper">
	<div class="inner_content">
	
	<!--welcome-->
		<div class="welcome_index">
			We think most of the people <span class="hue_block white normal">spend</span> their whole time in searching the things on internet, but never finds it easily.
			<span class="hue"> getAllBest.com</span>	will help you to save your time and will provide you the best <span>websites</span>.
			
		</div>
	<!--//welcome-->
		</div>
	</div>
	</div>
	<!--//banner-->

	<!--categories-->
	
			<div class="container wrapper">
			<div class="inner_content">
			
			<div id="options">                                           
                    <ul id="filters" class="option-set" data-option-key="filter">
                        <li><a href="#filter" data-option-value="*" class=" selected">All</a></li>
                        <li><a href="#filter" data-option-value=".entertainment">Entertainment</a></li>                                            
                        <li><a href="#filter" data-option-value=".education">Education</a></li>
                        <li><a href="#filter" data-option-value=".fashion">Fashion</a></li> 
                        <li><a href="#filter" data-option-value=".saving">Saving</a></li>
                        <li><a href="#filter" data-option-value=".hungry">Hungry</a></li>
                        <li><a href="#filter" data-option-value=".design">Design</a></li>
                        <li><a href="#filter" data-option-value=".travel">Travel</a></li>
                        <li><a href="#filter" data-option-value=".ads">Ads [Classified]</a></li>
                        <li><a href="#filter" data-option-value=".software">Software</a></li>  
                        <li><a href="#filter" data-option-value=".politics">Politics</a></li>
                        <li><a href="#filter" data-option-value=".marriage">Marriage</a></li>
                        <li><a href="#filter" data-option-value=".vehicle">Vehicle</a></li>
                        <li><a href="#filter" data-option-value=".housing">Housing</a></li>
                        <li><a href="#filter" data-option-value=".news">News</a></li>
                        <li><a href="#filter" data-option-value=".health">Health</a></li>
                        
                    </ul>                                           
                    <div class="clear"></div>
            </div>
                <!-- portfolio_block -->

             	<div class="row">      
                <div class="projects">                            
                    

                <!--Displaying   -->
                <?php 	foreach ($categories as $id => $category) { ?>
					<div class="col-xs-6 col-md-3 element <?php echo $categories[$id]["group_name"] ?>" data-category="">
						
						<!-- If catoegory is Songs then only make the  Modal -->
						<?php if ($categories[$id]["category"]==='Songs') { ?>

							<div >

								<a  href="" data-toggle="modal" data-target="#<?php echo $categories[$id]["modal_name"] ?>" >	
		                            <img src="img/<?php echo $categories[$id]["icon"] ?>" alt=""  style="background-color: #323a45;"/>
		                       	</a>

								<!-- <a  href="" data-toggle="modal" data-target="#<?php echo $categories[$id]["modal_name"] ?>" >	
		                            <img src="img/<?php echo $categories[$id]["icon"] ?>" alt="" />
		                       	</a> -->

		                    </div>  

		                     <div class="item_description">
		                       <a href="" data-toggle="modal" data-target="#<?php echo $categories[$id]["modal_name"] ?>" >
		                       	   <span class="category_name"><?php echo $categories[$id]["category"] ?></span>
		                       </a>
		                       <br/>
								<?php echo $categories[$id]["description"] ?>
		                    </div>  
	                    <?php } else { ?>

	                    		<!-- If there is no subcategory then forward the user to the links page direcly -->
	                    		<?php if ($categories[$id]["is_direct"]==='yes') { ?>
		                    		<div>
			                   	    	 <a  href="links.php?sub_category=<?php echo $categories[$id]["link_to_table"] ?>" >
			                   	    		<img src="img/<?php echo $categories[$id]["icon"] ?>" alt="" style="background-color: #323a45;" /> 
			                   	    	</a> 

										 <div class="item_description">
						                       <a href="sub_category.php?sub_category=<?php echo $categories[$id]["link_to_table"] ?>" >
						                       	   <span class="category_name"><?php echo $categories[$id]["category"] ?></span>
						                       </a>
											   <br/>
											   <?php echo $categories[$id]["description"] ?>
						                 </div>  

			                   	    	
											
										</div>

			                   		
			                   	<!-- If there are sub-categories of particular category then take him to the subcategories page -->
	                    		<?php } else { ?>
			                   	    <div>
			                   	    	<!-- <a  href="sub_category.php?sub_category=<?php echo $categories[$id]["link_to_table"] ?>" > -->
			                   	    	<a  href="category-<?php echo $categories[$id]["link_to_table"] ?>" >
			                   	    		<img src="img/<?php echo $categories[$id]["icon"] ?>" alt="" style="background-color: #323a45;" />

			                   	    	</a> 

			                   	    	 <div class="item_description">
						                       <!-- <a href="sub_category.php?sub_category=<?php echo $categories[$id]["link_to_table"] ?>" > -->
						                       <a  href="category-<?php echo $categories[$id]["link_to_table"] ?>" >
						                       	   <span class="category_name"><?php echo $categories[$id]["category"] ?></span>
						                       </a>
											   <br/>
											   <?php echo $categories[$id]["description"] ?>
						                      </div>  

			                   	    	
										</div>
				                   	    	

				                     
	                   	   		<?php } ?>

			                    

			                    




	                    <?php } ?>


				    </div>
                <?php
            	}
				?>


					          
                    <div class="clear"></div>
                </div>   
                <!-- //portfolio_block -->   
            </div>
        </div>
    </div>
	<div class="pad25 hidden-md hidden-lg"></div>
	<!--//categories-->

	<?php
        foreach ($categories as $id => $category) { ?>


        <!-- Modal for songs -->
		<?php if ($categories[$id]["category"]==='Songs') { ?>
		  
		  <div id="<?php echo $categories[$id]["modal_name"] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		      <div class="modal-content-custom">

		        <div class="modal-header-custom">
		          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		          <img src="img/<?php echo $categories[$id]["icon"] ?>" alt="" width="50px" height="50px" />
		          <h4 class="modal-title" id="myModalLabel"><?php echo $categories[$id]["category"] ?></h4>
		        </div>
		        
				<div class="modal-body row">

					<div class=" col-xs-12 online-block">

						<a href="online_links.php?id=online_songs">
							
								Click here for online streaming.
							
						</a>
					
			          		<!-- <form  role="form" action="online_links.php" method="post">
			          		<input type="hidden" value="<?php echo $categories[$id]["category"] ?>" name="sub_category" >
							  <button type="submit" style="background:none;color:#fff;" target="_blank" class="btn btn-default">Click here for online streaming.</button>
							</form> -->
							<!-- <h3>Click here for online streaming.</h3></a> -->
			          </div>
			          
			          <div class=" col-xs-12 offline-block">
			          <a href="offline_links.php?id=offline_songs">
							
								Click here to download the content
							
						</a>
			          		<!-- <form role="form" action="offline_links.php" method="post">
			          		  <input type="hidden" value="<?php echo $categories[$id]["category"] ?>" name="sub_category" >
							  <button type="submit" style="background:none;color:#fff;" class="btn btn-default">Click here to download the content.</button>
							</form> -->

			          		<!-- <a href="inc/offline_links.php"><h3>Click here to download the content.</h3></a> -->
			          </div>		         
		        </div>

		        <div class="modal-footer-custom">
		          <button type="button" class="btn btn-primary" data-dismiss="modal">Close </button>
		        </div>
			 </div><!-- /.modal-content -->
		    </div><!-- /.modal-dialog -->
		  </div><!-- /.modal -->
		<?php } ?>
		<!-- end of modal for songs -->

	<?php 
	}
	?>


<?php include('inc/footer.php'); ?>
	
	






			
	
	
	

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

<script src="styleswitcher/js/styleswitcher.js"></script>
</body>

</html>
