<?php

/*
|--------------------------------------------------------------------------
| IF Baiano - SisCap
| Instituto Federal de Educação, Ciência e Tecnologia Baiano
|--------------------------------------------------------------------------
|
|
*/
// Ambiente de rotas para access - controller - view
Route::get('/', function () {
    return view('index'); // início
});
// Gerência de funcionários / servidores
Route::get('/docservidores','EmployeeController@AccessDoc');
Route::get('/docinativos','EmployeeController@InactiveDoc');
Route::get('/taeservidores','EmployeeController@AccessTae');
Route::get('/taeinativos','EmployeeController@InactiveTae');
Route::get('/registro','EmployeeController@ServerLog');
