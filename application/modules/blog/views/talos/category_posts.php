<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Talos</title>
	<meta name="description" content="<?php echo empty($setting->meta_description) ? "" : $setting->meta_description;?>">
	<meta name="keywords" content="<?php echo empty($setting->meta_kewords) ? "" : $setting->meta_kewords;?>">
	<meta name="author" content="Salman Iqbal">

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
	<link rel="apple-touch-icon" href="<?php bs() ?>public/blog_assets/images/apple-touch-icon.png">
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

		<div class="section padding-bottom padding-top-page back-white" id="top">
			<div class="parallax-title-top"></div>	
			<div class="container z-bigger fade-elements">
				<div class="twelve columns">
					<div class="title-text top-page-title">
						<p>journal<span>you inspired me</span></p>
						<h3>I think the word 'blog' is an ugly word. I just don't know why people can't use the word 'journal'.</h3>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="section back-white" id="blog">
			<div class="section padding-bottom padding-top-page">
				<div class="container">

				<?php if (empty($category_posts)): ?>
					
					<h2><font>Not posts found</font></h2>

				<?php else: ?>	

				<?php foreach ($category_posts as $category_post): ?>
						
					<div class="six columns" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.3s">
						<div class="journal-wrap">
							<img  src="<?= $category_post->featured_img ?>" width="100" height="400" alt="posts"/>
							<div class="journal-det">
								<h6><span><?php echo date("d-m-Y", strtotime($category_post->created_at)) ?>.</span></h6>
								<h5>
									<?php echo $category_post->title ?>.
								</h5>
								<a href="<?php bs() ?>blog/post/<?php echo $category_post->slug ?>">
									<div class="link">read more</div>
								</a>
							</div>
						</div>
					</div>

				<?php endforeach ?>

				<?php endif ?>	

				<div class="clear"></div>

				</div>	
			</div>

		</div>	
	
	<?php require_once('includes/footer.php') ?>
	
	<!-- JAVASCRIPT
    ================================================== -->
<script type="text/javascript" src="<?php bs() ?>public/blog_assets/js/royal_preloader.min.js"></script>	
<script type="text/javascript" src="<?php bs() ?>public/blog_assets/js/plugins.js"></script>
<script type="text/javascript" src="<?php bs() ?>public/blog_assets/js/custom-blog.js"></script>    
<!-- End Document
================================================== -->
</body>
</html>