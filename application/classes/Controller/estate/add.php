<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Estate_Add extends Controller_Common {

     public function action_addestate()
    {
        $content = View::factory('/estate/addestate');
        $this->template->content = $content;
    }


   /* public function action_est()
    {
        $data["message"] = "";
        if (isset($_POST['submit']))
        {
            $type_id = Arr::get($_POST, 'type_id', '');
            $raion_id = Arr::get($_POST, 'raion_id', '');
            $adress = Arr::get($_POST, 'adress', '');
            $square = Arr::get($_POST, 'square', '');
            $price = Arr::get($_POST, 'price', '');
            $price_metr = Arr::get($_POST, 'price_metr', '');
            $description = Arr::get($_POST, 'description', '');
            $contacts = Arr::get($_POST, 'contacts', '');

            $estate = new Model_Estate();


            if ($estate->est($adress, $type_id, $raion_id, $square, $price, $price_metr, $description, $contacts))
            {

                $data["message"] = "Ошибка при добавлении в базу.";

            }
            else
            {
                $data["message"]="Объект добавлен в базу.";
            }

        }
        $content = View::factory('/estate/addestate', $data);
        $this->template->content = $content;
    } */

}