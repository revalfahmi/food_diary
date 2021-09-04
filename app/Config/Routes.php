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
# BERANDA
$routes->get('/', 'BerandaUser::index', ['filter'=>'auth_user']);
$routes->post('search', 'BerandaUser::search', ['filter'=>'auth_user']);

# PROFIL
$routes->get('profile', 'BerandaUser::search', ['filter'=>'auth_user']);
$routes->get('/post', 'PostingController::index', ['filter'=>'auth_user']);
$routes->post('/submitpost', 'Postingcontroller::submitPost', ['filter'=>'auth_user']);
$routes->get('/edit_u', 'Profiluser::edit',['filter'=>'auth_user']);
$routes->post('/submitedit', 'Profiluser::submitedit', ['filter'=>'auth_user']);
$routes->get('/delete/(:any)', 'Profiluser::hapus/$1', ['filter'=>'auth_user']);

# LOGIN USER
$routes->get('/login', 'LoginController::index');
$routes->post('/submit', 'LoginController::submit');
$routes->get('/regis', 'LoginController::registrasi');
$routes->post('/daftar', 'LoginController::daftar');
$routes->get('/logout', 'LoginController::logout');

# LOGIN ADMIN
$routes->get('/login_admin', 'Logincontrolleradmin::index');
$routes->post('/submitAdmin', 'Logincontrolleradmin::submit');
$routes->get('/logout_admin', 'Logincontrolleradmin::logout');

#Beranda
$routes->get('/beranda_u', 'Berandauser::index', ['filter'=>'auth_user']);
$routes->get('/profil_u', 'Profiluser::index', ['filter'=>'auth_user']);
$routes->get('/approve', 'Berandaadmin::index', ['filter'=>'auth_admin']);
$routes->post('/search_beranda', 'Berandaadmin::search_beranda', ['filter'=>'auth_admin']);
$routes->post('/search_jelajah', 'Berandaadmin::search_jelajah', ['filter'=>'auth_admin']);
$routes->get('/approve/(:any)', 'Berandaadmin::approve/$1', ['filter'=>'auth_admin']);
$routes->get('/delete_a/(:any)', 'Berandaadmin::delete/$1', ['filter'=>'auth_admin']);
$routes->get('/beranda_a', 'Berandaadmin::jelajah', ['filter'=>'auth_admin']);
$routes->get('/detail_a', 'Detailadmin::index');

#Profil Admin
$routes->get('/profil_a', 'Profiladmin::index');

#DETAIL USER
$routes->get('/detail_u/(:any)', 'Berandauser::detail/$1', ['filter'=>'auth_user']);
$routes->get('/like/(:any)', 'Berandauser::like/$1', ['filter'=>'auth_user']);
$routes->get('/dislike/(:any)/(:any)', 'Berandauser::dislike/$1/$2', ['filter'=>'auth_user']);



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
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
