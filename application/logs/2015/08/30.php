<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-30 17:27:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Paciente.php [ 53 ] in file:line
2015-08-30 17:27:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-30 17:28:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Paciente.php [ 53 ] in file:line
2015-08-30 17:28:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-30 17:28:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Paciente.php [ 55 ] in file:line
2015-08-30 17:28:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-30 17:29:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'as' (T_AS), expecting ';' ~ APPPATH/views/Paciente/index.php [ 16 ] in file:line
2015-08-30 17:29:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-30 17:29:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Request::$method ~ APPPATH/classes/Controller/Paciente.php [ 31 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Paciente.php:31
2015-08-30 17:29:36 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Paciente.php(31): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/guillermo...', 31, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Paciente->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paciente))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Paciente.php:31
2015-08-30 17:30:27 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Valid::min_length() ~ SYSPATH/classes/Kohana/Valid.php [ 49 ] in /home/guillermo/public_html/critbotica/system/classes/Kohana/Valid.php:49
2015-08-30 17:30:27 --- DEBUG: #0 /home/guillermo/public_html/critbotica/system/classes/Kohana/Valid.php(49): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/guillermo...', 49, Array)
#1 [internal function]: Kohana_Valid::min_length('Apellido del pa...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#4 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#5 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#6 /home/guillermo/public_html/critbotica/application/classes/Controller/Paciente.php(38): Kohana_ORM->save()
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Paciente->action_new()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paciente))
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#13 {main} in /home/guillermo/public_html/critbotica/system/classes/Kohana/Valid.php:49
2015-08-30 17:32:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pacuente ~ APPPATH/views/Paciente/index.php [ 18 ] in /home/guillermo/public_html/critbotica/application/views/Paciente/index.php:18
2015-08-30 17:32:50 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/views/Paciente/index.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/guillermo...', 18, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/guillermo/public_html/critbotica/application/views/base.php(11): Kohana_View->__toString()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(62): include('/home/guillermo...')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/guillermo...', Array)
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Paciente))
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#14 {main} in /home/guillermo/public_html/critbotica/application/views/Paciente/index.php:18