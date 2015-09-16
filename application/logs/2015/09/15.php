<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-15 02:42:15 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Medicamento.php [ 8 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php:8
2015-09-15 02:42:15 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/guillermo...', 8, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Medicamento->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php:8
2015-09-15 05:05:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH/views/menu.php [ 9 ] in file:line
2015-09-15 05:05:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 05:06:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH/views/menu.php [ 9 ] in file:line
2015-09-15 05:06:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 05:06:40 --- EMERGENCY: Kohana_Exception [ 0 ]: The nombre_usuario property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-15 05:06:40 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('nombre_usuario')
#1 /home/guillermo/public_html/critbotica/application/views/menu.php(9): Kohana_ORM->__get('nombre_usuario')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /home/guillermo/public_html/critbotica/application/views/base.php(38): Kohana_View->__toString()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#15 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-15 06:15:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/Home/dashboard.php [ 4 ] in file:line
2015-09-15 06:15:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 06:15:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/Home/dashboard.php [ 4 ] in file:line
2015-09-15 06:15:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 11:23:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/Home/dashboard.php [ 45 ] in file:line
2015-09-15 11:23:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 11:24:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH/views/Home/dashboard.php [ 14 ] in file:line
2015-09-15 11:24:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 11:24:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH/views/Home/dashboard.php [ 14 ] in file:line
2015-09-15 11:24:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 11:25:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH/views/Home/dashboard.php [ 14 ] in file:line
2015-09-15 11:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 11:25:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH/views/Home/dashboard.php [ 14 ] in file:line
2015-09-15 11:25:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 11:25:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH/views/Home/dashboard.php [ 14 ] in file:line
2015-09-15 11:25:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 11:25:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH/views/Home/dashboard.php [ 14 ] in file:line
2015-09-15 11:25:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 11:53:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/Home/dashboard.php [ 13 ] in file:line
2015-09-15 11:53:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 12:57:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view Salida/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-15 12:57:35 --- DEBUG: #0 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Salida/index')
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(30): Kohana_View->__construct('Salida/index', NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php(12): Kohana_View::factory('Salida/index')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Salida->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-15 14:18:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view Medicamento/table_sorter.js could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-15 14:18:18 --- DEBUG: #0 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Medicamento/tab...')
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(30): Kohana_View->__construct('Medicamento/tab...', NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(17): Kohana_View::factory('Medicamento/tab...')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Medicamento->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-15 14:19:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view Medicamento/table_sorter.js could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-15 14:19:27 --- DEBUG: #0 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Medicamento/tab...')
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(30): Kohana_View->__construct('Medicamento/tab...', NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(17): Kohana_View::factory('Medicamento/tab...')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Medicamento->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-15 14:19:40 --- EMERGENCY: View_Exception [ 0 ]: The requested view table_sorter.js could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-15 14:19:40 --- DEBUG: #0 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(145): Kohana_View->set_filename('table_sorter.js')
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(30): Kohana_View->__construct('table_sorter.js', NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(17): Kohana_View::factory('table_sorter.js')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Medicamento->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-15 15:54:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'media' (T_STRING) ~ APPPATH/views/Medicamento/index.php [ 22 ] in file:line
2015-09-15 15:54:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 15:55:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/Medicamento/index.php [ 22 ] in file:line
2015-09-15 15:55:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 16:09:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'HTTP' (T_STRING) ~ APPPATH/classes/Controller/Salida.php [ 19 ] in file:line
2015-09-15 16:09:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line