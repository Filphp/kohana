<?php defined('SYSPATH') or die('No direct script access.');

class Model_Type extends Model
{
    protected $_tableTypes = 'types';


    public function get_all()
    {
        $sql = "SELECT * FROM ". $this->_tableTypes;

        return DB::query(Database::SELECT, $sql)
            ->execute();
    }
}