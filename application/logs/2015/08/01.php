<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-01 15:28:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Controller/Auth.php [ 8 ] in file:line
2015-08-01 15:28:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:28:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Auth.php [ 12 ] in file:line
2015-08-01 15:28:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:28:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Auth.php [ 12 ] in file:line
2015-08-01 15:28:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:28:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/Auth/login.php [ 9 ] in file:line
2015-08-01 15:28:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:29:34 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant prueba - assumed 'prueba' ~ APPPATH/views/Auth/login.php [ 9 ] in /home/guillermo/public_html/critbotica/application/views/Auth/login.php:9
2015-08-01 15:29:34 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Auth/login.php(9): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/guillermo...', 9, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(10): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Auth/login.php:9
2015-08-01 15:35:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: contenido ~ APPPATH/views/base.php [ 10 ] in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 15:35:06 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 10, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 15:42:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::contenido() ~ APPPATH/classes/Controller/Home.php [ 8 ] in file:line
2015-08-01 15:42:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:47:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::achor() ~ APPPATH/views/base.php [ 11 ] in file:line
2015-08-01 15:47:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:53:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH/classes/Controller/Home.php [ 11 ] in file:line
2015-08-01 15:53:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:53:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH/classes/Controller/Home.php [ 11 ] in file:line
2015-08-01 15:53:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:53:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH/classes/Controller/Home.php [ 11 ] in file:line
2015-08-01 15:53:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:53:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH/classes/Controller/Home.php [ 11 ] in file:line
2015-08-01 15:53:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:53:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH/classes/Controller/Home.php [ 11 ] in file:line
2015-08-01 15:53:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:53:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH/classes/Controller/Home.php [ 11 ] in file:line
2015-08-01 15:53:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:54:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Auth.php [ 31 ] in file:line
2015-08-01 15:54:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:54:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Auth.php [ 31 ] in file:line
2015-08-01 15:54:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 15:55:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: barra_usuario ~ APPPATH/views/base.php [ 13 ] in /home/guillermo/public_html/critbotica/application/views/base.php:13
2015-08-01 15:55:38 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 13, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:13
2015-08-01 15:55:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: barra_usuario ~ APPPATH/views/base.php [ 13 ] in /home/guillermo/public_html/critbotica/application/views/base.php:13
2015-08-01 15:55:39 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 13, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:13
2015-08-01 15:56:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: barra_usuario ~ APPPATH/views/base.php [ 13 ] in /home/guillermo/public_html/critbotica/application/views/base.php:13
2015-08-01 15:56:08 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 13, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:13
2015-08-01 15:58:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/base.php [ 10 ] in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 15:58:02 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 10, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 15:58:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/base.php [ 10 ] in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 15:58:02 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 10, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 15:58:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/base.php [ 10 ] in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 15:58:03 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 10, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 15:58:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/base.php [ 10 ] in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 15:58:03 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 10, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 15:58:25 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant None - assumed 'None' ~ APPPATH/classes/Controller/Home.php [ 8 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:25 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/guillermo...', 8, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:26 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant None - assumed 'None' ~ APPPATH/classes/Controller/Home.php [ 8 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:26 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/guillermo...', 8, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:26 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant None - assumed 'None' ~ APPPATH/classes/Controller/Home.php [ 8 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:26 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/guillermo...', 8, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:26 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant None - assumed 'None' ~ APPPATH/classes/Controller/Home.php [ 8 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:26 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/guillermo...', 8, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:26 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant None - assumed 'None' ~ APPPATH/classes/Controller/Home.php [ 8 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:26 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/guillermo...', 8, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:27 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant None - assumed 'None' ~ APPPATH/classes/Controller/Home.php [ 8 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:27 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/guillermo...', 8, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:27 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant None - assumed 'None' ~ APPPATH/classes/Controller/Home.php [ 8 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:27 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/guillermo...', 8, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:27 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant None - assumed 'None' ~ APPPATH/classes/Controller/Home.php [ 8 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:58:27 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/guillermo...', 8, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:8
2015-08-01 15:59:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH/classes/Controller/Auth.php [ 32 ] in file:line
2015-08-01 15:59:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 16:02:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/classes/Controller/Auth.php [ 8 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:8
2015-08-01 16:02:30 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 8, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_prueba()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:8
2015-08-01 16:04:50 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Auth.php [ 10 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:10
2015-08-01 16:04:50 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(10): Kohana_Core::error_handler(8, 'Array to string...', '/home/guillermo...', 10, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_prueba()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:10
2015-08-01 16:05:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/Controller/Auth.php [ 10 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:10
2015-08-01 16:05:14 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(10): Kohana_Core::error_handler(8, 'Undefined index...', '/home/guillermo...', 10, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_prueba()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:10
2015-08-01 16:05:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/Controller/Auth.php [ 10 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:10
2015-08-01 16:05:14 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(10): Kohana_Core::error_handler(8, 'Undefined index...', '/home/guillermo...', 10, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_prueba()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:10
2015-08-01 16:05:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/Controller/Auth.php [ 10 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:10
2015-08-01 16:05:17 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(10): Kohana_Core::error_handler(8, 'Undefined index...', '/home/guillermo...', 10, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_prueba()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:10
2015-08-01 16:06:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/base.php [ 10 ] in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 16:06:23 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 10, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 16:08:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/Controller/Auth.php [ 10 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:10
2015-08-01 16:08:28 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(10): Kohana_Core::error_handler(8, 'Undefined index...', '/home/guillermo...', 10, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_prueba()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:10
2015-08-01 16:38:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Flash' not found ~ APPPATH/classes/Controller/Auth.php [ 33 ] in file:line
2015-08-01 16:38:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 16:38:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Flash' not found ~ APPPATH/classes/Controller/Auth.php [ 33 ] in file:line
2015-08-01 16:38:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 17:08:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/base.php [ 10 ] in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 17:08:15 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 10, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 17:09:16 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 17:09:16 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(21): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 17:13:36 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Auth.php [ 11 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:11
2015-08-01 17:13:36 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(11): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/guillermo...', 11, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_prueba()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:11
2015-08-01 17:21:29 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php on line 21 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1563 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1563
2015-08-01 17:21:29 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1563): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/guillermo...', 1563, Array)
#1 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(21): Kohana_ORM->add(Object(Model_Role))
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_install()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#8 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1563
2015-08-01 17:30:43 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Auth.php [ 15 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:15
2015-08-01 17:30:43 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(15): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/guillermo...', 15, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_prueba()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:15
2015-08-01 17:30:44 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Auth.php [ 15 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:15
2015-08-01 17:30:44 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(15): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/guillermo...', 15, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_prueba()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php:15
2015-08-01 17:31:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: contenido ~ APPPATH/views/base.php [ 11 ] in /home/guillermo/public_html/critbotica/application/views/base.php:11
2015-08-01 17:31:08 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 11, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:11
2015-08-01 17:31:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: contenido ~ APPPATH/views/base.php [ 11 ] in /home/guillermo/public_html/critbotica/application/views/base.php:11
2015-08-01 17:31:09 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 11, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:11
2015-08-01 17:56:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/views/Home/dashboard.php [ 3 ] in file:line
2015-08-01 17:56:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 17:56:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/views/Home/dashboard.php [ 3 ] in file:line
2015-08-01 17:56:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 18:18:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on string ~ SYSPATH/classes/Kohana/Controller/Template.php [ 44 ] in file:line
2015-08-01 18:18:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 18:20:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Auth.php [ 10 ] in file:line
2015-08-01 18:20:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 18:34:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/base.php [ 10 ] in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 18:34:38 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 10, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:10
2015-08-01 18:34:52 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/base.php [ 11 ] in /home/guillermo/public_html/critbotica/application/views/base.php:11
2015-08-01 18:34:52 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_Core::error_handler(4096, 'Object of class...', '/home/guillermo...', 11, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:11
2015-08-01 18:34:53 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/base.php [ 11 ] in /home/guillermo/public_html/critbotica/application/views/base.php:11
2015-08-01 18:34:53 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_Core::error_handler(4096, 'Object of class...', '/home/guillermo...', 11, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/application/views/base.php:11