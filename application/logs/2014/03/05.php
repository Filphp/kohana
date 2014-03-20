<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-05 07:13:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 28 ] in file:line
2014-03-05 07:13:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:13:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 28 ] in file:line
2014-03-05 07:13:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:13:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 29 ] in file:line
2014-03-05 07:13:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:13:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 29 ] in file:line
2014-03-05 07:13:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:13:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 29 ] in file:line
2014-03-05 07:13:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:13:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 29 ] in file:line
2014-03-05 07:13:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:13:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 29 ] in file:line
2014-03-05 07:13:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:13:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 29 ] in file:line
2014-03-05 07:13:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:13:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 29 ] in file:line
2014-03-05 07:13:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:14:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 38 ] in file:line
2014-03-05 07:14:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:14:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 38 ] in file:line
2014-03-05 07:14:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:14:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 38 ] in file:line
2014-03-05 07:14:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:14:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 38 ] in file:line
2014-03-05 07:14:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:15:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 39 ] in file:line
2014-03-05 07:15:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 07:20:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '"', expecting ',' or ';' ~ APPPATH\views\main.php [ 28 ] in file:line
2014-03-05 07:20:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 10:40:59 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-05 10:40:59 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/register')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/register', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(39): Kohana_View::factory('/pages/register')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-05 10:54:42 --- CRITICAL: View_Exception [ 0 ]: The requested view show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-05 10:54:42 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('show')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('show', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('show')
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\common.php(9): Kohana_Controller_Template->before()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-05 10:54:51 --- CRITICAL: View_Exception [ 0 ]: The requested view /show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-05 10:54:51 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/show')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/show', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('/show')
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\common.php(9): Kohana_Controller_Template->before()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-05 10:54:51 --- CRITICAL: View_Exception [ 0 ]: The requested view /show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-05 10:54:51 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/show')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/show', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('/show')
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\common.php(9): Kohana_Controller_Template->before()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-05 10:54:52 --- CRITICAL: View_Exception [ 0 ]: The requested view /show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-05 10:54:52 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/show')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/show', NULL)
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('/show')
#3 D:\xampp\htdocs\kohana3\application\classes\Controller\common.php(9): Kohana_Controller_Template->before()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-05 10:55:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\pages\show.php [ 1 ] in D:\xampp\htdocs\kohana3\application\views\pages\show.php:1
2014-03-05 10:55:03 --- DEBUG: #0 D:\xampp\htdocs\kohana3\application\views\pages\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 1, Array)
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana3\application\views\pages\show.php:1
2014-03-05 12:00:18 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/user could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137
2014-03-05 12:00:18 --- DEBUG: #0 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/user')
#1 D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/user', NULL)
#2 D:\xampp\htdocs\kohana3\application\classes\Controller\static.php(39): Kohana_View::factory('/pages/user')
#3 D:\xampp\htdocs\kohana3\system\classes\Kohana\Controller.php(84): Controller_Static->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana3\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana3\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana3\system\classes\Kohana\View.php:137