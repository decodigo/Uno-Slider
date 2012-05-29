<?php 
	include_once 'functions.php';
	$info = array(
        'title'         => 'unoSlider',
        'tagline'       => 'Lightweight jQuery Content Slider',
        'description'   => 'A jQuery plugin for creating simple, yet elegant and versatile content sliders.',
        'url'           => 'http://unoslider.npmedia.net',
        'currVersion'   => '1.0.1',
        'siteurl'       => "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']
	);

	$downloadurl = 'downloads/unoSlider-'.$info["currVersion"].'.zip';
	$downloadsize = formatbytes($downloadurl, "KB");
?><!doctype html>
<!--[if IE 7 ]>    <html class="no-js ie7" > <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" > <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!--META-->
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $info['description']; ?>">
	<meta name="author" content="Nelson Polanco">
	
	<!-- FB Meta -->
	<meta property="og:title" content="<?php echo $info['title']; ?> | <?php echo $info['tagline']; ?>" />
	<meta property="og:description" content="<?php echo $info['description']; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo $info['url']; ?>" />
	<meta property="og:image" content="<?php echo $info['url']; ?>/img/icon110x110.png" />
	<meta property="fb:admins" content="npolanco10" />
	
	<!--TITLE-->
	<title><?php echo $info['title']; ?> | <?php echo $info['tagline']; ?></title>
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
		<a class="download-btn" href="<?php echo $downloadurl; ?>" title="Download UnoSlider &raquo; <?php echo $downloadsize; ?> Zip">v<?php echo $info['currVersion']; ?> ( <?php echo $downloadsize; ?> ZIP)</a>
	</div><!-- #slider2 -->

	<div class="clr columns">
		<div id="slider1" class="col unoSlider">
			<div class="slider-header">
				<span>unoSlider Features</span>
				<div class="unoSliderNav"></div>
			</div>
			<ul>
				<li class="current">
					<b>Feature any content</b><br>
					unoSlider works with videos, iframes and any other html element. 
				</li>
					
				<li>
					<b>Simple...</b><br>
					unoSlider's limited transitions and options keeps things simple so that you are able to get a slider going fast. 
				</li>
				
				<li>
					<b>..yet powerful</b><br>
					unoSlider can be used for news tickers, tabbed interfaces and featured content sliders.
				</li>

				<li>
					<b>Light Weight</b><br>
					Small yet versatile, unoSlider falls in at just under 2KB. 		
				</li>
					
				<li>
					<b>Dynamic Bulleted Navigation</b><br>
					The bulleted navigation is generated dynamically for you when the slider gets initialized. 
				</li>				
			</ul>
		</div><!-- #slider1 -->
		
		<div id="slider3" class="col unoSlider">
			<div class="slider-header">
				<span>No Nav + Auto</span>
			</div>
			<ul class="nobullets">
				<li class="current">
					<b>No nav</b><br>
					The nav can be left out if you don't need it. 
				</li>
				<li>
					<b>Cycle Automatically</b><br>
					You can toggle wether you cycle through the slider automatically.
				</li>
				<li>
					<b>Fast or Slow</b><br>
					The speed for the animation and the timer can both be set manually. 
				</li>
					
			</ul>
		</div><!-- #slider3 -->
	
		<div id="slider4" class="col last unoSlider">
			<div class="slider-header">
				<span>No Trasition + Auto</span>
			</div>
			<ul>
				<li class="current">
					<b>But I don't want it to Slide!</b><br>
					That's cool, you can easily adjust that too. 
				</li>
				<li>
					<b>Full Control</b><br>
					Play, Pause, Next, Previous... you have control of the player and can add your own buttons for this functionality.
				</li>
			</ul>
		</div><!-- #slider4 -->
	
	</div><!-- .columns -->
	

	<div id="ticker" class="block unoSlider">
		<div class="ticker-title">Breaking News</div>
		<ul>
			<li class="current"><a href="#">Soulcalibur 5 Review: A Tale of Swords and Swords that WILL be eternally retold!</a></li>
			<li><a href="#">Resident Evil 6: The president is a zombie! So, what's new?</a></li>
			<li><a href="#">Run Roo Run: The next game from 5th Cell hops to iOS</a></li>
		</ul>
	</div>

	<p class="intro">
		UnoSlider is a jQuery plugin for creating simple, yet elegant and versatile content sliders. It's great for when you need to get a slider going in a jiffy, yet it has enough depth to create news tickers and tabs like the ones you see on this page. All whithout overwhelming you with options and features you don't need. 
	</p>




	
	<!-- AddThis Button END -->

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
animSpeed:  250,           // animation speed for the transition
speed:      5,	           // seconds
auto:       true,          // false stops the slider from auto rotating
easing:     'swing',       // 'linear' or 'swing'. Can be extended with jQuery Easing Plugin
next:       false,         // '#next' &mdash; optional selector for the next button
prev:       false,         // '#prev' &mdash; optional selector for the previous button
pause:      false,         // '#pause' &mdash; optional selector for the pause button
bullets:    false,         // wether to show bulleted navigation or not.
selector:   'li'           // which child selector to use when looking for slides. Default is 'li'. 
callback:   function(){}   // used to fire a callback after each transition. "this" within this function is the current index
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


		<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_default_style block">
			<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
			<a class="addthis_button_tweet"></a>
			<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
			<a class="addthis_counter addthis_pill_style"></a>
			
			<a href="https://twitter.com/npolanco10" class="twitter-follow-button" data-show-count="false" style="margin-left:10px ">Follow @npolanco10</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>

		<div id="content-footer">
			<p class="disclaimer">Slider images generously provided by <a href="http://sumless.tumblr.com/" target="_blank" rel="no-follow">Sumtography</a> | &copy; Sumtography. All rights reserved.</p>
	</div>
	</div><!-- #documentation -->
	
	
	

	
</div><!-- #wrapper -->
<div id="footer">
	<p>Copyright &copy; <?php echo date("Y") ?> NPMedia</p>
</div>


<!-- JS (jQuery with Local Fallback)-->
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/easing.js"></script>
<script src="js/unoSlider-1.0.1.min.js"></script>
<script src="js/scripts.min.js"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=kalel06"></script>

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