<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-03 07:00:47 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ] in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:00:47 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Core.php(829): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Core::load('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#6 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#7 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:01:12 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ] in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:01:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Core.php(829): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Core::load('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#6 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#7 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:01:44 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant filonenko - assumed 'filonenko' ~ APPPATH\config\database.php [ 23 ] in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:01:44 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Core.php(829): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Core::load('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#6 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#7 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:01:44 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant filonenko - assumed 'filonenko' ~ APPPATH\config\database.php [ 23 ] in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:01:44 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Core.php(829): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Core::load('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#6 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#7 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:02:04 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant filonenko - assumed 'filonenko' ~ APPPATH\config\database.php [ 23 ] in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:02:04 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Core.php(829): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Core::load('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#6 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#7 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:02:05 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant filonenko - assumed 'filonenko' ~ APPPATH\config\database.php [ 23 ] in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:02:05 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Core.php(829): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Core::load('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#6 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#7 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:02:06 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant filonenko - assumed 'filonenko' ~ APPPATH\config\database.php [ 23 ] in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:02:06 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Core.php(829): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Core::load('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#6 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#7 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\config\database.php:23
2014-03-03 07:02:09 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:09 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:21 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:23 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:23 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:23 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:23 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:31 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:31 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:32 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:32 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:32 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:32 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:32 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:32 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:32 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:32 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:33 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:33 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:33 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:33 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:33 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:33 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:51 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:51 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:52 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:52 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:52 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:52 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:52 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:52 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:52 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:52 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:53 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:02:53 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:02 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:02 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:03 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:03 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:27 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:27 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:28 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:28 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:29 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:29 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:29 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:29 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:30 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:30 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:31 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:04:31 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:12 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:17 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:17 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:26 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:26 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:54 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:54 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:55 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:55 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:55 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:55 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:55 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:55 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:55 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:55 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:55 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:05:55 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:06:32 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:06:32 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:09:33 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:09:33 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:10:13 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:10:13 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:11:44 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:11:44 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:12:28 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:12:28 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:13:57 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:13:57 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:14:02 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:14:02 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:14:07 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:14:07 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Model_Article->get_all()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-03 07:39:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: alt_title ~ APPPATH\views\pages\show.php [ 12 ] in D:\xampp\htdocs\kohana3\application\views\pages\show.php:12
2014-03-03 07:39:47 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\show.php(12): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 12, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(38): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\show.php:12
2014-03-03 07:43:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\article.php [ 16 ] in D:\xampp\htdocs\kohana3\application\classes\Model\article.php:16
2014-03-03 07:43:15 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 16, Array)
#1 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(12): Model_Article->get_all()
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana3\application\classes\Model\article.php:16
2014-03-03 07:43:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\article.php [ 14 ] in D:\xampp\htdocs\kohana3\application\classes\Model\article.php:14
2014-03-03 07:43:36 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Model\article.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 14, Array)
#1 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(12): Model_Article->get_all()
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana3\application\classes\Model\article.php:14
2014-03-03 07:55:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 29 ] in file:line
2014-03-03 07:55:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:55:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 29 ] in file:line
2014-03-03 07:55:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:55:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 29 ] in file:line
2014-03-03 07:55:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:55:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 29 ] in file:line
2014-03-03 07:55:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:55:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 20 ] in file:line
2014-03-03 07:55:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:55:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 20 ] in file:line
2014-03-03 07:55:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:55:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Article::get_all() ~ APPPATH\classes\Controller\page.php [ 12 ] in file:line
2014-03-03 07:55:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:55:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Article::get_all() ~ APPPATH\classes\Controller\page.php [ 12 ] in file:line
2014-03-03 07:55:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:58:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ] in file:line
2014-03-03 07:58:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:59:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 07:59:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:59:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 07:59:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:59:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 07:59:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:59:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 07:59:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:59:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 07:59:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:59:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 07:59:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:59:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 07:59:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:59:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 07:59:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:59:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 07:59:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:59:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 07:59:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 07:59:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 07:59:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:04:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:04:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:04:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:04:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:04:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:04:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:04:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:04:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:04:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:04:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:04:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:04:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:07:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:07:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:07:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Article::get_all() ~ APPPATH\classes\Controller\page.php [ 12 ] in file:line
2014-03-03 08:07:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:08:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:08:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:08:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:08:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:08:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:08:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:08:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:08:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:08:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:08:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:08:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:08:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:08:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:08:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:08:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:08:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:10:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:10:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:10:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:10:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:10:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:10:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:10:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:10:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:10:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:10:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:10:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:10:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:10:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:10:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:10:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:10:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:10:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:10:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:10:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:10:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:10:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:10:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:11:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:11:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:17:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:17:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:18:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:18:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:18:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:18:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:21:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:21:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:30:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 23 ] in file:line
2014-03-03 08:30:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:30:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 23 ] in file:line
2014-03-03 08:30:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:30:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 23 ] in file:line
2014-03-03 08:30:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:30:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 23 ] in file:line
2014-03-03 08:30:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:30:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 23 ] in file:line
2014-03-03 08:30:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:30:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 23 ] in file:line
2014-03-03 08:30:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:31:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:31:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:34:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:34:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:34:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:34:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:34:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:34:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:34:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:34:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:34:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:34:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:34:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:34:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:34:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:34:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:34:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:34:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:41:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:41:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:48:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:48:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:48:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\article.php [ 22 ] in file:line
2014-03-03 08:48:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 08:49:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 08:49:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 09:53:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 09:53:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 09:53:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 09:53:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 09:53:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 09:53:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 09:53:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 09:53:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 09:53:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 09:53:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 09:53:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 09:53:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 09:53:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 09:53:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 09:53:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 09:53:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 09:53:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 09:53:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 09:53:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 09:53:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 09:53:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 09:53:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 09:53:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 09:53:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 09:53:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 37 ] in file:line
2014-03-03 09:53:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-03 10:15:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\comments\show.php [ 4 ] in D:\xampp\htdocs\kohana3\application\views\comments\show.php:4
2014-03-03 10:15:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\comments\show.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 4, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\application\classes\Controller\comments.php(42): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Comments->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Comments))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana3\application\classes\Controller\articles.php(16): Kohana_Request->execute()
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Articles->action_article()
#13 [internal function]: Kohana_Controller->execute()
#14 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#15 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#18 {main} in D:\xampp\htdocs\kohana3\application\views\comments\show.php:4