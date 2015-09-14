<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-14 00:14:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/base.php [ 14 ] in file:line
2015-09-14 00:14:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 00:19:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '">' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/base.php [ 16 ] in file:line
2015-09-14 00:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 00:19:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '">' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/base.php [ 16 ] in file:line
2015-09-14 00:19:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 00:19:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '">' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/base.php [ 16 ] in file:line
2015-09-14 00:19:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 00:19:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '">' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/base.php [ 16 ] in file:line
2015-09-14 00:19:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 00:20:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'url' not found ~ APPPATH/views/base.php [ 15 ] in file:line
2015-09-14 00:20:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 00:20:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'url' not found ~ APPPATH/views/base.php [ 15 ] in file:line
2015-09-14 00:20:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 00:20:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'url' not found ~ APPPATH/views/base.php [ 15 ] in file:line
2015-09-14 00:20:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 00:33:27 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1362
2015-09-14 00:33:27 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Model/Auth/User.php(94): Kohana_ORM->update()
#2 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/Auth/ORM.php(274): Model_Auth_User->complete_login()
#3 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/Auth/ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 /home/guillermo/public_html/critbotica/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('webadmin', 'webadmin', false)
#5 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(15): Kohana_Auth->login('webadmin', 'webadmin')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#12 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1362
2015-09-14 00:33:42 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1362
2015-09-14 00:33:42 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Model/Auth/User.php(94): Kohana_ORM->update()
#2 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/Auth/ORM.php(274): Model_Auth_User->complete_login()
#3 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/Auth/ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 /home/guillermo/public_html/critbotica/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('webadmin', 'webadmin', false)
#5 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(15): Kohana_Auth->login('webadmin', 'webadmin')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#12 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1362
2015-09-14 00:34:23 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-14 00:34:23 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(33): Kohana_ORM->save()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-14 00:34:38 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1362
2015-09-14 00:34:38 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Model/Auth/User.php(94): Kohana_ORM->update()
#2 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/Auth/ORM.php(274): Model_Auth_User->complete_login()
#3 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/Auth/ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 /home/guillermo/public_html/critbotica/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('webadmin', 'webadmin', false)
#5 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(15): Kohana_Auth->login('webadmin', 'webadmin')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#12 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1362
2015-09-14 00:36:15 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1362
2015-09-14 00:36:15 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Model/Auth/User.php(94): Kohana_ORM->update()
#2 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/Auth/ORM.php(274): Model_Auth_User->complete_login()
#3 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/Auth/ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 /home/guillermo/public_html/critbotica/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('webadmin', 'webadmin', false)
#5 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(15): Kohana_Auth->login('webadmin', 'webadmin')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#12 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1362
2015-09-14 00:41:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1567
2015-09-14 00:41:04 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/home/guillermo...', 1567, Array)
#1 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(36): Kohana_ORM->add('Roles', Object(Model_Role))
#2 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_install()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#8 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1567
2015-09-14 00:41:37 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-14 00:41:37 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(33): Kohana_ORM->save()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-14 00:42:02 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-14 00:42:02 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(33): Kohana_ORM->save()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-14 00:42:04 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-14 00:42:04 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(33): Kohana_ORM->save()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-14 00:42:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-09-14 00:42:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 00:44:09 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-14 00:44:09 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(33): Kohana_ORM->save()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#9 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1302
2015-09-14 00:44:48 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1362
2015-09-14 00:44:48 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Model/Auth/User.php(94): Kohana_ORM->update()
#2 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/Auth/ORM.php(274): Model_Auth_User->complete_login()
#3 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/Auth/ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 /home/guillermo/public_html/critbotica/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('webadmin', 'webadmin', false)
#5 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(15): Kohana_Auth->login('webadmin', 'webadmin')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#12 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1362
2015-09-14 00:52:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'funcion' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH/classes/Controller/Home.php [ 46 ] in file:line
2015-09-14 00:52:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 00:52:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'funcion' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH/classes/Controller/Home.php [ 46 ] in file:line
2015-09-14 00:52:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 00:52:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Home::hash() ~ MODPATH/auth/classes/Kohana/Auth.php [ 143 ] in file:line
2015-09-14 00:52:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 00:55:45 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1362
2015-09-14 00:55:45 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /home/guillermo/public_html/critbotica/modules/orm/classes/Model/Auth/User.php(94): Kohana_ORM->update()
#2 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/Auth/ORM.php(274): Model_Auth_User->complete_login()
#3 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/Auth/ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 /home/guillermo/public_html/critbotica/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('webadmin', 'webadmin', false)
#5 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(15): Kohana_Auth->login('webadmin', 'webadmin')
#6 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#12 {main} in /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php:1362
2015-09-14 01:03:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Auth.php [ 40 ] in file:line
2015-09-14 01:03:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 02:34:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/Auth/login.php [ 46 ] in file:line
2015-09-14 02:34:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-14 02:34:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/Auth/login.php [ 46 ] in file:line
2015-09-14 02:34:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line