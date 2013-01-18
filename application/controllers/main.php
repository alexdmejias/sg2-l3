<?php

class Main_Controller extends Base_Controller {

	public function action_index() {
		$data['title'] = "GreenServe";


		return View::make('main.index', $data);
	}
}