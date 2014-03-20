<?php defined('SYSPATH') or die('No direct script access.');

class Model_Register
{

    public function reg($username, $email, $password)
    {
        $usertable = new Model_Usertable();

        $usertable->username = $username;
        $usertable->email = $email;
        $usertable->password = $password;
        $usertable->save();


    }
}

