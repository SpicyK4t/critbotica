<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-25 00:36:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Salida.php [ 79 ] in file:line
2015-09-25 00:36:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 01:14:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$salida' (T_VARIABLE) ~ APPPATH/classes/Controller/Salida.php [ 89 ] in file:line
2015-09-25 01:14:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 01:14:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$salida' (T_VARIABLE) ~ APPPATH/classes/Controller/Salida.php [ 89 ] in file:line
2015-09-25 01:14:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 01:14:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$salida' (T_VARIABLE) ~ APPPATH/classes/Controller/Salida.php [ 89 ] in file:line
2015-09-25 01:14:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 01:14:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$salida' (T_VARIABLE) ~ APPPATH/classes/Controller/Salida.php [ 89 ] in file:line
2015-09-25 01:14:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 01:19:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH/classes/Controller/Salida.php [ 74 ] in file:line
2015-09-25 01:19:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 01:20:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 5 ~ APPPATH/classes/Controller/Salida.php [ 80 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php:80
2015-09-25 01:20:50 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php(80): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/guillermo...', 80, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Salida->action_registro()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php:80
2015-09-25 01:24:02 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/classes/Controller/Salida.php [ 110 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php:110
2015-09-25 01:24:02 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php(110): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/guillermo...', 110, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Salida->action_registro()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php:110
2015-09-25 01:38:44 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'salidas.entrada_id' in 'on clause' [ SELECT `salida`.`id` AS `id`, `salida`.`entrada_id` AS `entrada_id`, `salida`.`cantidad` AS `cantidad`, `salida`.`fecha_salida` AS `fecha_salida`, `salida`.`user_id` AS `user_id`, `salida`.`doctor_id` AS `doctor_id`, `salida`.`paciente_id` AS `paciente_id`, `salida`.`observaciones` AS `observaciones` FROM `salidas` AS `salida` INNER JOIN `entradas` ON (`entradas`.`id` = `salidas`.`entrada_id`) WHERE `entradas`.`medicamento_id` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Query.php:251
2015-09-25 01:38:44 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `salida`...', 'Model_Salida', Array)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php(16): Kohana_ORM->find_all()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Salida->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Query.php:251
2015-09-25 01:40:11 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'salidas.entrada_id' in 'on clause' [ SELECT `salida`.`id` AS `id`, `salida`.`entrada_id` AS `entrada_id`, `salida`.`cantidad` AS `cantidad`, `salida`.`fecha_salida` AS `fecha_salida`, `salida`.`user_id` AS `user_id`, `salida`.`doctor_id` AS `doctor_id`, `salida`.`paciente_id` AS `paciente_id`, `salida`.`observaciones` AS `observaciones` FROM `salidas` AS `salida` INNER JOIN `entradas` ON (`salidas`.`entrada_id` = `entradas`.`id`) WHERE `entradas`.`medicamento_id` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Query.php:251
2015-09-25 01:40:11 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `salida`...', 'Model_Salida', Array)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php(16): Kohana_ORM->find_all()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Salida->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Query.php:251
2015-09-25 01:40:13 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'salidas.entrada_id' in 'on clause' [ SELECT `salida`.`id` AS `id`, `salida`.`entrada_id` AS `entrada_id`, `salida`.`cantidad` AS `cantidad`, `salida`.`fecha_salida` AS `fecha_salida`, `salida`.`user_id` AS `user_id`, `salida`.`doctor_id` AS `doctor_id`, `salida`.`paciente_id` AS `paciente_id`, `salida`.`observaciones` AS `observaciones` FROM `salidas` AS `salida` INNER JOIN `entradas` ON (`salidas`.`entrada_id` = `entradas`.`id`) WHERE `entradas`.`medicamento_id` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Query.php:251
2015-09-25 01:40:13 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `salida`...', 'Model_Salida', Array)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/guillermo/public_html/critbotica/application/classes/Controller/Salida.php(16): Kohana_ORM->find_all()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Salida->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Salida))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#10 {main} in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/Query.php:251
2015-09-25 01:47:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '',' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/views/Entrada/index.php [ 9 ] in file:line
2015-09-25 01:47:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 01:50:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/Salida/index.php [ 7 ] in file:line
2015-09-25 01:50:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 01:54:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/Salida/index.php [ 11 ] in file:line
2015-09-25 01:54:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 01:54:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/Salida/index.php [ 11 ] in file:line
2015-09-25 01:54:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 01:54:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/Salida/index.php [ 11 ] in file:line
2015-09-25 01:54:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 02:49:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::begin() ~ APPPATH/views/Medicamento/index.php [ 4 ] in file:line
2015-09-25 02:49:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 02:50:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::begin() ~ APPPATH/views/Medicamento/index.php [ 4 ] in file:line
2015-09-25 02:50:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 02:50:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::begin() ~ APPPATH/views/Medicamento/index.php [ 4 ] in file:line
2015-09-25 02:50:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 02:50:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::begin() ~ APPPATH/views/Medicamento/index.php [ 4 ] in file:line
2015-09-25 02:50:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 02:51:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::end() ~ APPPATH/views/Medicamento/index.php [ 7 ] in file:line
2015-09-25 02:51:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 02:55:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Medicamento.php [ 15 ] in file:line
2015-09-25 02:55:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 02:55:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Medicamento.php [ 15 ] in file:line
2015-09-25 02:55:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-25 02:55:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Medicamento.php [ 15 ] in file:line
2015-09-25 02:55:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line