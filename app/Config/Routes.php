<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->add('/trangchu', 'gym/trangchuController::show_trangchu');
$routes->add('/nhanvien', 'gym/nhanvienController::nhanvien');
$routes->add('/saveNV', 'gym/nhanvienController::save_nhanvien');
$routes->add('/EditNV', 'gym/editnvController::EditNhanVien');
$routes->add('/lichtap', 'gym/lichtapController::lichtap');
$routes->add('/EditLT', 'gym/editltController::EditLT');
$routes->add('/khachhang', 'gym/khachhangController::show_khachhang');
$routes->add('/EditKH', 'gym/editkhController::EditKH');
$routes->add('/dichvu', 'gym/dichvuController::show_dichvu');
$routes->add('/EditDV', 'gym/editdvController::EditDichVu');
$routes->add('/tintuc', 'gym/tintucController::show_TinTuc');
$routes->add('/EditTT', 'gym/edittintucController::EditTinTuc');
$routes->add('/goitap', 'gym/goitapController::show_GoiTap');
$routes->add('/EditGT', 'gym/editgoitapController::EditGoiTap');
$routes->add('/Login', 'gym/loginController::show_login');



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
