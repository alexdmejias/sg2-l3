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
				slider code goes here
				{{--
					<?php echo $main->main_slider_init();

					//echo $main->main_slider_item('$img_path,$img_title,$link_loc,$link_alt,$title_size,$title_1');
					  echo $main->main_slider_item('IMG/slider/main/1.jpg','','#','slider tree','h1','&nbsp;Here to teach you<br/>  &nbsp;how to save <b>money</b><br/> &nbsp;and the <b>planet.</b>');
					  echo $main->main_slider_item('IMG/slider/main/2.jpg','','pledge.php','slider','h1','&nbsp;Sign our <b>pledge</b><br />  &nbsp;to show the world <br />&nbsp;you care.');
					  echo $main->main_slider_item('IMG/slider/main/3.jpg','','https://greenserve.wordpress.com/','Visit our blog','h2','&nbsp;visit our blog to learn<br/> &nbsp;about upcoming <br/><b>&nbsp;features</b> and contribute <br/>&nbsp;to our <b>community</b>');							  echo $main->main_slider_item('IMG/slider/main/4.jpg','','tips.php#submit','submit a tip','h1','&nbsp;Help us by <b>submiting</b><br />&nbsp;one of your own resource <br />&nbsp;saving tips.');

					  echo $main->main_slider_close();

					 //Thumbnails
					  echo $main->main_slider_nav_init();
					  echo'<li></li>';
					  echo'<li></li>';
					  echo'<li></li>';
					  echo'<li></li>';

					  echo $main->main_slider_nav_close();
				?>
				--}}
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

	{{ Asset::container('footer')->scripts() }}
</body>
</html>











	{{--




<?php echo $main->main_footer_WHOLE();
	$main->main_includes_add_js('http://www.google.com/jsapi');
	$main->main_includes_add_js('JS/charts.js');
?>
</body>
</html>
--}}