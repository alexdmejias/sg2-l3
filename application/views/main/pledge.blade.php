@layout('layouts/main_layout')
@section('content')

	<div class="container_48">
		<div  class="grid_48">
			<div id="content" class="grid_44 push_2"><!--actual content-->
				<div id="content-top">
					<div id="main-left" class="grid_20 push_1 alpha"><!--Left main content -->
						<blockquote>"From now on, I pledge to conserve paper,water, and electricity in order save both money and the planet."</blockquote>
					</div><!--end left main content -->
					<div id="main-right" class="grid_20 push_3 omega">
						<h2 id="main_sign">Your email adress</h2>
						<form method="post" action="php/pledge_process.php">
								<input type="text" id="main_sign_email_field" name="main_sign_email_field"/>
								<input type="submit" value="Sign the pledge!" name="submit" id="main_sign_button"/>
						</form>
					</div>
				</div><!--  END content-top -->
				<div id="content-bottom">
					<div class="grid_22 prefix_1 alpha hide">
						<script src="http://widgets.twimg.com/j/2/widget.js"></script>
						<script>
							new TWTR.Widget({
								version: 2,
								type: 'search',
								search: '#grnsrve',
								interval: 6000,
								title: '',
								subject: 'save green by saving green',
								width: 400,
								height: 215,
								theme: {
									shell: {
										background: '#8ec1da',
										color: '#ffffff'
									},
									tweets: {
										background: '#ffffff',
										color: '#444444',
										links: '#1985b5'
									}
								},
								features: {
									scrollbar: false,
									loop: true,
									live: true,
									hashtags: true,
									timestamp: true,
									avatars: true,
									toptweets: true,
									behavior: 'default'
								}
							}).render().start();
						</script>
					</div>
					<div id="fb" class="grid_20 omega hide ">
						<div id="fb-root">
						</div>
						<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
						<fb:like-box href="http://www.facebook.com/pages/Greenserve/158651644197000" width="400" show_faces="true" stream="false" header="true">
						</fb:like-box>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{--</div><!-- end container 48  --> --}}

@endsection