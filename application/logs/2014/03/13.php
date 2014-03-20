<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-13 06:48:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::where() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-13 06:48:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 06:48:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::where() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-13 06:48:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 06:49:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-13 06:49:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 06:49:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-13 06:49:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 07:01:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: ivan ~ APPPATH\classes\Controller\static.php [ 67 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:67
2014-03-13 07:01:28 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(67): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 67, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:67
2014-03-13 07:13:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\static.php [ 65 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:65
2014-03-13 07:13:51 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 65, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:65
2014-03-13 07:16:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 07:16:01 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 07:23:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\classes\Controller\static.php [ 118 ] in file:line
2014-03-13 07:23:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 07:32:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\static.php [ 118 ] in file:line
2014-03-13 07:32:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 07:32:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\static.php [ 118 ] in file:line
2014-03-13 07:32:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 07:32:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\static.php [ 118 ] in file:line
2014-03-13 07:32:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 07:38:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-13 07:38:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 07:39:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::where() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-13 07:39:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 07:39:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::where() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-13 07:39:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 07:39:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-13 07:39:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 07:45:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-13 07:45:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 07:45:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-13 07:45:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 07:45:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-13 07:45:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 07:46:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-03-13 07:46:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 08:22:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 08:22:01 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 08:22:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 08:22:20 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 08:22:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 08:22:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 08:22:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 08:22:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 08:22:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 08:22:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 08:22:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 08:22:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 08:22:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 08:22:21 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 09:26:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function CRYPT_SHA256() ~ APPPATH\classes\Model\register.php [ 12 ] in file:line
2014-03-13 09:26:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 09:27:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function CRYPT_SHA256() ~ APPPATH\classes\Model\register.php [ 12 ] in file:line
2014-03-13 09:27:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 09:27:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function MHASH_SHA256() ~ APPPATH\classes\Model\register.php [ 12 ] in file:line
2014-03-13 09:27:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 09:28:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function sha256() ~ APPPATH\classes\Model\register.php [ 12 ] in file:line
2014-03-13 09:28:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 09:33:26 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php:1362
2014-03-13 09:33:26 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 D:\xampp\htdocs\kohana3\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('max', 'max', false)
#5 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(70): Kohana_Auth->login('max', 'max')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php:1362
2014-03-13 09:34:51 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php:1362
2014-03-13 09:34:51 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 D:\xampp\htdocs\kohana3\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('max', 'max', false)
#5 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(70): Kohana_Auth->login('max', 'max')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php:1362
2014-03-13 09:35:53 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php:1362
2014-03-13 09:35:53 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 D:\xampp\htdocs\kohana3\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('max', 'max', false)
#5 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(70): Kohana_Auth->login('max', 'max')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php:1362
2014-03-13 09:36:48 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'max' for key 'uniq_email' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('maxx', 'max', 'max') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-13 09:36:48 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\xampp\htdocs\kohana3\application\classes\Model\register.php(13): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(47): Model_Register->reg('maxx', 'max', 'max')
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_reg()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana3\modules\database\classes\Kohana\Database\Query.php:251
2014-03-13 09:39:54 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php:1362
2014-03-13 09:39:54 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 D:\xampp\htdocs\kohana3\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('keks', 'keks', false)
#5 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(70): Kohana_Auth->login('keks', 'keks')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php:1362
2014-03-13 09:41:03 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php:1362
2014-03-13 09:41:03 --- DEBUG: #0 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana3\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 D:\xampp\htdocs\kohana3\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('keks', 'keks', false)
#5 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(70): Kohana_Auth->login('keks', 'keks')
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#9 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana3\modules\orm\classes\Kohana\ORM.php:1362
2014-03-13 10:04:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:04:57 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:05 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:05 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:05 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:06 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:06 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:06 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:06 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:06 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:06 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:06 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:07 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:28 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:29 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:29 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:29 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:30 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:30 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:30 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:39 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:40 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:40 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:40 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:40 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:41 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:41 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:41 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:41 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:41 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:49 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:49 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:49 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:49 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:50 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:50 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:50 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:50 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:50 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:05:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:05:50 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:13 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:13 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:13 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:13 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:13 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:14 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:14 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:14 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:14 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:39 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:40 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:40 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:40 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:40 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:06:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 32 ] in D:\xampp\htdocs\kohana3\application\views\main.php:32
2014-03-13 10:06:41 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
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
2014-03-13 10:07:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 91 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:31 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 91, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 91 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:32 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 91, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 91 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:32 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 91, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 91 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:32 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 91, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 91 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:32 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 91, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 91 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:32 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 91, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\static.php [ 91 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:33 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 91, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\static.php:91
2014-03-13 10:07:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-13 10:07:39 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
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
2014-03-13 10:07:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:08:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-13 10:08:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:19:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-13 10:19:12 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
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
2014-03-13 10:43:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\static.php [ 76 ] in file:line
2014-03-13 10:43:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:43:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\static.php [ 76 ] in file:line
2014-03-13 10:43:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:50:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Static::initial() ~ APPPATH\classes\Controller\static.php [ 74 ] in file:line
2014-03-13 10:50:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 10:50:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\static.php [ 74 ] in file:line
2014-03-13 10:50:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 11:07:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\classes\Controller\static.php [ 91 ] in file:line
2014-03-13 11:07:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 11:08:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\classes\Controller\static.php [ 91 ] in file:line
2014-03-13 11:08:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 11:17:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\classes\Controller\static.php [ 91 ] in file:line
2014-03-13 11:17:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 11:19:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Session_Session::$default' not found ~ SYSPATH\classes\Kohana\Session.php [ 54 ] in file:line
2014-03-13 11:19:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 11:23:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-13 11:23:33 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
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
2014-03-13 11:38:18 --- CRITICAL: View_Exception [ 0 ]: The requested view / could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:18 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/', Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(100): Kohana_View::factory('/', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:34 --- CRITICAL: View_Exception [ 0 ]: The requested view kohana.local could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:34 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('kohana.local')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('kohana.local', Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(100): Kohana_View::factory('kohana.local', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:35 --- CRITICAL: View_Exception [ 0 ]: The requested view kohana.local could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:35 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('kohana.local')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('kohana.local', Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(100): Kohana_View::factory('kohana.local', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:35 --- CRITICAL: View_Exception [ 0 ]: The requested view kohana.local could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:35 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('kohana.local')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('kohana.local', Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(100): Kohana_View::factory('kohana.local', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:35 --- CRITICAL: View_Exception [ 0 ]: The requested view kohana.local could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:35 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('kohana.local')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('kohana.local', Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(100): Kohana_View::factory('kohana.local', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:36 --- CRITICAL: View_Exception [ 0 ]: The requested view kohana.local could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:36 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('kohana.local')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('kohana.local', Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(100): Kohana_View::factory('kohana.local', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:36 --- CRITICAL: View_Exception [ 0 ]: The requested view kohana.local could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:36 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('kohana.local')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('kohana.local', Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(100): Kohana_View::factory('kohana.local', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:39 --- CRITICAL: View_Exception [ 0 ]: The requested view kohana.local could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:39 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('kohana.local')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('kohana.local', Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(100): Kohana_View::factory('kohana.local', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:42 --- CRITICAL: View_Exception [ 0 ]: The requested view kohana.local could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:42 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('kohana.local')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('kohana.local', Array)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(100): Kohana_View::factory('kohana.local', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-13 11:38:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-13 11:38:55 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
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
2014-03-13 11:38:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-13 11:38:56 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
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
2014-03-13 11:38:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-13 11:38:56 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
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
2014-03-13 11:38:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-13 11:38:56 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
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
2014-03-13 11:38:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-13 11:38:56 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
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
2014-03-13 11:38:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-13 11:38:57 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
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
2014-03-13 11:38:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-13 11:38:57 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
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
2014-03-13 11:38:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\login.php [ 2 ] in D:\xampp\htdocs\kohana3\application\views\pages\login.php:2
2014-03-13 11:38:57 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 2, Array)
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
2014-03-13 12:07:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\estate\main.php [ 8 ] in file:line
2014-03-13 12:07:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line