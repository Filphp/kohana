<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Common {

        public function action_index()
    {
        echo $this->request->param('path');
    }

        public function action_about()

    {
        $content = View::factory('/estate/about');
        $this->template->content = $content;
    }

        public function action_services()
{
$content = View::factory('/pages/services');
$this->template->content = $content;
}

        public function action_company()
    {
        $content = View::factory('/pages/company');
        $this->template->content = $content;
    }

    public function action_contacts()
    {
        $content = View::factory('/pages/contacts');
        $this->template->content = $content;
    }

    public function action_reg()
       {
        $data["message"] = "";
        if (isset($_POST['submit']))
        {
            $username = Arr::get($_POST, 'username', '');
            $email = Arr::get($_POST, 'email', '');
            $password = Arr::get($_POST, 'password', '');

            $register = new Model_Register();

            if ($register->reg($username, $email, $password))
            {

                $data["message"] = "Ошибка при регистрации.";

            }
            else
            {
                $data["message"]="Пользователь зарегистрирован.";
            }
        }

         $this->template->content = View::factory('/pages/reg', $data);

    }


     public function action_login()
    {
        $data["message"]="";

        if ($_POST = $this->request->post())
            {
                Auth::instance()->login($_POST['username'],$_POST['password']);

                if (Auth::instance()->logged_in())
                {

                    Controller::redirect('/');
                }
            else
                 {

                     if (isset($_POST['submit']))
                     {

                         $username = Arr::get($_POST, 'username', '');
                         $password = Arr::get($_POST, 'password', '');

                         if (Auth::instance()->login($username, $password))
                         {


                             Controller::redirect('/');

                         }
                     else
                         {
                             $data["message"]="Логин или пароль введен не верно";
                         }

                     }
                 }

            }
        $this->template->content = View::factory('/pages/login', $data);
    }



    /*         public function action_login()
        {
            $data["message"]="";

             $auth = Auth::instance();

              if ($auth->logged_in())
              {
                  $data["message"]="Добро пожаловать";

               //  http::redirect('/');
               //  request::initial()->redirect('/');

              }
              else
              {
                  $data["message"]="Пожалуйста авторизуйтесь";

                  if (isset($_POST['submit']))
                  {

                      $username = Arr::get($_POST, 'username', '');
                      $password = Arr::get($_POST, 'password', '');

                      $auth->login($username, $password);

                  }

              }
                $this->template->content = View::factory('/pages/login', $data);
    } */

    public function action_hpass()
{
    $auth = Auth::instance();
    $this->template->content = $auth->hash_password('admin');
}

  public function action_logout()
    {
        $data["message"]="";
        $auth = Auth::instance();
       if (Auth::instance()->logout())
       {
           $data["message"]="Разлогинились";
       }
       $this->template->content = View::factory('/pages/login', $data);
    }
}