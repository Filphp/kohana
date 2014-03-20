<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-04 12:00:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Common' not found ~ APPPATH\classes\Controller\estate\main.php [ 3 ] in file:line
2014-03-04 12:00:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-04 12:02:01 --- CRITICAL: ReflectionException [ 0 ]: Class Controller_Estate_Main does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 94 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-04 12:02:01 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#4 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-04 12:02:02 --- CRITICAL: ReflectionException [ 0 ]: Class Controller_Estate_Main does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 94 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-04 12:02:02 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#4 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-04 12:04:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\views\estate\show.php [ 8 ] in file:line
2014-03-04 12:04:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-04 12:21:47 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:21:47 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(18): Kohana_Database_Query->execute()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(12): Model_Article->get_all()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:21:49 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:21:49 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(18): Kohana_Database_Query->execute()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(12): Model_Article->get_all()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:21:50 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:21:50 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(18): Kohana_Database_Query->execute()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(12): Model_Article->get_all()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:21:50 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:21:50 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(18): Kohana_Database_Query->execute()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(12): Model_Article->get_all()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:21:50 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:21:50 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(18): Kohana_Database_Query->execute()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(12): Model_Article->get_all()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:21:50 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:21:50 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(18): Kohana_Database_Query->execute()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(12): Model_Article->get_all()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:27:57 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:27:57 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(18): Kohana_Database_Query->execute()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(12): Model_Article->get_all()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-04 12:30:31 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in D:\xampp\htdocs\kohana3\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Arr.php:30
2014-03-04 12:30:31 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\xampp\htdocs...', 30, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#6 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(18): Kohana_Database_Query->execute()
#7 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(12): Model_Article->get_all()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Arr.php:30
2014-03-04 12:30:47 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in D:\xampp\htdocs\kohana3\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Arr.php:30
2014-03-04 12:30:47 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\xampp\htdocs...', 30, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#6 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(18): Kohana_Database_Query->execute()
#7 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(12): Model_Article->get_all()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Arr.php:30
2014-03-04 13:00:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\views\main.php [ 40 ] in file:line
2014-03-04 13:00:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-04 13:00:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\views\main.php [ 40 ] in file:line
2014-03-04 13:00:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-04 13:00:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\views\main.php [ 40 ] in file:line
2014-03-04 13:00:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-04 13:00:30 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:00:30 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:38 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:55 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:55 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:55 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:55 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:55 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:55 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:55 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:55 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:56 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:56 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:56 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:56 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:56 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:56 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:56 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:01:56 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:11 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:11 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:12 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:12 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:12 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:12 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:14 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:14 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:18 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:18 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:30 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:30 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:30 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:30 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:38 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:39 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:39 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:39 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:39 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:39 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:39 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:39 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:39 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:39 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:39 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:40 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:02:40 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:03:11 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:03:11 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:03:13 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:03:13 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:11 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:11 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:12 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:12 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:12 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:12 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:14 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:14 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:17 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:17 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:20 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:20 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:21 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:23 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:23 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:24 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:24 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:24 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:24 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:24 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:24 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:51 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:51 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:52 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:52 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:52 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:52 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:52 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:52 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:55 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:04:55 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:06:16 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:06:16 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:06:17 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:06:17 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:06:19 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:06:19 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:21 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:21 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:21 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:21 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:21 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:21 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:22 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:23 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:23 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:23 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:23 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:23 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:23 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:23 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:23 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:23 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:23 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:23 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:23 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:56 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:56 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:57 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:57 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:58 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:58 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:59 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:07:59 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:09:52 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:09:52 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\xampp\htdocs\kohana3\www\index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Cookie.php:67
2014-03-04 13:26:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cats ~ APPPATH\views\main.php [ 23 ] in D:\xampp\htdocs\kohana3\application\views\main.php:23
2014-03-04 13:26:04 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\application\views\main.php:23
2014-03-04 13:38:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '>', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\views\admin\show.php [ 11 ] in file:line
2014-03-04 13:38:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-04 13:39:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\show.php [ 19 ] in D:\xampp\htdocs\kohana3\application\views\admin\show.php:19
2014-03-04 13:39:00 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\admin\show.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 19, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(34): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\admin\show.php:19