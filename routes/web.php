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
    return redirect('shownews');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/member', 'membersController@getmember');
// Route::get('/addgen', function () {
//     return view('gen_add');
// });
// Route::post('/add_gen', 'membersController@postGen');
// Route::get('/showgen', 'membersController@showgen');
////////////////////////////////////////////////////////////////////////
// Route::get('/add_product', function () {
//     return view('form_add');
// });
Route::get('/livescore', function () {
    return view('livescore');
});
Route::get('/add_news', 'ProductsController@getform');
Route::post('/add', 'ProductsController@postform');
Route::get('/shownews', 'ProductsController@shownews');
Route::get('/prolist', 'ProductsController@prolist');
Route::get('/edit{id}', 'ProductsController@getedit');
Route::post('/update', 'ProductsController@updateform');
Route::get('/delete{id}', 'ProductsController@delete_news');