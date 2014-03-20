<?php defined('SYSPATH') OR die('No direct access allowed.');

class Kohana_Rating {

	public static $instance;
	
	public static function instance()
	{
		if (!isset(Rating::$instance))
		{
			Rating::$instance = new Rating();
		}

		return Rating::$instance;
	}	
	
	public function __construct()
	{
		$this->config = Kohana::$config->load('rating');
	}	

	public function render($id)
	{	
		$rating_mark = Arr::get($_POST, 'rating_mark');
		
		if($rating_mark)
		{
			if($rating_mark == 1 || $rating_mark == -1)
			{
				$ip = mysql_escape_string($_SERVER['REMOTE_ADDR']);
				$rating = Model::factory('Rating')->set_rating($id, $ip, $rating_mark);
			}
		}
	
		$rating = Model::factory('Rating')->get_rating($id);

		if($rating_mark)
			echo $rating;
		else
		{
			$view = $this->config['view'];
			
			return View::factory($view)
				->set('id', $id)
				->set('rating', $rating);
		}
	}
}