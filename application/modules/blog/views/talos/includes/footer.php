		
		<div class="section back-dark padding-top-bottom overflow-hidden">
			<div class="container">
				<div class="six columns" data-scroll-reveal="enter bottom move 100px over 1s after 0.4s">
					<div class="footer-top">
						<img src="<?php bs() ?>public/blog_assets/images/logo-light.png" alt="Some image" />
					</div>
				</div>
				<div class="six columns" data-scroll-reveal="enter bottom move 100px over 1s after 0.4s">
					<div class="footer-top">
						<div class="social-footer">
							<ul class="list-social-footer">
								<li class="icon-footer tipped" data-title="Linkedin"  data-tipper-options='{"direction":"top","follow":"true"}'>
									<a href="<?php echo empty($setting->Linkedin) ? "#" : $setting->Linkedin;?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								</li>
								<li class="icon-footer tipped" data-title="youtube"  data-tipper-options='{"direction":"top","follow":"true"}'>
									<a href="<?php echo empty($setting->youtube) ? "#" : $setting->youtube;?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
								</li>
								<li class="icon-footer tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'>
									<a href="<?php echo empty($setting->facebook) ? "#" : $setting->facebook;?>">&#xf09a;</a>
								</li>
							</ul>	
						</div>
					</div>
				</div>
				<div class="twelve columns remove-top remove-bottom" data-scroll-reveal="enter bottom move 100px over 1s after 0.4s">
					<div class="footer-line"></div>
				</div>
				<div class="five columns" data-scroll-reveal="enter bottom move 100px over 1s after 0.4s">
					<div class="left-footer">
						<p>2016 © Talos. All rights reserved.</p>
					</div>
				</div>
				<div class="two columns" data-scroll-reveal="enter bottom move 100px over 1s after 0.4s">
					<a href="#top" data-gal="m_PageScroll2id"><div class="arrow-up-footer"></div></a>
				</div>
				<div class="five columns" data-scroll-reveal="enter bottom move 100px over 1s after 0.4s">
					<div class="right-footer">
						<p>With love from IG Design.</p>
					</div>
				</div>
			</div>	
		</div>	

	</div>	


<script>

$("ul li a").filter(function(){
    return this.href == location.href.replace(/#.*/, "");
}).addClass("curent-multi-page");

</script>

<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://codeigniter-login.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
