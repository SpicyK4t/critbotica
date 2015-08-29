<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-18 14:07:37 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'crit' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/MySQL.php:75
2015-08-18 14:07:37 --- DEBUG: #0 /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('crit')
#1 /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/guillermo/public_html/critbotica/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#9 /home/guillermo/public_html/critbotica/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#10 /home/guillermo/public_html/critbotica/application/classes/Controller/Auth.php(15): Kohana_Auth->login('admin', 'admin')
#11 /home/guillermo/public_html/critbotica/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#14 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /home/guillermo/public_html/critbotica/index.php(118): Kohana_Request->execute()
#17 {main} in /home/guillermo/public_html/critbotica/modules/database/classes/Kohana/Database/MySQL.php:75