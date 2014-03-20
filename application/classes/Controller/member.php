<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Member extends Controller {

       public function action_register()
    {
        // Если есть данные, полученные методом POST
        if ($_POST)
        {
            // Создаем переменную, отвечающую за связь с моделью данных User
            $model = ORM::factory('user');
            // Вносим в эту переменную значения, переданные из POST
            $model->values(array(
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'password_confirm' => $_POST['password_confirm'],
            ));
            try
            {
                // Сохранение и добавление пользователя в базу
                $model->save();
                // присвоение роли
                $model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
                // И отправляем его на главную страницу
                $this->request->redirect('/');
            }
            catch (ORM_Validation_Exception $e)
            {
                // при возникновении ошибок
                echo $e;
            }
        }
        // Загрузка формы логина
        $this->response->body(View::factory('register'));
    }

}