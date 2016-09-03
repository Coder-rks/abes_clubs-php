<?php
$section = "about";
$title = "About Us";

?>

<body>
<?php include('inc/header.php'); ?>

			<!--thanks code-->
				<div class="strip">
					<h1 class=""><span class="hue">CONTACT</span></h1>
					<h3 class="center about_strip">
						Thanks for contacting us, we will be in a touch soon.	
					</h3>
				</div>
			<!--/thanks code-->
				
<?php include('inc/footer.php'); ?>		

				<!-- up to top -->
				<a href="#"><i class="go-top fa fa-angle-double-up"></i></a>
				<!--//end--> 
				
<!-- scripts -->
<script src="js/jquery.js"></script>			
<script src="js/bootstrap.min.js"></script>
<script src="js/retina.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<!-- skills -->
<script>
//<![CDATA[
 setTimeout(function(){
 $('.progress .bar').each(function() {
            var me = $(this);
            var perc = me.attr("data-percentage");
			 var current_perc = 0;
			var progress = setInterval(function() {
                if (current_perc>=perc) {
                    clearInterval(progress);
                } else {
                    current_perc +=1;
                    me.css('width', (current_perc)+'%');
                }
				me.text((current_perc)+'%');
			}, 20);
		});
	},300);
	 //]]>
</script>
	<script src="styleswitcher/js/styleswitcher.js"></script>				
</body>

<!-- Mirrored from www.spiralpixelthemes.co.uk/flatinew/flati/about.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 10 Apr 2015 11:43:41 GMT -->
</html>