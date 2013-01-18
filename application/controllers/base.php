<?php

class Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */

	public function __call($method, $parameters) {
		return Response::error('404');
	}

	public function __construct() {
		Asset::add('app', 'css/app.css');
		Asset::add('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
		Asset::container('footer')->add('google_jsapi', 'http://www.google.com/jsapi');
		Asset::container('footer')->add('charts', 'js/charts.js');

		$config = [
			'test' => 'test'
		];
	}

}