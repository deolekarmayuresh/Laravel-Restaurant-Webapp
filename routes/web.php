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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');

Route::get('/pizzas/create', 'Pizzacontroller@create')->name('pizzas.create');

Route::post('/pizzas', 'PizzaController@store')->name('pizzas.store');

Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');

Route::delete('/pizzas/{id}', 'PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

Route::get('/kebabs', 'KebabController@index')->name('kebabs.index')->middleware('auth');

Route::get('/kebabs/create', 'KebabController@create')->name('kebabs.create');

Route::post('/kebabs', 'KebabController@store')->name('kebabs.store');

Route::get('/kebabs/{id}', 'KebabController@show')->name('kebabs.show')->middleware('auth');

Route::delete('/kebabs/{id}', 'KebabController@destroy')->name('kebabs.destroy')->middleware('auth');



// Route::get('/kebabs', function () {
//     return view('Kebabs.index');
// });


Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
