<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Rating extends Controller {

	public function action_index()
	{
		$id = $this->request->param('id');
		
		Rating::instance()->render($id);
	}

} 
