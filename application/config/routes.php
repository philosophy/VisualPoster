<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home/home";
$route['pricing'] = 'pricing';
$route['pricing/price_grid'] = 'pricing/price_grid';

$route['posters'] = 'posters';
$route['about'] = 'about';
$route['work'] = 'works';
$route['404_override'] = '';
$route['users'] = 'users';

$route['contactus'] = 'contactus';
$route['contactus/send_comment'] = 'contactus/send_comment';

$route['admin'] = 'admin';
$route['admin/table/:num'] = 'admin/show';
$route['admin/table/:num/add'] = 'admin/show';
$route['admin/table/:num/edit/:num'] = 'admin/show';

$route['admin/posters/add'] = 'adminposter/add';
$route['admin/posters/edit/:num'] =   'adminposter/edit/$1';
$route['admin/posters/delete/:num'] = 'adminposter/delete/$1';

$route['admin/poster_range/add'] = 'adminposterrange/add';
$route['admin/poster_range/edit/:num'] = 'adminposterrange/edit/$1';
$route['admin/poster_range/delete/:num'] = 'adminposterrange/delete/$1';


/*
 * top menu links
 */
$route['rush_deliveries'] = 'rushdeliveries';
$route['extra_effects'] = 'extraeffects';
$route['payment_terms'] = 'paymentterms';
$route['faq'] = 'faq';

/*
 * links from FAQ
 */
$route['poster_sizes'] = 'postersizes';
$route['poster_timing'] = 'postertiming';
$route['music_poster_history'] = 'musicposterhistory';
$route['fluro_background'] = 'flurobackground';

/* End of file routes.php */
/* Location: ./application/config/routes.php */