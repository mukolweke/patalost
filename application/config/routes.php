<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'homecontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//user pages routes
$route['index'] = 'homecontroller/index_';
$route['reportFound'] = 'homecontroller/found_';
$route['reportLost'] = 'homecontroller/lost_';
$route['contact'] = 'homecontroller/contact_';
$route['faqs'] = 'homecontroller/faqs_';
$route['get_subs'] = 'homecontroller/get_subs';
$route['lost'] = 'homecontroller/lostSearch_';

//form routes
$route['found_form'] = 'homecontroller/found_form_';
$route['lost_form'] ='homecontroller/lost_form_';
$route['lost_fin'] = 'homecontroller/lost_fin';
$route['lost_search'] = 'homecontroller/lostSearchRefresh_';
$route['lost_sucess'] = 'homecontroller/lost_fin';
$route['search_found'] = 'homecontroller/search_found_';

//admin login routes
$route['login'] = 'login';
$route['loginAction'] = 'login/auth_login';

//admin dashboard routes
$route['dash'] = 'login/admin_dash_';
$route['logout'] = 'login/signout';
$route['add_admin'] = 'login/add_admin_';
$route['list_admin'] = 'login/list_admin_';
$route['monitor_admin'] = 'login/monitor_admin_';
$route['found_db'] = 'login/found_db_';
$route['lost_db'] = 'login/lost_db_';
$route['others_db'] = 'login/others_db_';
$route['reports'] = 'login/reports_';
$route['analytics'] = 'login/analytics_';
