<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends ORM { //Model_Auth_Use {

    // protected $_tableUsers = 'users';

   /* public function get_users($id)
    {
        $query = DB::select('user', 'password')
            ->from($this->_tableUsers)
            ->where('id', '=', $id)
            ->execute()
            ->as_array();

        if($query)
            return $query;
        else
            return array();
    }  */

}

