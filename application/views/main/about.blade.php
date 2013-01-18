@layout('layouts/main_layout')
@section('content')

	<div class="container_48">
		<div class="grid_48">
			<div id="content" class="grid_44 push_2"><!--actual content-->

				<div id="main-left" class="grid_20 push_1 alpha"><!--Left main content -->
					<h1>Our Mission</h1>
					<p class="mission">Our mission is to provide people with simple way to save money around the house, the office, or any other enviroment they interact with. To read more about who we are visit our <b><a href="about.php">'About us'</a></b> page.
					<h1 class="quick-tips">Quick Tips</h1>
					<ul id="preview-list">
						<li><p  class="">When doing laundry, dry loads consecutively, while the temperature inside of it is still high.</p> </li>
						<li><p class="">Turn off the water while you brush your teeth. There is never a good reason for waste.</p></li>
						<li><p class="">When purchasing appliances, consider buying "energystar" certified appliances to radically reduce the amount of electricity used by older appliances.</p></li>
						<li><p class="">When purchasing appliances or faucets, look for "watersense" certification, it is the equivalent of "energystar" for water usage.</p></li>
						<li><p class="">Consider replacing reading materials to electronic formats. Ereaders are perfect for paperbacks, documents, and many articles. Their weight and size often times make them extremely more portable than their paper counter-parts.</p></li>
						<li><p class="">Instead of taking a bath, try taking a shower instead. A short shower can drastically reduce the amount of water used, it also reduces the amount of energy requiered to heat all the water used.</p></li>
					</ul>
					<p><b><a href="tips.php">View more tips</a></b></p>
				</div> <!--end left main content -->

				<div id="main-right" class="grid_21 push_3 omega">
				<!--draw graphs from 'charts.js'-->
					<div class="figure">
						<h1>CFL Lightbulb Savings</h1>
						<div id="graph_cfl"></div>
					</div>

					<div class="hide">
						<h1>Water Usage per Minute</h1>
						<div id="graph_gpm"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection