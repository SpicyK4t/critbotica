<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-08 10:52:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC), expecting ',' or ';' ~ APPPATH/classes/Controller/Medicamento.php [ 6 ] in file:line
2015-09-08 10:52:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 10:52:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/Controller/Medicamento.php [ 101 ] in file:line
2015-09-08 10:52:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 10:58:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Medicamento.php [ 135 ] in file:line
2015-09-08 10:58:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 10:59:08 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Medicamento.php [ 60 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php:60
2015-09-08 10:59:08 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(60): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/guillermo...', 60, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Medicamento->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php:60
2015-09-08 11:00:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/views/Medicamento/form.php [ 4 ] in file:line
2015-09-08 11:00:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 11:01:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/Medicamento/form.php [ 4 ] in file:line
2015-09-08 11:01:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 11:01:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: medicamento ~ APPPATH/views/Medicamento/form.php [ 6 ] in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:6
2015-09-08 11:01:48 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 6, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:6
2015-09-08 11:12:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: medicamento ~ APPPATH/views/Medicamento/form.php [ 6 ] in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:6
2015-09-08 11:12:48 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 6, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:6
2015-09-08 11:13:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: medicamento ~ APPPATH/views/Medicamento/form.php [ 6 ] in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:6
2015-09-08 11:13:05 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 6, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:6
2015-09-08 11:46:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: grupos ~ APPPATH/views/Medicamento/form.php [ 18 ] in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:18
2015-09-08 11:46:14 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 18, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:18
2015-09-08 12:42:54 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/media/img/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php:127
2015-09-08 12:42:54 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(127): Kohana_Upload::save(Array, NULL, '/home/guillermo...')
#1 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(42): Controller_Medicamento->save_image(Array)
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Medicamento->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#8 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php:127
2015-09-08 12:46:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errores ~ APPPATH/views/Medicamento/form.php [ 43 ] in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:43
2015-09-08 12:46:45 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 43, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:43
2015-09-08 12:47:03 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/Medicamento/form.php [ 43 ] in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:43
2015-09-08 12:47:03 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php(43): Kohana_Core::error_handler(8, 'Array to string...', '/home/guillermo...', 43, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:43
2015-09-08 12:54:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: user ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1567
2015-09-08 12:54:41 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/home/guillermo...', 1567, Array)
#1 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(37): Kohana_ORM->add('user', Object(Model_User))
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Medicamento->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#8 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1567
2015-09-08 13:08:24 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-08 13:08:24 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Medicamento.php(51): Kohana_ORM->save()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Medicamento->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-08 13:20:08 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/Medicamento/form.php [ 44 ] in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:44
2015-09-08 13:20:08 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php(44): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/guillermo...', 44, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Medicamento))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Medicamento/form.php:44