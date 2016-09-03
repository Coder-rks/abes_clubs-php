<?php 

$section = "suggest";
$title = "Suggest Us";

?>


<?php include('inc/header.php'); ?>

	<!--page-->
	<div id="banner">
		<div class="container intro_wrapper">
			<div class="inner_content">
				<h1>Get In Touch</h1>
					<h1 class="title">Suggest Us</h1>
						<h1 class="intro">
							If you are <span>not</span> able to find the <span>category</span> you want.
							Then don't <span class="hue">hesitate</span> to ask to add it.<br/> Give the category name and bit of its description in the field given below.
						</h1>
					</div>
				</div>
			</div>
			
	
		
		<div class="container wrapper pad10">
			<div class="inner_content">
				<div class="row pad10">
					<div class="col-sm-6 col-md-4">
					<h3>
						Not able to find your category? Feel free to send us an email with your category requirement. We will reply within 48 hours.
					</h3>
					
				<h5>
						Email: <a href="mailto:#">suggestus@getallbest.com</a><br>
						
					</h5>
				</div>
				
				<div class="col-sm-6 col-md-8">
					<div class="contact_form">  
					<div id="note"></div>
					<div id="fields">
			<form id="registration-form"  method="POST" action="suggest-form-handler.php">
					<p class="form_info">name <span class="required">*</span></p>
						<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="name"  id="name" value="" />
					<p class="form_info">email <span class="required">*</span></p>
						<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="email" id="email" value=""  />
						
						<p class="form_info">Category</p>
						<input class="col-xs-12 col-sm-12 col-md-8" type="text" name="username" id="username" value="" /><br>
						<p class="form_info">Description</p>
						<textarea   class="col-xs-12 col-sm-12 col-md-12"  name="address" id="address" value="" ></textarea>
					
					
						<div class="clear"></div>
			
					<input type="submit" class="btn btn-primary btn-form marg-right5" value="submit" />
					<input type="reset" class="btn btn-primary btn-form" value="reset" />
				<div class="clear pad45"></div>
			</form>
		</div>
	</div>                   
	</div>                	
		</div>
			</div>
				</div>
    		<!--//page-->

<?php include('inc/footer.php'); ?>
				<a href="#"><i class="go-top fa fa-angle-double-up"></i></a>
				<!--//end--> 

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/retina.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript">




	


</script>
<script src="styleswitcher/js/styleswitcher.js"></script>
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
