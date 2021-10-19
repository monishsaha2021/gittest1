<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Talos</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	
	
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php bs() ?>public/blog_assets/css/base.css"/>
	<link rel="stylesheet" href="<?php bs() ?>public/blog_assets/css/skeleton.css"/>
	<link rel="stylesheet" href="<?php bs() ?>public/blog_assets/css/layout.css"/>
	<link rel="stylesheet" href="<?php bs() ?>public/blog_assets/css/color.css"/>
	<link rel="stylesheet" href="<?php bs() ?>public/blog_assets/css/font-awesome.css" />
	<link rel="stylesheet" href="<?php bs() ?>public/blog_assets/css/et-line.css"/>
	<link rel="stylesheet" href="<?php bs() ?>public/blog_assets/css/ionicons.min.css"/>
	<link rel="stylesheet" href="<?php bs() ?>public/blog_assets/css/owl.carousel.css"/>
	<link rel="stylesheet" href="<?php bs() ?>public/blog_assets/css/owl.transitions.css"/>
	<link rel="stylesheet" href="<?php bs() ?>public/blog_assets/css/retina.css"/>
	

		
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bs() ?>public/blog_assets/images/favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bs() ?>public/blog_assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bs() ?>public/blog_assets/images/apple-touch-icon-114x114.png">
	
	<script type="text/javascript" src="<?php bs() ?>public/blog_assets/js/modernizr.custom.js"></script> 
	
	
</head>
<body class="royal_preloader">	
	
	<div id="royal_preloader"></div>
	
	<div id="remove-class" class="preload">
	
	<!-- MENU
    ================================================== -->	

	<?php require_once('includes/header.php') ?>
		
	<!-- Primary Page Layout
	================================================== -->

		
		
		<div class="section back-white">
			<div class="section">
				<div id="cd-google-map">
					<div id="google-container"></div>
					<div id="cd-zoom-in"></div>
					<div id="cd-zoom-out"></div>
				</div>
			</div>
			<div class="section">
				<div class="container">
					<div class="twelve columns remove-top">
						<div class="contact-det-wrap" data-scroll-reveal="enter bottom move 100px over 1s after 0.3s">
							<div class="contact-det">
								<p>1. <span>drop a line</span></p>
								<h6>talosoffice@talos.com</h6>
								<h6>talossupport@talos.com</h6>
							</div>
							<div class="contact-det">
								<p>2. <span>call us</span></p>
								<h6>00381 (0)60123456789</h6>
								<h6>00381 (0)60111222333</h6>
							</div>
							<div class="contact-det">
								<p>3. <span>find us</span></p>
								<h6>kralja milutina 325</h6>
								<h6>11000 belgrade, serbia</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section padding-bottom">
				<div class="container">
					<form name="ajax-form" id="ajax-form" action="mail-it.php" method="post">
						<div class="six columns" data-scroll-reveal="enter bottom move 100px over 1s after 0.5s">
							<label for="name"> 
								<span class="error" id="err-name">please enter name</span>
							</label>
							<input name="name" id="name" type="text"   placeholder="Your Name: *"/>
						</div>
						<div class="six columns" data-scroll-reveal="enter bottom move 100px over 1s after 0.5s">
							<label for="email"> 
								<span class="error" id="err-email">please enter e-mail</span>
								<span class="error" id="err-emailvld">e-mail is not a valid format</span>
							</label>
							<input name="email" id="email" type="text"  placeholder="E-Mail: *"/>
						</div>
						<div class="twelve columns" data-scroll-reveal="enter bottom move 100px over 1s after 0.5s">
							<label for="message"></label>
							<textarea name="message" id="message" placeholder="Tell Us Everything"></textarea>
						</div>
						<div class="twelve columns" data-scroll-reveal="enter bottom move 100px over 1s after 0.5s">
							<div id="button-con"><button class="send_message button-effect button--moema button--text-thick button--text-upper button--size-s" id="send" data-lang="en">submit</button></div>					
						</div>
						<div class="clear"></div>	
						<div class="error text-align-center" id="err-form">There was a problem validating the form please check!</div>
						<div class="error text-align-center" id="err-timedout">The connection to the server timed out!</div>
						<div class="error" id="err-state"></div>
					</form>	
							
					<div class="clear"></div>
					<div id="ajaxsuccess">Successfully sent!!</div>
					<div class="clear"></div>
				</div>
			</div>		
		</div>
			
		
		<div class="section back-black padding-top-bottom-small">
				<div class="container z-bigger">
					<div class="twelve columns">
						<div id="owl-logos" class="owl-carousel owl-theme">											 
							<div class="item">
								<img  src="<?php bs() ?>public/blog_assets/images/logos/white1.png" alt="" />
							</div>											
							<div class="item">
								<img  src="<?php bs() ?>public/blog_assets/images/logos/white2.png" alt="" />
							</div>											
							<div class="item"> 
								<img  src="<?php bs() ?>public/blog_assets/images/logos/white3.png" alt="" />
							</div>											 
							<div class="item">
								<img  src="<?php bs() ?>public/blog_assets/images/logos/white4.png" alt="" />
							</div>										
							<div class="item">
								<img  src="<?php bs() ?>public/blog_assets/images/logos/white5.png" alt="" />
							</div>											
							<div class="item"> 
								<img  src="<?php bs() ?>public/blog_assets/images/logos/white6.png" alt="" />
							</div>													 
							<div class="item">
								<img  src="<?php bs() ?>public/blog_assets/images/logos/white1.png" alt="" />
							</div>											
							<div class="item">
								<img  src="<?php bs() ?>public/blog_assets/images/logos/white2.png" alt="" />
							</div>											
							<div class="item"> 
								<img  src="<?php bs() ?>public/blog_assets/images/logos/white3.png" alt="" />
							</div>											 
							<div class="item">
								<img  src="<?php bs() ?>public/blog_assets/images/logos/white4.png" alt="" />
							</div>										
							<div class="item">
								<img  src="<?php bs() ?>public/blog_assets/images/logos/white5.png" alt="" />
							</div>											
							<div class="item"> 
								<img  src="<?php bs() ?>public/blog_assets/images/logos/white6.png" alt="" />
							</div>								
						</div>	
					</div>
				</div>	
		</div>
		
	<?php require_once('includes/footer.php') ?>

	
	<!-- JAVASCRIPT
    ================================================== -->
<script type="text/javascript" src="<?php bs() ?>public/blog_assets/js/royal_preloader.min.js"></script>
<script type="text/javascript" src="<?php bs() ?>public/blog_assets/js/plugins.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvpnlHRidMIU374bKM5-sx8ruc01OvDjI"></script>
	<!-- ==================
		Go to this link to activated your google map API KEY https://developers.google.com/maps/documentation/javascript/tutorial#api_key 
		your key replace in script link for google map after .../maps/api/js?key=HERE_YOUR_API_KEY
		coordinates for map you can change in custom.js file 
	================== -->
<script type="text/javascript" src="<?php bs() ?>public/blog_assets/js/contact.js"></script>
<script type="text/javascript" src="<?php bs() ?>public/blog_assets/js/custom-contact.js"></script>    
<!-- End Document
================================================== -->
</body>
</html>