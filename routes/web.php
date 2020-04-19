<?php
<<<<<<< HEAD
use App\Models\DailyQuote;
=======

>>>>>>> 288c2cab575d4a8f6fc86da01d9f4063a88ac67e
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
<<<<<<< HEAD
    $dailyquote = DailyQuote::inRandomOrder()->limit(1)->first();
    return view('homesearch',compact('dailyquote'));
=======
    return view('welcome');
>>>>>>> 288c2cab575d4a8f6fc86da01d9f4063a88ac67e
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD

// Show Article 
Route::get('/article/{tag}/{id}-{slug}', 'ArticleController@show');

// Show User Details
Route::get('/user/{id}', 'UsersController@view');

// Search
Route::get('/search', 'SearchController@index');

=======
Route::get('/article/{tag}/{id}-{slug}', 'ArticleController@show');
>>>>>>> 288c2cab575d4a8f6fc86da01d9f4063a88ac67e
