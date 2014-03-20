<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-25 05:42:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$site_config' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in file:line
2014-02-25 05:42:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 09:41:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''age'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in file:line
2014-02-25 09:41:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 09:42:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''age'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in file:line
2014-02-25 09:42:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 09:54:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: age ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\Welcome.php:9
2014-02-25 09:54:40 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 9, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\Welcome.php:9
2014-02-25 12:39:14 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\Welcome.php:12
2014-02-25 12:39:14 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\Welcome.php(12): Kohana_Core::error_handler(2, 'Creating defaul...', 'D:\xampp\htdocs...', 12, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\Welcome.php:12
2014-02-25 12:40:48 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\Welcome.php:12
2014-02-25 12:40:48 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\Welcome.php(12): Kohana_Core::error_handler(2, 'Creating defaul...', 'D:\xampp\htdocs...', 12, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\Welcome.php:12
2014-02-25 12:40:49 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in D:\xampp\htdocs\kohana3\application\classes\Controller\Welcome.php:12
2014-02-25 12:40:49 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\classes\Controller\Welcome.php(12): Kohana_Core::error_handler(2, 'Creating defaul...', 'D:\xampp\htdocs...', 12, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana3\application\classes\Controller\Welcome.php:12
2014-02-25 13:19:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$content' (T_VARIABLE) ~ APPPATH\classes\Controller\Welcome.php [ 15 ] in file:line
2014-02-25 13:19:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 13:21:55 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:21:55 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:22:39 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:22:39 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:22:40 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:22:40 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:23:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$content' (T_VARIABLE) ~ APPPATH\classes\Controller\Welcome.php [ 15 ] in file:line
2014-02-25 13:23:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 13:23:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$content' (T_VARIABLE) ~ APPPATH\classes\Controller\Welcome.php [ 16 ] in file:line
2014-02-25 13:23:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 13:23:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Welcome.php [ 17 ] in file:line
2014-02-25 13:23:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 13:28:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$content' (T_VARIABLE) ~ APPPATH\classes\Controller\Welcome.php [ 15 ] in file:line
2014-02-25 13:28:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 13:28:59 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:28:59 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:34:40 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:34:40 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:34:41 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:34:41 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:34:42 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:34:42 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:34:42 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:34:42 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:34:43 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:34:43 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:04 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:04 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:42 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:42 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:42 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:42 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:43 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:44 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:44 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:44 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:44 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:44 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:44 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:44 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-25 13:38:44 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137