<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-02 03:56:37 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Home.php [ 9 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:9
2015-08-02 03:56:37 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/guillermo...', 9, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/Home.php:9
2015-08-02 04:09:16 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_edit(), called in /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/User.php [ 23 ] in /home/guillermo/public_html/critbotica/application/classes/Controller/User.php:23
2015-08-02 04:09:16 --- DEBUG: #0 /home/guillermo/public_html/critbotica/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/guillermo...', 23, Array)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#7 {main} in /home/guillermo/public_html/critbotica/application/classes/Controller/User.php:23
2015-08-02 14:13:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::redirect() ~ APPPATH/classes/Controller/User.php [ 19 ] in file:line
2015-08-02 14:13:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line