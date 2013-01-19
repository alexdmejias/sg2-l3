<?php

class Main_Controller extends Base_Controller {

	public function action_index() {

		return View::make('main.index', $this->config());
	}

	public function action_why() {
		$data['title'] = "Why";
		return View::make('main.why', $this->config($data));
	}

	public function action_pledge() {
		$data['title'] = "Pledge";
		return View::make('main.pledge', $this->config($data));
	}

	public function action_tips() {
		$data['title'] = "Tips";
		return View::make('main.tips', $this->config($data));
	}

	public function action_about() {
		$data['title'] = "About";
		return View::make('main.about', $this->config($data));
	}
}