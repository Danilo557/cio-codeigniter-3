<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*CUSTOM ROUTES */

$route['/']['GET'] = 'welcome/index'; 
$route['caracteristicas']['GET'] = 'welcome/caracteristicas'; 

$route['que-es-cionline']['GET'] = 'welcome/que_es_cionline';
$route['integracion-a-portal-xpd']['GET'] = 'welcome/integracion_a_portal_xpd'; 
$route['soporte']['GET'] = 'welcome/soporte'; 

$route['plan-anual']['GET'] = 'welcome/plan_anual'; 
$route['plan-mensual']['GET'] = 'welcome/plan_mensual'; 
$route['probar-gratis']['GET'] = 'welcome/probar_gratis'; 

$route['clear-cache']['GET'] = 'welcome/clear_cache'; 
$route['send-mail']['GET'] = 'welcome/sendMail'; 


$route['service/auth_authorize']['GET'] = 'service/auth_authorize'; 
$route['service/auth_accesstoken']['GET'] = 'service/auth_accesstoken';
$route['service/valid_life_token']['GET'] = 'service/valid_life_token'; 

$route['service/recapcha']['POST'] = 'service/recapcha'; 
$route['service/contacto_rests']['POST'] = 'service/contacto_rests'; 
$route['service/contacto_enviar_mail']['POST'] = 'service/contacto_enviar_mail'; 
$route['service/formulario_contacto']['POST'] = 'service/formulario_contacto'; 

$route['service/enviar_mail_compra']['POST'] = 'service/enviar_mail_compra'; 
$route['service/formulario_plan']['POST'] = 'service/formulario_plan'; 

$route['service/prospecto_create']['POST'] = 'service/prospecto_create'; 

$route['service/formulario_prueba_gratis']['POST'] = 'service/formulario_prueba_gratis'; 

$route['service/prospecto_create']['POST'] = 'service/prospecto_create'; 

 
