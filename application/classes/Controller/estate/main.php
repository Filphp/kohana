<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Estate_Main extends Controller_Common {

public function before()
    {


        $auth = Auth::instance();
        if ($auth->logged_in() == 0) Controller::redirect('login');
        return parent::before();
    }

       public function action_index()
       {
           $estate = ORM::factory('estate');
           $estates = $estate->find_all()->as_array();

           $this->template->content = View::factory('/estate/show')
               ->bind('estates', $estates);

           $this->template->content = View::factory('/estate/show', array('estates' => $estates));

       }

    /*  public function action_index()
       {
           $estates = array();

           $content = View::factory('/estate/show')
               ->bind('estates', $estates);

           $estate = new Model_Estate();
           $estates = $estate->get_all();

           $this->template->content = $content;
       }*/


}

