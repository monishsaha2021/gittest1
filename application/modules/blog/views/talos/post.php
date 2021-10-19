<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Talos</title>
	<meta name="description" content="<?php echo empty($post->meta_desc) ? "" : $post->meta_desc;?>">
	<meta name="keywords" content="<?php echo empty($post->meta_keywords) ? "" : $post->meta_keywords;?>">
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

	<script src="//platform-api.sharethis.com/js/sharethis.js#property=5b3b837fc5ed960011521836&product=inline-share-buttons"></script>

	
	
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
						<p><?php echo date("d-m-Y", strtotime($post->created_at)) ?>.<span>by 
							<?php echo empty($post->username) ? "Admin" : $post->username; ?></span></p>
						<h3><?php echo $post->title ?>.</h3>
					</div>
				</div>
			</div>
		</div>
		
		<div class="section back-white">
			<div class="section padding-top-bottom">
				<div class="container">
					<div class="eight columns">	
						<div id="owl-post-slider" class="owl-carousel owl-theme">
													 
							<div class="item">
								<img src="<?php echo $post->featured_img ?>" width="100%">		
							</div>	
													 
						</div>	
						<div class="post" data-scroll-reveal="enter bottom move 100px over 1s after 0.4s">	
							<?php echo $post->content ?>

							<font size="4">Share:</font> <div class="sharethis-inline-share-buttons"></div>
						</div>														
							
					<?php if($setting->enable_comments == 1): ?>
						
						<?php if ($post->allow_comments == 1): ?>
							
						<br><br>

						<div id="disqus_thread"></div>

						<?php endif ?>

					<?php endif; ?>	
                            																
					</div>
					<div class="four columns">	
						<div class="sidebar" data-scroll-reveal="enter bottom move 100px over 1s after 0.4s">
							<form action="<?php bs() ?>blog/BlogFrontend/search" method="get" accept-charset="utf-8">
								<input name="search" type="text" placeholder="To search type and hit enter"/>
							</form>
							<div class="separator-sidebar"></div>
							<h6>recent posts</h6>
							<div class="link-recents">

								<?php if (empty($recent_posts)): ?>
									
									<a href="#">Recent Posts Not Available.</a>

								<?php else: ?>	

								<?php foreach ($recent_posts as $recent): ?>

									<?php if ($setting->enable_recent_post == 0): ?>
										
										<a href="#"><font color="red">Recent Posts Disable by Admin.</font></a>

										<?php break; ?>

									<?php else: ?>

									<a href="<?php bs() ?>blog/post/<?php echo $recent->slug ?>"><?php echo $recent->title ?></a>

									<?php endif ?>

								<?php endforeach ?>	

								<?php endif ?>
							</div>
							<div class="separator-sidebar"></div>
							<h6>Categories</h6>
								<div class="link-recents">

									<?php if (empty($categories)): ?>
										
										<a href="#">Categories Not Available.</a>

									<?php else: ?>	

									<?php foreach ($categories as $category): ?>

										<?php if ($setting->enable_category_posts == 0): ?>
											
											<a href="#"><font color="red">Categories Posts Disable by Admin.</font></a>

											<?php break; ?>

										<?php else: ?>
											
										<a href="<?php bs() ?>blog/category/<?php echo $category->slug ?>"><?php echo $category->cat_name ?></a>

										<?php endif ?>

									<?php endforeach ?>	

									<?php endif ?>
								</div>	
							<div class="separator-sidebar"></div>
							<h6>tags</h6>
							<div class="link-tag">

							<?php if (empty($tags)): ?>
									
								<a href="#">Tags Not Define</a>

							<?php else: ?>		

								<?php foreach ($tags as $tag): ?>
									
									<a href="<?php bs() ?>blog/tags/<?php echo $tag->slug ?>"><?php echo $tag->tag ?></a>

								<?php endforeach ?>

							<?php endif ?>	
							</div>
						</div>
					</div>
				</div>	
			</div>
			
			<div class="section padding-bottom">
				<div class="container">
					<div class="twelve columns" data-scroll-reveal="enter bottom move 100px over 1s after 0.4s">
						<nav role="navigation">
							<ul class="cd-pagination animated-buttons custom-icons">
								<li class="button-pag">
									<a href="<?php echo empty($prev->slug) ? "#" : $prev->slug; ?>"><i>prev</i></a>
								</li>
								<li class="button-pag">
									<a href="<?php echo empty($next->slug) ? "#" : $next->slug; ?>"><i>next</i></a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>		
		</div>	

	<?php require_once('includes/footer.php') ?>

	
	<!-- JAVASCRIPT
    ================================================== -->
<script type="text/javascript" src="<?php bs() ?>public/blog_assets/js/royal_preloader.min.js"></script>
<script type="text/javascript" src="<?php bs() ?>public/blog_assets/js/plugins.js"></script>
<script type="text/javascript" src="<?php bs() ?>public/blog_assets/js/custom-post.js"></script>    
<!-- End Document
================================================== -->
</body>
</html>