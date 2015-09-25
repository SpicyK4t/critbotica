<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-24 00:08:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Home.php [ 15 ] in file:line
2015-09-24 00:08:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 00:19:30 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/media/fotos/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php:130
2015-09-24 00:19:30 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(130): Kohana_Upload::save(Array, NULL, '/home/guillermo...')
#1 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(43): Controller_Medicamento->save_image(Array)
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Medicamento->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#8 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php:130
2015-09-24 00:20:39 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/media/fotos/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php:130
2015-09-24 00:20:39 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(130): Kohana_Upload::save(Array, NULL, '/home/guillermo...')
#1 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(43): Controller_Medicamento->save_image(Array)
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Medicamento->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#8 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php:130
2015-09-24 00:20:42 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/media/fotos/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php:130
2015-09-24 00:20:42 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(130): Kohana_Upload::save(Array, NULL, '/home/guillermo...')
#1 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(43): Controller_Medicamento->save_image(Array)
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Medicamento->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#8 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php:130
2015-09-24 01:33:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: medicamentos ~ APPPATH/views/Home/dashboard.php [ 2 ] in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:2
2015-09-24 01:33:39 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 2, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:2
2015-09-24 01:35:02 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/Home/dashboard.php [ 2 ] in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:2
2015-09-24 01:35:02 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php(2): Kohana_Core::error_handler(4096, 'Object of class...', '/home/guillermo...', 2, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:2
2015-09-24 01:35:47 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/Home/dashboard.php [ 2 ] in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:2
2015-09-24 01:35:47 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php(2): Kohana_Core::error_handler(4096, 'Object of class...', '/home/guillermo...', 2, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:2
2015-09-24 01:36:33 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/Home/dashboard.php [ 2 ] in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:2
2015-09-24 01:36:33 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php(2): Kohana_Core::error_handler(4096, 'Object of class...', '/home/guillermo...', 2, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:2
2015-09-24 01:37:19 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/Home/dashboard.php [ 2 ] in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:2
2015-09-24 01:37:19 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php(2): Kohana_Core::error_handler(4096, 'Object of class...', '/home/guillermo...', 2, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:2
2015-09-24 01:38:29 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/Home/dashboard.php [ 5 ] in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:5
2015-09-24 01:38:29 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php(5): Kohana_Core::error_handler(8, 'Array to string...', '/home/guillermo...', 5, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:5
2015-09-24 01:39:15 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/Home/dashboard.php [ 5 ] in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:5
2015-09-24 01:39:15 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php(5): Kohana_Core::error_handler(8, 'Array to string...', '/home/guillermo...', 5, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:5
2015-09-24 01:42:54 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/views/Home/dashboard.php [ 5 ] in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:5
2015-09-24 01:42:54 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php(5): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/guillermo...', 5, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:5
2015-09-24 01:43:40 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/views/Home/dashboard.php [ 5 ] in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:5
2015-09-24 01:43:40 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php(5): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/guillermo...', 5, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php:5
2015-09-24 01:59:16 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Form::submit(), called in /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php on line 12 and defined ~ SYSPATH/classes/Kohana/Form.php [ 354 ] in /home/guillermo/public_html/critbotica/system/classes/Kohana/Form.php:354
2015-09-24 01:59:16 --- DEBUG: #0 /home/guillermo/public_html/critbotica/system/classes/Kohana/Form.php(354): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/guillermo...', 354, Array)
#1 /home/guillermo/public_html/critbotica/application/views/Home/dashboard.php(12): Kohana_Form::submit('')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#15 {main} in /home/guillermo/public_html/critbotica/system/classes/Kohana/Form.php:354
2015-09-24 02:21:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'HTTP' (T_STRING) ~ APPPATH/classes/Controller/Salida.php [ 19 ] in file:line
2015-09-24 02:21:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 02:22:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'HTTP' (T_STRING) ~ APPPATH/classes/Controller/Salida.php [ 19 ] in file:line
2015-09-24 02:22:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 10:01:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'HTTP' (T_STRING) ~ APPPATH/classes/Controller/Salida.php [ 19 ] in file:line
2015-09-24 10:01:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 13:02:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$entrada' (T_VARIABLE) ~ APPPATH/classes/Controller/Entrada.php [ 110 ] in file:line
2015-09-24 13:02:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 13:02:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$entrada' (T_VARIABLE) ~ APPPATH/classes/Controller/Entrada.php [ 110 ] in file:line
2015-09-24 13:02:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 13:02:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$entrada' (T_VARIABLE) ~ APPPATH/classes/Controller/Entrada.php [ 110 ] in file:line
2015-09-24 13:02:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 13:02:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$entrada' (T_VARIABLE) ~ APPPATH/classes/Controller/Entrada.php [ 110 ] in file:line
2015-09-24 13:02:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 13:03:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/Entrada/form_med_entrada.php [ 6 ] in /home/guillermo/public_html/critbotica/application/views/Entrada/form_med_entrada.php:6
2015-09-24 13:03:14 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Entrada/form_med_entrada.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 6, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entrada))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Entrada/form_med_entrada.php:6
2015-09-24 13:06:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: medicamento ~ APPPATH/views/Entrada/form_med_entrada.php [ 2 ] in /home/guillermo/public_html/critbotica/application/views/Entrada/form_med_entrada.php:2
2015-09-24 13:06:14 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Entrada/form_med_entrada.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 2, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entrada))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Entrada/form_med_entrada.php:2
2015-09-24 13:32:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/views/Entrada/form_med_entrada.php [ 9 ] in file:line
2015-09-24 13:32:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 13:32:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/views/Entrada/form_med_entrada.php [ 9 ] in file:line
2015-09-24 13:32:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 13:32:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/views/Entrada/form_med_entrada.php [ 9 ] in file:line
2015-09-24 13:32:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 13:40:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Entrada.php [ 119 ] in file:line
2015-09-24 13:40:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 13:46:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: nombre_distintivoexistencia ~ MODPATH/database/classes/Kohana/Database/Result.php [ 164 ] in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Result.php:164
2015-09-24 13:46:32 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Result.php(164): Kohana_Core::error_handler(8, 'Undefined index...', '/home/guillermo...', 164, Array)
#1 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(27): Kohana_Database_Result->as_array('id', 'nombre_distinti...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#8 {main} in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Result.php:164
2015-09-24 13:46:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: nombre_distintivoexistencia ~ MODPATH/database/classes/Kohana/Database/Result.php [ 164 ] in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Result.php:164
2015-09-24 13:46:34 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Result.php(164): Kohana_Core::error_handler(8, 'Undefined index...', '/home/guillermo...', 164, Array)
#1 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(27): Kohana_Database_Result->as_array('id', 'nombre_distinti...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#8 {main} in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Result.php:164
2015-09-24 13:51:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Controller/Home.php [ 30 ] in file:line
2015-09-24 13:51:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 13:52:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: medicamenos ~ APPPATH/classes/Controller/Home.php [ 29 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:29
2015-09-24 13:52:10 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 29, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:29
2015-09-24 13:52:20 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Home.php [ 30 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:30
2015-09-24 13:52:20 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(30): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/guillermo...', 30, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:30
2015-09-24 13:56:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'HTTP' (T_STRING) ~ APPPATH/classes/Controller/Salida.php [ 19 ] in file:line
2015-09-24 13:56:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 14:09:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'HTTP' (T_STRING) ~ APPPATH/classes/Controller/Salida.php [ 19 ] in file:line
2015-09-24 14:09:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 14:09:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'HTTP' (T_STRING) ~ APPPATH/classes/Controller/Salida.php [ 19 ] in file:line
2015-09-24 14:09:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 14:09:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view Salida/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-24 14:09:38 --- DEBUG: #0 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Salida/index')
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(30): Kohana_View->__construct('Salida/index', NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php(12): Kohana_View::factory('Salida/index')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Salida->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-24 15:05:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::end() ~ APPPATH/views/Salida/form_med_salida.php [ 4 ] in file:line
2015-09-24 15:05:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 15:06:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::end() ~ APPPATH/views/Salida/form_med_salida.php [ 4 ] in file:line
2015-09-24 15:06:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 15:08:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::end() ~ APPPATH/views/Salida/form_med_salida.php [ 4 ] in file:line
2015-09-24 15:08:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 15:09:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::end() ~ APPPATH/views/Salida/form_med_salida.php [ 4 ] in file:line
2015-09-24 15:09:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 15:09:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::end() ~ APPPATH/views/Salida/form_med_salida.php [ 4 ] in file:line
2015-09-24 15:09:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 15:10:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::end() ~ APPPATH/views/Salida/form_med_salida.php [ 4 ] in file:line
2015-09-24 15:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 15:11:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::end() ~ APPPATH/views/Salida/form_med_salida.php [ 4 ] in file:line
2015-09-24 15:11:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 15:12:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::end() ~ APPPATH/views/Salida/form_med_salida.php [ 4 ] in file:line
2015-09-24 15:12:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 16:16:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::end() ~ APPPATH/views/Salida/form_med_salida.php [ 4 ] in file:line
2015-09-24 16:16:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 16:20:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: salida ~ APPPATH/views/Salida/form_med_salida.php [ 5 ] in /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php:5
2015-09-24 16:20:27 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 5, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php:5
2015-09-24 16:21:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: salida ~ APPPATH/views/Salida/form_med_salida.php [ 5 ] in /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php:5
2015-09-24 16:21:13 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 5, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php:5
2015-09-24 16:21:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: salida ~ APPPATH/views/Salida/form_med_salida.php [ 5 ] in /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php:5
2015-09-24 16:21:58 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 5, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php:5
2015-09-24 16:22:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: salida ~ APPPATH/views/Salida/form_med_salida.php [ 5 ] in /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php:5
2015-09-24 16:22:32 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 5, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php:5
2015-09-24 19:16:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: medicamento ~ APPPATH/classes/Controller/Entrada.php [ 138 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Entrada.php:138
2015-09-24 19:16:43 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Entrada.php(138): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 138, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Entrada->action_registro()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entrada))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Entrada.php:138
2015-09-24 21:13:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/Salida/form_med_salida.php [ 6 ] in file:line
2015-09-24 21:13:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 21:16:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting '(' ~ APPPATH/views/Salida/form_med_salida.php [ 7 ] in file:line
2015-09-24 21:16:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 21:16:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting '(' ~ APPPATH/views/Salida/form_med_salida.php [ 7 ] in file:line
2015-09-24 21:16:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 21:17:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting '(' ~ APPPATH/views/Salida/form_med_salida.php [ 7 ] in file:line
2015-09-24 21:17:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 21:17:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting '(' ~ APPPATH/views/Salida/form_med_salida.php [ 7 ] in file:line
2015-09-24 21:17:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 21:18:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/Salida/form_med_salida.php [ 7 ] in /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php:7
2015-09-24 21:18:07 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 7, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php:7
2015-09-24 21:18:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/Salida/form_med_salida.php [ 7 ] in /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php:7
2015-09-24 21:18:09 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 7, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(47): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Salida/form_med_salida.php:7
2015-09-24 21:18:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Salida::bind() ~ APPPATH/classes/Controller/Salida.php [ 64 ] in file:line
2015-09-24 21:18:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-24 21:23:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: medicamento ~ APPPATH/classes/Controller/Salida.php [ 75 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php:75
2015-09-24 21:23:12 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 75, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Salida->action_registro()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php:75