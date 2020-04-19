<?php
use App\Models\DailyQuote;
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
    $dailyquote = DailyQuote::inRandomOrder()->limit(1)->first();
    return view('homesearch',compact('dailyquote'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Show Article 
Route::get('/article/{tag}/{id}-{slug}', 'ArticleController@show');

// Show User Details
Route::get('/user/{id}', 'UsersController@view');

// Search
Route::get('/search', 'SearchController@index');

