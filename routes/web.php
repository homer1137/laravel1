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
    return 'hello mothefuckers!';
});

Route::get('/hello', 'MyPlaceController@index');

Route::get('/someRoute', function(){
    return 'this is some Route';
});

Route::get('/ini', 'MyPlaceController@hello2');

Route::get('/vasya', 'SomePageController@vasya');

Route::get('/lastRoute', 'LastController@last');


Route::get('/hello', 'Hello@hello');
Route::get('/cats', 'CatController@index');
Route::get('/dogs', 'DogController@allDogs');

Route::get('/dogs_with_4legs', 'DogController@dogWith4Legs');
Route::get('/dogs/create', 'DogController@create');
Route::get('/dogs/update', 'DogController@update');
Route::get('/dogs/delete', 'DogController@delete');
Route::get('/dogs/delete', 'DogController@delete');
Route::get('dogs/first_or_create', 'DogController@firstOrCreate');
Route::get('dogs/update_or_create', 'DogController@updateOrCreate');

Route::get('/showDogs', 'DogController@showDogs')->name('dog.showDogs');
Route::get('/main', 'MainController@index')->name('main.index');
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/contacts', 'ContactController@index')->name('contact.index');
