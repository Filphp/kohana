<?php defined('SYSPATH') or die('No direct script access.');

Route::set('rating', 'rating/<id>', array('id' => '[0-9]+'))
	->defaults(array(
		'controller' => 'rating',
		'action' => 'index'));
