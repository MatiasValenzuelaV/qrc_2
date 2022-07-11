<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'LoginController';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['inicio'] = 'IndexController';

$route['ot'] = 'OTController';
$route['otEdit/(:any)'] = 'OTController/otEdit/$1';
$route['listado_ot'] = 'OTController/listado_ot';
$route['nueva_ot/(:num)/(:num)'] = 'OTController/nueva_ot/$1/$2';
$route['perfiles'] = 'PerfilController';
$route['personal'] = 'PersonalController';
$route['cargos'] = 'CargoController';
// $route['scanner'] = 'Scanner';
$route['scanner'] = 'Scanner/qr_scanner';
$route['qrscanner'] = 'Scanner/qr_scanner';

$route['usuarios'] = 'UsuarioController';

$route['checklist'] = 'CheckListController';
$route['listado_checklist'] = 'CheckListController/fn_lista_checklist';
$route['guarda_checklist'] = 'CheckListController/fn_guarda_checklist';
$route['activa_checklist'] = 'CheckListController/fn_activa_checklist';
$route['elimina_checklist'] = 'CheckListController/fn_elimina_checklist';

$route['insumos'] = 'InsumosController';
$route['listado_insumos'] = 'InsumosController/fn_lista_insumos';
$route['guarda_insumos'] = 'InsumosController/fn_guarda_insumos';
$route['activa_insumos'] = 'InsumosController/fn_activa_insumos';
$route['elimina_insumos'] = 'InsumosController/fn_elimina_insumos';

$route['velocidad_aire'] = 'ReporteController';
$route['equipos_baja'] = 'ReporteController/reporte_equipos_baja';

$route['equipos'] = 'EquiposController';
$route['listado_equipos'] = 'EquiposController/fn_lista_equipos';
$route['listado_equipos_checklist'] = 'EquiposController/fn_lista_equipos_checklist';
$route['listado_equipos_insumos'] = 'EquiposController/fn_lista_equipos_insumos';
$route['guarda_equipos'] = 'EquiposController/fn_guarda_equipos';
$route['activa_equipos'] = 'EquiposController/fn_activa_equipos';
$route['activa_equipos_checklist'] = 'EquiposController/fn_activa_equipos_checklist';
$route['activa_equipos_insumos'] = 'EquiposController/fn_activa_equipos_insumos';
$route['elimina_equipos'] = 'EquiposController/fn_elimina_equipos';


$route['mantenciones'] = 'MantencionesController';
$route['listado_mantenciones'] = 'MantencionesController/listado_mantenciones';

$route["etiqueta/(:any)"] = 'EtiquetaController/etiqueta/$1';
$route["otpdf/(:any)"] = 'OTController/plantilla_ot/$1';
$route["otpdfU/(:any)"] = 'OTController/plantilla_otU/$1';


//Plantillas OT
$route["plantilla_ot/(:any)/(:any)"] = 'OTController/plantillaOt/$1/$2';
