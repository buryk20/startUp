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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', function () {
		return View::make('welcome');
	});

	Route::get('chatbots', function () {
		return View::make('chatbots');
	});

	Route::get('blog', function () {
		return View::make('blog');
	});

	Route::get('blog/SEO', function () {
		return View::make('SEO');
	});

	Route::get('blog/SEO/chto-takoye-seo', function () {
		return View::make('chto-takoye-seo');
	});

	Route::get('privacy-policy', function () {
		return View::make('privacy-policy');
	});

	Route::get('blog/SEO/chto-takoye-SEO-prodvizheniye-sayta', function () {
		return View::make('chto-takoye-SEO-prodvizheniye-sayta');
	});
});
