<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@if(!empty($title))
			{{ $title_base }} {{ $title_separator }} {{ $title }}
		@else
			{{ $title_base }}
		@endif

	</title>
	{{ Asset::styles() }}
	{{ Asset::scripts() }}
</head>
<body>
	<div class="container_48">
		<div id="header" class="grid_48">
			<div class="grid_44 push_2">
				<div id="logo" class="grid_16 alpha">
					<a href="/"><img src="IMG/logo8.png" alt="greenserve logo" /></a>
				</div>
				<div id="nav" class="grid_26 push_2 omega">
					<ul id="navlist">
						<li>{{ HTML::link_to_action('main@why', 'why') }}</li>
						<li>{{ HTML::link_to_action('main@pledge', 'pledge') }}</li>
						<li>{{ HTML::link_to_action('main@tips', 'tips') }}</li>
						<li>{{ HTML::link_to_action('main@about', 'about') }}</li>
						<li>{{ HTML::link('https://greenserve.wordpress.com/', 'Blog') }}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	{{--SPACER--}}
	<div class="container_48" id="spacer">
		<div class="grid_44 push_2 spacer"></div>
	</div>
	{{--SPACER--}}



	<div class="container_48">
		<div class="grid_48 push_2">
			<div id="banner" class="grid_44">
				<div id="lofslidecontent45" class="lof-slidecontent" style="width:880px; height:280px;">
					<div class="preload">
						<div></div>
					</div>
					<div class="lof-main-outer" style="width:880px; height:280px;">
						<ul class="lof-main-wapper">
							<li>
								<img src="img/slide/main/1.jpg" title="" />
								<div class="lof-main-item-desc">
									<h1><a href="#">&nbsp;Here to teach you<br/>  &nbsp;how to save <b>money</b><br/> &nbsp;and the <b>planet.</b></a></h1>
									{{--<'.$title_size.'><a href="'.$link_loc.'">'.$title_1.'</a></'.$title_size.'>--}}
								</div>
							</li>
						</ul>
					</div>
					<div class="lof-navigator-wapper">
						<div class="lof-navigator-outer">
							<ul class="lof-navigator">
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	{{--SPACER--}}
	<div class="container_48" id="spacer">
		<div class="grid_44 push_2 spacer"></div>
	</div>

	{{--SPACER--}}

	@yield('content')

	{{--SPACER--}}
	<div class="container_48" id="spacer">
		<div class="grid_44 push_2 spacer"></div>
	</div>
	{{--SPACER--}}

	<div id="footer">
		<div class="container_48">
			<div id="footer_left" class="grid_14 push_2 alpha">
				<h2>Site Map</h2>
				<ul id="footer_nav">
					<li>{{ HTML::link_to_action('main@tips', 'Tips') }}</li>
					<li>{{ HTML::link_to_action('main@about', 'About Us') }}</li>
					<li>{{ HTML::link_to_action('main@why', 'Why Do It') }}</li>
					<li>{{ HTML::link_to_action('main@pledge', 'Pledge') }}</li>
					<li>{{ HTML::link('https://greenserve.wordpress.com/', 'Blog') }}</li>
				</ul>
			</div>
			<div id="footer_middle" class="grid_14  push_1 ">
				<h2>Recent News</h2>
				<ul id="footer_news">
				<!--populated dynamically by JS/feed.js-->
				</ul>
			</div>

			<div id="footer_right" class="grid_14  push_4 omega">
				<h2>Social Media</h2>
				<div id="footer_social">
					<div>
						<a href="http://twitter.com/#!/Grnsrve"> <img src="IMG/media/twitter_32.png" width="32" height="32" alt="twitter icon" /></a>
						<a href="http://www.facebook.com/pages/Greenserve/158651644197000"><img src="IMG/media/facebook_32.png" width="32" height="32" alt="facebook icon" /></a>
						<a href="mailto:alme1304@gmail.com?subject=Greenserve"><img src="IMG/media/email_32.png" width="32" height="32" alt="contact us icon" /></a>
						<a href="https://greenserve.wordpress.com/feed/"><img src="IMG/media/rss_32.png" width="32" height="32" alt="rss feed icon" /></a>
					</div>
				 </div>
			</div>
		</div>
	</div>
	{{ Asset::container('footer')->scripts() }}
</body>
</html>











	{{--

							//echo $main->main_slider_item('$img_path,$img_title,$link_loc,$link_alt,$title_size,$title_1');
							  echo $main->main_slider_item('IMG/slider/main/1.jpg','','#','slider tree','h1','&nbsp;Here to teach you<br/>  &nbsp;how to save <b>money</b><br/> &nbsp;and the <b>planet.</b>');
							  echo $main->main_slider_item('IMG/slider/main/2.jpg','','pledge.php','slider','h1','&nbsp;Sign our <b>pledge</b><br />  &nbsp;to show the world <br />&nbsp;you care.');
							  echo $main->main_slider_item('IMG/slider/main/3.jpg','','https://greenserve.wordpress.com/','Visit our blog','h2','&nbsp;visit our blog to learn<br/> &nbsp;about upcoming <br/><b>&nbsp;features</b> and contribute <br/>&nbsp;to our <b>community</b>');							  echo $main->main_slider_item('IMG/slider/main/4.jpg','','tips.php#submit','submit a tip','h1','&nbsp;Help us by <b>submiting</b><br />&nbsp;one of your own resource <br />&nbsp;saving tips.');



<?php echo $main->main_footer_WHOLE();
	$main->main_includes_add_js('http://www.google.com/jsapi');
	$main->main_includes_add_js('JS/charts.js');
?>
</body>
</html>
--}}