<?php

class Main_Controller extends Base_Controller {

	public function action_index() {
		$data['title'] = "GreenServe";
		return View::make('main.index', $data);
	}

	public function action_why() {
		$data['title'] = "GreenServe";
		return View::make('main.why', $data);
	}

	public function action_pledge() {
		$data['title'] = "GreenServe";
		return View::make('main.pledge', $data);
	}

	public function action_tips() {
		$data['title'] = "GreenServe";
		return View::make('main.tips', $data);
	}

	public function action_about() {
		$data['title'] = "GreenServe";
		return View::make('main.about', $data);
	}
}