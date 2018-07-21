<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontController@home');
// Route::get('/', 'AdminController@index');
Route::get('/testmail', 'testerController@index');
Route::post('/envia_contacto', 'testerController@envia_contacto');
Route::post('/envia_distribuidor', 'testerController@envia_distribuidor');
Route::post('/envia_distribuidorR', 'testerController@envia_distribuidorR');
Route::post('/envia_libro', 'testerController@envia_libro');
              /*-------------FRONT----------*/
//Route::get('/home', 'FrontController@home');
Route::get('/nosotros', 'FrontController@nosotros');
Route::get('/agencias', 'FrontController@productos');
Route::get('/recetas', 'FrontController@recetas');
Route::get('/puntosdedestino', 'FrontController@puntosdeventa');
Route::get('/contacto', 'FrontController@contacto');
Route::get('/noticias', 'FrontController@noticias');
Route::get('/puntosdecanje', 'FrontController@puntoscanje');
Route::get('/detalle-producto', 'FrontController@detalleproducto');
Route::get('/detalle-producto/{slug}', 'FrontController@detalleproducto');
Route::get('/detallevariedad', 'FrontController@detallevariedad');
Route::get('/detallerecetas', 'FrontController@detallerecetas');
Route::get('/detallerecetas/{slug}', 'FrontController@detallerecetas');
Route::get('/libroreclamos', 'FrontController@libroreclamos');
Route::get('/distribuidor', 'FrontController@distribuidor');
            /*-------------FIN FRONT----------*/
//redirecciones

//-------------------------------Ubigueo---------------------------------------//
Route::post('/provincia', 'FrontController@provincia');
Route::post('/distrito', 'FrontController@distrito');
Route::get('/institucional.html', 'FrontController@institucionalhtml');
Route::get('/5cina.html', 'FrontController@cinahtml');
Route::get('/navidad', 'FrontController@navidad');
Route::post('/send-mail', 'FrontController@sendmail');
/*-------------------------------ADMINISTRADOR--------------------------------*/

//-------------------------------SLIDER---------------------------------------//
Route::get('/slider','SliderController@index');
Route::post('/crear-slider','SliderController@crearslider');
Route::post('/cargar-slider','SliderController@cargar_slider');
Route::post('/editar-slider','SliderController@editarslider');

//-------------------------------BANNER---------------------------------------//
Route::get('/banner', 'BannerController@index');
Route::post('/crear-banner','BannerController@crearbanner');
Route::post('/cargar-banner','BannerController@cargarbanner');
Route::post('/editar-banner','BannerController@editarbanner');

//-----------------------------NOTICIAS---------------------------------------//
Route::get('admin/noticias', 'NoticiaController@index');
Route::get('admin/newnoticia', 'NoticiaController@newnoticia');
Route::get('admin/editnoticia/{id}', 'NoticiaController@editnoticia');
Route::post('/crear-noticia','NoticiaController@crearnoticia');
Route::post('/editar-noticia/{id}','NoticiaController@editarnoticia');

/*------------------------------PUNTOS DE VENTA-------------------------------*/
Route::post('/crear-marker', 'PuntosventaController@crearmarker');
Route::post('/editar-marker/{id}', 'PuntosventaController@editarmarker');
// Route::get('/crear-marker', 'PuntosventaController@crearmarker');

/*------------------------------guardar imagen-------------------------------*/
Route::post('/save-img','FrontController@saveimg');

/*------------------------------RECETAS-------------------------------*/
Route::get('admin/recetas', 'RecetasController@index');
Route::get('admin/editreceta/{id}', 'RecetasController@editreceta');
Route::get('admin/newreceta', 'AdminController@newreceta');
Route::post('/crear-receta','RecetasController@crearreceta');
Route::post('/editar-receta/{id}','RecetasController@update');

/*------------------------------PRODUCTOS-------------------------------*/
Route::get('admin/productos', 'productosController@index');
Route::post('admin/productos', 'productosController@store');
Route::get('admin/productos/create', 'productosController@create');
Route::get('admin/productos/{idproducto}/edit', 'productosController@edit');
Route::patch('admin/productos/{id}', 'productosController@update');
/*------------------------------VARIACIONES-------------------------------*/
Route::post('admin/variaciones/saveimgvariacion', 'variacionesController@saveimg');
Route::post('admin/variaciones/editimgvariacion', 'variacionesController@editimg');
Route::post('admin/variaciones/deleteimg', 'variacionesController@deleteimg');
Route::post('admin/variaciones/newnutriente', 'variacionesController@newnutriente');
Route::post('admin/variaciones/editnutriente', 'variacionesController@editnutriente');
Route::post('admin/variaciones/deletenutriente', 'variacionesController@deletenutriente');
Route::get('admin/variaciones/{idproducto}', 'variacionesController@index');
Route::post('admin/variaciones/{idproducto}', 'variacionesController@store');
Route::get('admin/variaciones/{idproducto}/create', 'variacionesController@create');
Route::get('admin/variaciones/{idproducto}/edit/{id}', 'variacionesController@edit');
Route::patch('admin/variaciones/{idproducto}/{id}', 'variacionesController@update');

// Route::get('/noticias', 'AdminController@noticias');
// Route::get('/newnoticia', 'AdminController@newnoticia');
// Route::get('/editnoticia', 'AdminController@editnoticia');
// Route::get('/contacto', 'AdminController@contacto');
Route::get('/newcontactoubicacion', 'AdminController@newcontactoubicacion');
Route::get('/editcontactoubicacion', 'AdminController@editcontactoubicacion');
Route::get('/puntosventa', 'AdminController@puntosventa');
Route::get('/newpuntosubicacion', 'AdminController@newpuntosubicacion');
Route::get('/editar-puntosubicacion/{id}', 'AdminController@editpuntosubicacion');

              /*-------------FIN BACK----------*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('salir',function(){
    Auth::logout();
    return redirect('/');
  });
