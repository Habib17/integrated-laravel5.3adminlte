<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/', 'dashboardController@index');
Route::get('/ui', 'dashboardController@ui');
Route::get('/widget', 'dashboardController@widget');
Route::get('uielement/general', 'dashboardController@general');
Route::get('uielement/icon', 'dashboardController@icon');
Route::get('uielement/button', 'dashboardController@button');
Route::get('uielement/slider', 'dashboardController@slider');
Route::get('uielement/timeline', 'dashboardController@timeline');
Route::get('uielement/modal', 'dashboardController@modal');
Route::get('form/gform', 'dashboardController@gform');
Route::get('form/editor', 'dashboardController@editor');
Route::get('table/simple', 'dashboardController@simplet');
Route::get('table/data', 'dashboardController@datat');
Route::get('calendar', 'dashboardController@calendar');
Route::get('mailbox/inbox', 'dashboardController@mailbox');
Route::get('mailbox/compose', 'dashboardController@compose');
Route::get('mailbox/read', 'dashboardController@read');
Route::get('example/invoice', 'dashboardController@invoice');
Route::get('example/login', 'dashboardController@login');
Route::get('example/profile', 'dashboardController@profile');
Route::get('example/register', 'dashboardController@register');
Route::get('example/lock', 'dashboardController@lock');
Route::get('example/404', 'dashboardController@error');
Route::get('example/500', 'dashboardController@errora');
Route::get('example/blank', 'dashboardController@blank');
Route::get('example/pace', 'dashboardController@pace');
Route::get('chart/chartjs', 'dashboardController@chartjs');
Route::get('chart/morris', 'dashboardController@morris');
Route::get('chart/flot', 'dashboardController@flot');

