<?php 
	$siteinfo = array(
        'title'         => 'unoSlider',
        'tagline'       => 'Lightweight jQuery Content Slider',
        'description'   => 'A jQuery plugin for creating a simple, yet elegant and versatile content slider.',
        'url'           => 'http://unoslider.npmedia.net'
		);

?><!doctype html>
<!--[if IE 7 ]>    <html class="no-js ie7" > <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" > <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!--META-->
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $siteinfo['description']; ?>">
	<meta name="author" content="Nelson Polanco">
	
	<!-- FB Meta -->
	<meta property="og:title" content="<?php echo $siteinfo['title']; ?> | <?php echo $siteinfo['tagline']; ?>" />
	<meta property="og:description" content="<?php echo $siteinfo['description']; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo $siteinfo['url']; ?>" />
	<meta property="og:image" content="<?php echo $siteinfo['url']; ?>/img/icon110x110.png" />
	
	<!--TITLE-->
	<title><?php echo $siteinfo['title']; ?> | <?php echo $siteinfo['tagline']; ?></title>
	<!--STYLES-->
	<link href='http://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.min.css?v=1" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/unoSlider.min.css" type="text/css" media="screen" />
</head> <body>
<div id="fb-root"></div>
<div class="ad">
	<script type="text/javascript"><!--
	google_ad_client = "ca-pub-8986945174197010";
	/* unoSlider Head */
	google_ad_slot = "1534510104";
	google_ad_width = 468;
	google_ad_height = 60;
	//-->
	</script>
	<script type="text/javascript"
	src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
</div>

<div role="main" id="wrapper">
	
	<h1 class="maintitle"><span>uno</span>Slider</h1>

	<div id="slider2" class="unoSlider">
		<ul>
			<li class="current">
				<img src="img/sum_hood.jpg" alt="sum_hood" width="960" height="408" />
			</li>
				
			<li>
				<img src="img/sum_branch.jpg" alt="sum_branch" width="960" height="408" />
			 </li>
				
			<li>
				<img src="img/sum_city-lights.jpg" alt="sum_city-lights" width="960" height="408" />
			</li>
			<li>
				<img src="img/sum_peekaboo.jpg" alt="sum_peekaboo" width="960" height="408" />
			</li>
			
		</ul>
		<div class="unoSliderNav">
				<div class="sliderNavText"><a id="slider2Back" href="#">Back</a><a id="slider2Next" href="#">Next</a></div>
		</div>
		<div class="download-banner" src="#">Free Download</div>
		<a class="download-btn" href="#" title="Download Uno Slider &raquo; 2KB Zip">v1.0 (2KB ZIP)</a>
	</div><!-- #slider2 -->


	<div class="block sharebar">
		<a href="https://twitter.com/share" class="twitter-share-button" data-via="npolanco10">Tweet</a>
		<div class="fb-like" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false" data-font="lucida grande"></div>

		

	</div><!-- .sharebar -->


	<div id="ticker" class="block unoSlider">
		<div class="ticker-title">Breaking News</div>
		<ul>
			<li class="current"><a href="#">Soulcalibur 5 Review: A Tale of Swords and Swords that WILL be eternally retold!</a></li>
			<li><a href="#">Resident Evil 6: The president is a zombie! So, what's new?</a></li>
			<li><a href="#">Run Roo Run: The next game from 5th Cell hops to iOS</a></li>
		</ul>
	</div>




	<div class="clr columns">
		<div id="slider1" class="col unoSlider">
			<div class="slider-header">
				<span>Beauty Tips</span>
				<div class="unoSliderNav"></div>
			</div>
			<ul>
				<li class="current">
					<b>Necklace Know-How</b><br>Not sure how long of a necklace to wear? The pendant should drop on the collarbone for a demure look. If you're feeling really sexy, try a longer chain that goes down to your décolletage.
				</li>
					
				<li>
					<b>Enhance Your Eyes</b><br>
					Are your eyes your best feature? Match your gemstones to your eye color to accentuate that special sparkle in your eye
				 </li>
					
				<li>
					<b>Get Eclectic</b><br>
					Matching your earrings to your necklace is always elegant; but don't be afraid to mix things up with different colors and textures!
				</li>
				
				<li>
					<b>Instant Glamour</b><br>
					Transform your little black dress with a hit of sparkly color. A bold pendant necklace or colorful earrings add effortless flair to a simple chic outfit.
				</li>
				
				<li>
					<b>Go Green!</b><br>
					Angelina Jolie, Reese Witherspoon, and Amy Adams are just a few celebrities who have recently sported gorgeous emerald earrings on the red carpet. Green gemstones are eye-catching and a hot color for this spring.			
				</li>
			</ul>
		</div><!-- #slider1 -->
		
		<div id="slider3" class="col unoSlider">
			<div class="slider-header">
				<span>No Nav + Auto</span>
			</div>
			<ul class="nobullets">
				<li class="current">
					<b>Necklace Know-How</b><br>Not sure how long of a necklace to wear? The pendant should drop on the collarbone for a demure look. If you're feeling really sexy, try a longer chain that goes down to your décolletage.
				</li>
					
				<li>
					<b>Enhance Your Eyes</b><br>
					Are your eyes your best feature? Match your gemstones to your eye color to accentuate that special sparkle in your eye
				 </li>
					
				<li>
					<b>Get Eclectic</b><br>
					Matching your earrings to your necklace is always elegant; but don't be afraid to mix things up with different colors and textures!
				</li>
				
				<li>
					<b>Instant Glamour</b><br>
					Transform your little black dress with a hit of sparkly color. A bold pendant necklace or colorful earrings add effortless flair to a simple chic outfit.
				</li>
				
				<li>
					<b>Go Green!</b><br>
					Angelina Jolie, Reese Witherspoon, and Amy Adams are just a few celebrities who have recently sported gorgeous emerald earrings on the red carpet. Green gemstones are eye-catching and a hot color for this spring.			
				</li>
			</ul>
		</div><!-- #slider3 -->
	
		<div id="slider4" class="col last unoSlider">
			<div class="slider-header">
				<span>No Trasition + Auto</span>
			</div>
			<ul>
				<li class="current">
					<b>Necklace Know-How</b><br>Not sure how long of a necklace to wear? The pendant should drop on the collarbone for a demure look. If you're feeling really sexy, try a longer chain that goes down to your décolletage.
				</li>
					
				<li>
					<b>Enhance Your Eyes</b><br>
					Are your eyes your best feature? Match your gemstones to your eye color to accentuate that special sparkle in your eye
				 </li>
					
				<li>
					<b>Get Eclectic</b><br>
					Matching your earrings to your necklace is always elegant; but don't be afraid to mix things up with different colors and textures!
				</li>
				
				<li>
					<b>Instant Glamour</b><br>
					Transform your little black dress with a hit of sparkly color. A bold pendant necklace or colorful earrings add effortless flair to a simple chic outfit.
				</li>
				
				<li>
					<b>Go Green!</b><br>
					Angelina Jolie, Reese Witherspoon, and Amy Adams are just a few celebrities who have recently sported gorgeous emerald earrings on the red carpet. Green gemstones are eye-catching and a hot color for this spring.			
				</li>
			</ul>
		</div><!-- #slider4 -->
	
	</div><!-- .columns -->


	<div id="documentation" class="block">
		<ul class="tabs">
			<li data-tab="1" class="current">Usage</li>
			<li data-tab="2">Plugin Options</li>
			<li data-tab="3">unoSlider API</li>
			
		</ul><!-- .tabs -->
		
		<ul class="tab-content nobullets unoSlider">
			<li id="tab-usage">
				<h4 class="section-heading">Basic Slider</h4>

				<p>For starters, add the CSS to the <em>head</em> of your document</p>
				<pre>&lt;link rel="stylesheet" href="css/unoSlider.min.css" type="text/css" media="screen" /&gt</pre>

				<p>Second, include jQuery and the unoSlider scripts to the bottom of the html right before you close out the body:</p>

				<pre>...

&lt;script src="js/jquery-1.7.1.min.js"&gt;&lt;/script&gt;
&lt;script src="js/unoSlider-1.0.min.js"&gt;&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;</pre> 

				<p>A basic unoSlider only requires the following HTML pattern:</p>
				
				<pre>
&lt;div id="sliderId"&gt;
  &lt;ul&gt;
    &lt;li class="current"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;/li&gt;
    &lt;li&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</pre>
				
				<p>Any content within the li tags will be a slide panel. The class of "<em>current</em>" is given to the first slide so that the first slide is viewable while the page loads.</p>
				
				<p>You would then initiate the plugin in the following manner:</p>
				
<pre>... 

&lt;script src="js/jquery-1.7.1.min.js"&gt;&lt;/script&gt;
&lt;script src="js/unoSlider-1.0.min.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript"&gt;
	$(document).ready(function() {
		// My Uno Slider
		window.unoSlider = $('#sliderId').unoSlider();
	});
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;</pre>

				<p>This gives you a slider which will autoplay. Next slide every 5 seconds (the default).</p>
				
				
				<h4 class="section-heading">Slider With Nav</h4>
				<p>If you would like to add a bulleted nav to you slider, simply include a div with a class of "unoSliderNav" anywhere within your slider container.</p>

				<pre>
&lt;div id="sliderId"&gt;
	&lt;div class="unoSliderNav"&gt;&lt;/div&gt;
	&lt;ul&gt;
		&lt;li class="current"&gt;&lt;/li&gt;
		&lt;li&gt;&lt;/li&gt;
		&lt;li&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;</pre>
				
			</li> <!-- #tab-usage -->
			
			<li id="tab-options">
				<h4 class="section-heading">Plugin Options</h4>
				<p>Any of the following options can be passed in to alter the behavior of the slider. </p>
				<pre>
animSpeed:  250,
speed:      5,	//seconds
auto:       true,
easing:     'swing',
next:       false,
prev:       false,
prev:       false,
pause:      false,
bullets:    false,
callback:   function()
</pre>
			</li> <!-- #tab-api -->
			
			<li id="tab-api">
				<h4 class="section-heading">API Documentation</h4>
				<p>There are several functions exposed globally with unoSlider so that you have more control of the slider.</p>
					<dl>
						<dt>initialize</dt>
							<dd><strong>params:</strong> none</dd>
							<dd><strong>Usage:</strong> <em>unoSlider.initialize()</em></dd>
							<dd>Sets up the slider for first time user.</dd>

						<dt>startTimer</dt>
							<dd><strong>params:</strong> none</dd>
							<dd><strong>Usage:</strong> <em>unoSlider.startTimer()</em></dd>
							<dd>Start the auto rotating timer for the slider.</dd>

						<dt>killTimer</dt>
							<dd><strong>params:</strong> none</dd>
							<dd><strong>Usage:</strong> <em>unoSlider.killTimer()</em></dd>
							<dd>Stops the auto rotating timer for the slider.</dd>

						<dt>resetTimer</dt>
							<dd><strong>params:</strong> none</dd>
							<dd><strong>Usage:</strong> <em>unoSlider.resetTimer()</em></dd>
							<dd>Resets the auto rotating timer for the slider.</dd>

						<dt>goForward</dt>
							<dd><strong>params:</strong> none</dd>
							<dd><strong>Usage:</strong> <em>unoSlider.goForward()</em></dd>
							<dd>Moves the slider forward by one slide.</dd>
								
						<dt>goBack</dt>
							<dd><strong>params:</strong> none</dd>
							<dd><strong>Usage:</strong> <em>unoSlider.goBack()</em></dd>
							<dd>Moves the slider forward by one slide.</dd>
								
						<dt>goTo</dt>
							<dd><strong>params:</strong> number</dd>
							<dd><strong>Usage:</strong> <em>unoSlider.goTo(1)</em></dd>
							<dd>Makes the slider go to the slide number &mdash; <em>this is not the 0 based index but the actual slide number</em>.</dd>
					</dl>
			</li> <!-- #tab-api -->
			
			
			
		</ul><!-- .tab-content -->
	</div><!-- #documentation -->
	
	<div id="content-footer">
		<p class="disclaimer">Slider images generously provided by <a href="http://sumless.tumblr.com/" target="_blank" rel="no-follow">Sumtography</a> | &copy; Sumtography. All rights reserved.</p>
	</div>
	

	
</div><!-- #wrapper -->
<div id="footer">
	<p>Copyright &copy; <?php echo date("Y") ?> NPMedia</p>
</div>


<!-- JS (jQuery with Local Fallback)-->
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/easing.js"></script>
<script src="js/unoSlider-1.0.min.js"></script>
<script src="js/scripts.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  // Sample Slider
  window.npSlide = $('#slider1').unoSlider(); //default 5 seconds
}); //ready
</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!-- ASync Tracking -->
<script type="text/javascript">
  var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-28930615-1']);_gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body></html>