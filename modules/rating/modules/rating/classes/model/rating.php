<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Rating extends Model {
	
	public function __construct()
	{
		$this->_tableRating = Kohana::$config->load('rating.rating_table');
		$this->_tableRatingIp = Kohana::$config->load('rating.rating_table_ip');
	}		

	public function get_rating($id) 
	{
		$query = DB::query(Database::SELECT, 'SELECT * FROM '. $this->_tableRating .' WHERE id = :id')
				->param(':id', $id)
				->execute();

        $result = $query->as_array();
 
        if($result)
            return $result[0]['mark'];
        else
            return 0;
	}
	
	public function set_rating($id, $ip, $mark)
	{
		$query = DB::query(Database::SELECT, 'SELECT COUNT(id) AS count FROM '. $this->_tableRatingIp .' WHERE id = :id AND ip = :ip')
				->parameters(array(
        						':id' => $id,
        						':ip' => $ip
							))
        		->execute()->as_array();
		
        if($query[0]['count'] == 0)
        {
			$query = DB::query(Database::SELECT, 'SELECT mark FROM '. $this->_tableRating .' WHERE id = :id')
					->param(':id', $id)
	        		->execute()->as_array();

	        if($query)
        	{
        		DB::query(Database::UPDATE, 'UPDATE '. $this->_tableRating .' SET mark = mark + :mark WHERE id = :id')
				    ->parameters(array(
				        			':mark' => $mark,
				        			':id'    => $id,
								))
					->execute();        	
        	}
        	else
        	{
	        	DB::query(Database::INSERT, 'INSERT INTO '. $this->_tableRating .' (id, mark) VALUES (:id, :mark)')
					->parameters(array(
	        						':id'    => $id,
	        						':mark'  => $mark
								))
				    ->execute();
        	}        

			DB::query(Database::INSERT, 'INSERT INTO '. $this->_tableRatingIp .' (id, ip) VALUES (:id, :ip)')
				->parameters(array(
        						':id'   => $id,
        						':ip'   => $ip
							))
			    ->execute(); 
        }
	}
}