<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-26 05:21:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Welcome.php [ 14 ] in file:line
2014-02-26 05:21:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-26 05:21:43 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in file:line
2014-02-26 05:21:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-26 05:34:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\page.php [ 12 ] in file:line
2014-02-26 05:34:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-26 05:35:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\page.php [ 12 ] in file:line
2014-02-26 05:35:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-26 05:38:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\page.php [ 12 ] in file:line
2014-02-26 05:38:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-26 05:40:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\page.php [ 12 ] in file:line
2014-02-26 05:40:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-26 05:41:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\page.php [ 12 ] in file:line
2014-02-26 05:41:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-26 05:41:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\page.php [ 12 ] in file:line
2014-02-26 05:41:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-26 05:43:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\page.php [ 12 ] in file:line
2014-02-26 05:43:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-26 05:45:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\page.php [ 12 ] in file:line
2014-02-26 05:45:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-26 05:51:58 --- CRITICAL: View_Exception [ 0 ]: The requested view /page/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 05:51:58 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/page/about')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/page/about', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(9): Kohana_View::factory('/page/about')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 10:57:56 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 10:57:56 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/about')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(8): Kohana_View::factory('/pages/about')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 10:59:55 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 10:59:55 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/about')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(7): Kohana_View::factory('/pages/about')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:00:18 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:00:18 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/about')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(7): Kohana_View::factory('/pages/about')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:22:45 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:22:45 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/show')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(7): Kohana_View::factory('/pages/show')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:24:13 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:24:13 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/show')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(7): Kohana_View::factory('/pages/show')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:26:11 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:26:11 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/show')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(7): Kohana_View::factory('/pages/show')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:30:22 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:30:22 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/show')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(7): Kohana_View::factory('/pages/show')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:30:42 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:30:42 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/show')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(7): Kohana_View::factory('/pages/show')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:32:48 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:32:48 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/show')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(7): Kohana_View::factory('/pages/show')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:33:17 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:33:17 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/show')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(7): Kohana_View::factory('/pages/show')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:38:54 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 11:38:54 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/show')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(7): Kohana_View::factory('/pages/show')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 12:05:31 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 12:05:31 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/about')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Kohana_View::factory('/pages/about')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 12:05:38 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 12:05:38 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/about')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Kohana_View::factory('/pages/about')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 12:05:53 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 12:05:53 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/about')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\page.php(13): Kohana_View::factory('/pages/about')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-02-26 12:34:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\views\main.php [ 20 ] in file:line
2014-02-26 12:34:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-26 12:34:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\views\main.php [ 20 ] in file:line
2014-02-26 12:34:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line