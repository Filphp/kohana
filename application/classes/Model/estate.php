<?php defined('SYSPATH') or die('No direct script access.');

class Model_Estate extends ORM
{
    protected $_tableEstates = 'estates';
    protected $_primary_key = 'id';
    public $adress;
    public $type_id;
    public $square;
    public $price;
    public $price_metr;
    public $description;
    public $contacts;
    public $date;

   /*  public function get_all()
    {


        $sql = "SELECT * FROM ". $this->_tableEstates;

        return DB::query(Database::SELECT, $sql)
            ->execute();
    } */
}






/*    public function est($adress, $type_id, $raion_id, $square, $price, $price_metr, $description, $contacts)
    {
        $estatetable = new Model_Estatetable();

        $estatetable->adress = $type_id;
        $estatetable->adress = $raion_id;
        $estatetable->adress = $adress;
        $estatetable->area = $square;
        $estatetable->price = $price;
        $estatetable->price_metr = $price_metr;
        $estatetable->description = $description;
        $estatetable->contacts = $contacts;
        $estatetable->save();


    } */
