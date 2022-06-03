<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'HomeCtrl';



$route['mumbai-escorts'] = 'GalleryCtrl';

$route['mumbai-call-girls'] = 'CallgirlCtrl';
$route['adult-room'] = 'FemaleEscortsCtrl';
$route['escorts-location'] = 'LocationCtrl';
$route['escorts-type/(:any)/(:any)'] = 'CategorydetailsCtrl/load';
$route['private-girls'] = 'EscortserviceCtrl';
$route['escorts-videos'] = 'VideosCtrl';
$route['callgirl-phone-number'] = 'ContactCtrl';
$route['escorts-category'] = 'MassageCtrl';

// $route['female-escorts-price'] = 'PriceCtrl';
$route['bangalore-call-girls-blogs'] = 'BlogCtrl';
$route['bangalore-escort-service-faqs'] = 'FaqCtrl';
$route['red-light-area-bangalore'] = 'HomeCtrl/red_light_area';


$route['subscribe'] = 'HomeCtrl/subscribe';
$route['search'] = 'HomeCtrl/search';

// $route['call-girls'] = 'CallgirlCtrl'; 
// $route['next_escort'] =     'ProfiledetailsCtrl/getnext';
// $route['prev_escort'] =     'ProfiledetailsCtrl/getprev';

$route['contact']    = 'ContactCtrl/send_mail';

//$route['search']  = 'HomeCtrl/search_page';
//custom routing
/*$route['profile'] = 'ProfiledetailsCtrl/';*/
$route['escorts/(:any)/(:num)'] =     'ProfiledetailsCtrl/load/$1/$2';
$route['location/(:any)/(:num)'] = 'LocationdetailsCtrl/load/$1/$2';
$route['category/(:any)/(:num)'] = 'CategorydetailsCtrl/load/$1/$2';
$route['videos/(:any)/(:any)'] = 'VideodetailsCtrl/load/$1/$2';
$route['blog/(:any)/(:any)'] = 'BlogdetailsCtrl/load/$1/$2';

// load more profile
$route['ajax-load-more'] = 'HomeCtrl/ajax_load_more';
$route['ajax-load-more-mobile'] = 'HomeCtrl/ajax_load_more_mobile';
$route['ajax-load-more-tab'] = 'HomeCtrl/ajax_load_more_tab';
$route['ajax-srch-location'] = 'LocationCtrl/ajax_srch_location';
$route['ajax-ins-loc'] = 'LocationCtrl/ajax_ins_loc';


//original use
$route['admin'] = 'AdminCtrl';
$route['admin/(:any)'] = 'AdminCtrl/$1';
$route['admin/(:any)/(:any)'] = 'AdminCtrl/$1/$2';
//$route['services/(:any)'] = 'ServicesCtrl/webDevelopment/$1';

$route['404_override'] = 'HomeCtrl/error';
$route['translate_uri_dashes'] = FALSE;
