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
// creo las rutas que vamos a usar para el proyecto, por el momento estan vacias
// ruta del index
// Route::get('/index', function () {
//     return view('');

Route::get('/index',function (){
  return view ('front.index');
});


Route::get('/somos',function (){
  return view ('front.somos');
});

// ruta productos
Route::get('/productos', function () {
    return view('front.productos');
 });
// // ruta diseños
// Route::get('/personalizados', function () {
//     return view('');
// });
// // ruta accesorios
// Route::get('/accesorios', function () {
//     return view('');
// });
// // ruta FAQ
Route::get('/faq', function () {
    return view('front.faq');
});
// // ruta Iniciar sesion
// Route::get('/ingresar', function () {
//     return view('');
// });
// // ruta registro
Route::get('/registro', function () {
    return view('auth.registro');
});
// // ruta perfil
// Route::get('/perfil', function () {
//     return view('');
// });
// // ruta carrito
// Route::get('/carrito', function () {
//     return view('');
// });
