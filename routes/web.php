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

Route::get('/', function () {
    #return view('welcome');
    return view('admin.panel');
});
Route::get('/tickets', function () {
    #return view('welcome');
    return view('admin.ticketssoporte');
});
Route::get('/servicio', function () {
    #return view('welcome');
    return view('admin.solicitudesdeservicio');
});
Route::get('/tareas', function () {
    #return view('welcome');
    return view('admin.tareas');
});
Route::get('/proyectos', function () {
    #return view('welcome');
    return view('admin.proyectos');
});
Route::get('/servicios', function () {
    #return view('welcome');
    return view('admin.servicios');
});
Route::get('/productos', function () {
    #return view('welcome');
    return view('admin.productos');
});
Route::get('/soporte', function () {
    #return view('welcome');
    return view('admin.soporte');
});



