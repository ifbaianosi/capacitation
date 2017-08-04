<?php
/*
|--------------------------------------------------------------------------
| IF Baiano - SisCap
| Instituto Federal de Educação, Ciência e Tecnologia Baiano
|--------------------------------------------------------------------------
|
*/
// Ambiente de rotas para access - controller - view
Route::get('/', function () {
    return view('index'); // início
});
// Gerência de funcionários / servidores
// listagens
Route::get('/docservidores','EmployeeController@AccessDoc'); // lista docentes ativos
Route::get('/docinativos','EmployeeController@InactiveDoc'); // lista docentes afastados
Route::get('/taeservidores','EmployeeController@AccessTae'); // lista técnicos administrativos ativos
Route::get('/taeinativos','EmployeeController@InactiveTae'); // lista técnicos administrativos afastados
Route::get('/registro','EmployeeController@ServerLog'); // lista de logs
// cadastros
Route::get('/envregserv','EmployeeController@EnvironmentRegServ'); // ambiente de acesso inicial para cadastro de servidores
Route::get('/runregserv','EmployeeController@RunRegServ'); // ambiente para executar os cadastros dos servidores
