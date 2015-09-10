<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-09 13:33:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_entradas' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-09 13:33:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 13:33:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Model/entrada.php [ 30 ] in file:line
2015-09-09 13:33:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 13:35:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Model/entrada.php [ 30 ] in file:line
2015-09-09 13:35:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 13:35:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Model/entrada.php [ 30 ] in file:line
2015-09-09 13:35:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 13:36:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view Entradas/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-09 13:36:05 --- DEBUG: #0 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Entradas/index')
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(30): Kohana_View->__construct('Entradas/index', NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Entrada.php(12): Kohana_View::factory('Entradas/index')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Entrada->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entrada))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-09 16:34:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view Entradas/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-09 16:34:26 --- DEBUG: #0 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Entradas/index')
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(30): Kohana_View->__construct('Entradas/index', NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Entrada.php(12): Kohana_View::factory('Entradas/index')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Entrada->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entrada))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php:145
2015-09-09 16:35:08 --- EMERGENCY: Kohana_Exception [ 0 ]: The observaciones property does not exist in the Model_Entrada class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:35:08 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('observaciones')
#1 /home/guillermo/public_html/critbotica/application/views/Entrada/form.php(31): Kohana_ORM->__get('observaciones')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entrada))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#15 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:36:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The observaciones property does not exist in the Model_Entrada class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:36:42 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('observaciones')
#1 /home/guillermo/public_html/critbotica/application/views/Entrada/form.php(31): Kohana_ORM->__get('observaciones')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entrada))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#15 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:36:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The observaciones property does not exist in the Model_Entrada class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:36:43 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('observaciones')
#1 /home/guillermo/public_html/critbotica/application/views/Entrada/form.php(31): Kohana_ORM->__get('observaciones')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entrada))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#15 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:37:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The observaciones property does not exist in the Model_Entrada class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:37:44 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('observaciones')
#1 /home/guillermo/public_html/critbotica/application/views/Entrada/form.php(31): Kohana_ORM->__get('observaciones')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entrada))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#15 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:38:41 --- EMERGENCY: Kohana_Exception [ 0 ]: The observaciones property does not exist in the Model_Entrada class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:38:41 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('observaciones')
#1 /home/guillermo/public_html/critbotica/application/views/Entrada/form.php(31): Kohana_ORM->__get('observaciones')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entrada))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#15 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:38:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The observaciones property does not exist in the Model_Entrada class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:38:42 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('observaciones')
#1 /home/guillermo/public_html/critbotica/application/views/Entrada/form.php(31): Kohana_ORM->__get('observaciones')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entrada))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#15 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:38:50 --- EMERGENCY: Kohana_Exception [ 0 ]: The observaciones property does not exist in the Model_Entrada class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:38:50 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('observaciones')
#1 /home/guillermo/public_html/critbotica/application/views/Entrada/form.php(31): Kohana_ORM->__get('observaciones')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entrada))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#15 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 16:41:24 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-09 16:41:24 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(33): Kohana_ORM->save()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-09 16:43:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function post() ~ APPPATH/classes/Controller/Entrada.php [ 37 ] in file:line
2015-09-09 16:43:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 16:45:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function post() ~ APPPATH/classes/Controller/Entrada.php [ 37 ] in file:line
2015-09-09 16:45:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:23:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function post() ~ APPPATH/classes/Controller/Entrada.php [ 37 ] in file:line
2015-09-09 21:23:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:24:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Medicamento' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-09 21:24:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:26:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_entrada' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-09 21:26:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:27:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_entrada' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-09 21:27:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:27:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_entrada' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-09 21:27:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:27:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_entrada' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-09 21:27:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:27:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_entrada' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-09 21:27:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:27:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_entrada' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-09 21:27:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:27:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_medicamento' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-09 21:27:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:27:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_medicamento' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-09 21:27:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:28:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_doctor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-09 21:28:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:32:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nuevo_usuario ~ APPPATH/classes/Controller/User.php [ 43 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/User.php:43
2015-09-09 21:32:03 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/User.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 43, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_User->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/User.php:43
2015-09-09 21:33:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function post() ~ APPPATH/classes/Controller/Entrada.php [ 79 ] in file:line
2015-09-09 21:33:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line