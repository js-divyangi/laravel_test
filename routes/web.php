<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index');


// Demo routes
Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');
Route::get('/login1', 'LoginController@login1');
Route::get('/login2', 'LoginController@login2');
Route::get('/login3', 'LoginController@login3');
Route::get('/login4', 'LoginController@login4');
Route::get('/login5', 'LoginController@login5');
Route::get('/login6', 'LoginController@login6');
Route::get('/test', 'LoginController@test');



Route::get('/register1', 'RegisterController@register1');
Route::get('/register2', 'RegisterController@register2');
Route::get('/register3', 'RegisterController@register3');
Route::get('/register4', 'RegisterController@register4');
Route::get('/register5', 'RegisterController@register5');
Route::get('/register6', 'RegisterController@register6');

Route::get('/error1', 'ErrorController@error1');
Route::get('/error2', 'ErrorController@error2');
Route::get('/error3', 'ErrorController@error3');
Route::get('/error4', 'ErrorController@error4');
Route::get('/error5', 'ErrorController@error5');
Route::get('/error6', 'ErrorController@error6');


Route::get('/forgot1', 'ForgotController@forgot1');
Route::get('/forgot2', 'ForgotController@forgot2');
Route::get('/forgot3', 'ForgotController@forgot3');
Route::get('/forgot4', 'ForgotController@forgot4');
Route::get('/forgot5', 'ForgotController@forgot5');
Route::get('/forgot6', 'ForgotController@forgot6');


