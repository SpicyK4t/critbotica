<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-26 22:43:40 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in /home/guillermo/public_html/critbotica/system/classes/Kohana/Cookie.php:67
2015-07-26 22:43:40 --- DEBUG: #0 /home/guillermo/public_html/critbotica/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('gsScrollPos', NULL)
#1 /home/guillermo/public_html/critbotica/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('gsScrollPos')
#2 /home/guillermo/public_html/critbotica/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/guillermo/public_html/critbotica/system/classes/Kohana/Cookie.php:67