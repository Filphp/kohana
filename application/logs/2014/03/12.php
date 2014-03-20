<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-12 05:43:56 --- CRITICAL: ReflectionException [ 0 ]: Class Controller_Static does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 94 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-12 05:43:56 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#4 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-12 05:43:59 --- CRITICAL: ReflectionException [ 0 ]: Class Controller_Static does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 94 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-12 05:43:59 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#4 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-12 05:44:01 --- CRITICAL: ReflectionException [ 0 ]: Class Controller_Static does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 94 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-12 05:44:01 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#4 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-12 05:44:07 --- CRITICAL: ReflectionException [ 0 ]: Class Controller_Static does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 94 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-12 05:44:07 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#4 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-12 05:44:15 --- CRITICAL: ReflectionException [ 0 ]: Class Controller_Static does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 94 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-12 05:44:15 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#4 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php:94
2014-03-12 05:48:37 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-12 05:48:37 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-12 05:48:39 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-12 05:48:39 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-12 07:10:14 --- CRITICAL: View_Exception [ 0 ]: The requested view /reg could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-12 07:10:14 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/reg')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/reg', Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_View::factory('/reg', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-12 07:10:20 --- CRITICAL: View_Exception [ 0 ]: The requested view reg could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-12 07:10:20 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('reg')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('reg', Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_View::factory('reg', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-12 07:44:05 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('', 'xxx', 'xxx') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-12 07:44:05 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\register.php(13): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(46): Model_Register->reg('', 'xxx', 'xxx')
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-12 07:52:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 07:52:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 07:54:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 07:54:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 07:55:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 07:55:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 07:57:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 07:57:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 07:58:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 07:58:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 07:58:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 07:58:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 07:58:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 07:58:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 07:58:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 07:58:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 08:00:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 08:00:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 08:01:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 08:01:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 08:02:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth_ORM::user() ~ APPPATH\classes\Controller\static.php [ 82 ] in file:line
2014-03-12 08:02:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 08:03:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth_ORM::user() ~ APPPATH\classes\Controller\static.php [ 82 ] in file:line
2014-03-12 08:03:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 08:03:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth_ORM::user() ~ APPPATH\classes\Controller\static.php [ 82 ] in file:line
2014-03-12 08:03:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 08:03:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 08:03:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 08:03:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 08:03:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 08:04:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth_ORM::username() ~ APPPATH\classes\Controller\static.php [ 82 ] in file:line
2014-03-12 08:04:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 08:33:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\static.php [ 68 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:68
2014-03-12 08:33:39 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 68, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:68
2014-03-12 08:52:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 08:52:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 08:59:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 08:59:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 09:07:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 09:07:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 09:07:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 09:07:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 09:08:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 09:08:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 09:08:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 09:08:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 09:52:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 09:52:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 09:53:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 09:53:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:01:45 --- CRITICAL: View_Exception [ 0 ]: The requested view ages/reg could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-12 10:01:45 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('ages/reg')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('ages/reg', Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_View::factory('ages/reg', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-12 10:02:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 56 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:09 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 56, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 56 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:10 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 56, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 56 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 56, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 56 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:23 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 56, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 56 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:24 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 56, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 56 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:24 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 56, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 56 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:24 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 56, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 56 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:24 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 56, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 56 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:24 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 56, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 56 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:24 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 56, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 56 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:02:25 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 56, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:56
2014-03-12 10:08:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:08:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:08:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:08:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:08:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:08:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:08:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:08:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:08:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:08:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:08:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:08:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:08:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:08:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:09:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:09:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:09:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:09:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:09:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:09:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:09:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:09:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:09:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:09:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:09:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:09:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:09:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:09:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:10:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:10:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:10:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:10:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:10:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:10:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:10:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:11:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:11:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:11:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:11:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:11:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:11:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:11:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\reg.php [ 26 ] in file:line
2014-03-12 10:11:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:11:44 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-12 10:11:44 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\register.php(13): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(46): Model_Register->reg('', '', '')
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-12 10:11:50 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-12 10:11:50 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\register.php(13): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(46): Model_Register->reg('', '', '')
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-12 10:12:31 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-12 10:12:31 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\register.php(13): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(46): Model_Register->reg('', '', '')
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-12 10:13:12 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-12 10:13:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\register.php(13): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(46): Model_Register->reg('', '', '')
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-12 10:13:14 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-12 10:13:14 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\register.php(13): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(46): Model_Register->reg('', '', '')
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-12 10:17:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 10:17:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:19:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 10:19:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:20:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 10:20:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:21:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 10:21:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:21:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 10:21:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:21:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 10:21:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:24:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 10:24:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:25:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 10:25:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:25:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 10:25:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 10:37:17 --- CRITICAL: Database_Exception [ 1146 ]: Table 'sibzem.usertables' doesn't exist [ SHOW FULL COLUMNS FROM `usertables` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-12 10:37:17 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usertables')
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana3\application\classes\Model\register.php(8): Kohana_ORM->__construct()
#6 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(46): Model_Register->reg('miha', 'miha', 'miha')
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-12 10:38:56 --- CRITICAL: Database_Exception [ 1146 ]: Table 'sibzem.usertables' doesn't exist [ SHOW FULL COLUMNS FROM `usertables` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-12 10:38:56 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usertables')
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana3\application\classes\Model\register.php(8): Kohana_ORM->__construct()
#6 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(46): Model_Register->reg('miha', 'miha', 'miha')
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-12 11:29:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:29:30 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:29:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:29:50 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:29:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:29:51 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:30:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:30:41 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:31:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:31:43 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:22 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:24 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:25 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:25 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:25 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:26 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:26 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:27 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:27 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:32:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\pages\login.php [ 2 ] in file:line
2014-03-12 11:32:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 11:32:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\pages\login.php [ 2 ] in file:line
2014-03-12 11:32:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 11:33:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:33:02 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:33:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:33:03 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:33:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:33:26 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:33:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:33:46 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:33:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:33:47 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:33:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:33:57 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:35:35 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-12 11:35:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 11:36:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-12 11:36:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 11:36:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:36:27 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-12 11:39:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:39:27 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:40:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:40:04 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:42:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:42:26 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:42:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:42:28 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:42:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:42:30 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:43:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:43:36 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#11 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-12 11:57:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\static.php [ 105 ] in file:line
2014-03-12 11:57:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 11:57:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\static.php [ 105 ] in file:line
2014-03-12 11:57:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 11:57:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\static.php [ 105 ] in file:line
2014-03-12 11:57:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 11:57:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\static.php [ 105 ] in file:line
2014-03-12 11:57:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 11:57:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\static.php [ 105 ] in file:line
2014-03-12 11:57:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 11:57:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\static.php [ 105 ] in file:line
2014-03-12 11:57:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 11:58:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\static.php [ 65 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:65
2014-03-12 11:58:13 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 65, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:65
2014-03-12 11:58:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\static.php [ 65 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:65
2014-03-12 11:58:15 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 65, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:65
2014-03-12 11:58:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\static.php [ 65 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:65
2014-03-12 11:58:47 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 65, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:65
2014-03-12 11:58:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\static.php [ 65 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:65
2014-03-12 11:58:48 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 65, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:65