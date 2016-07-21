<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin'], function () {
    Route::get('home', function ()    {
      return View::make('admin.home');
    })->name('dashboard');

    Route::get('berita', function ()    {
      return View::make('admin.berita');
    })->name('berita');

    Route::get('pengumuman', function ()    {
      return View::make('admin.pengumuman');
    })->name('pengumuman');

    Route::get('tos', function ()    {
      return View::make('admin.tos');
    })->name('tos');

    Route::get('kantor', function ()    {
      return View::make('admin.kantor');
    })->name('kantor');

    Route::get('faq', function ()    {
      return View::make('admin.faq');
    })->name('faq');


    Route::get('pengumuman/post', function ()    {
      return View::make('admin.postpengumuman');
    })->name('postpengumuman');

    Route::get('berita/post', function ()    {
      return View::make('admin.postberita');
    })->name('beritapost');


    Route::get('login', function ()    {
      return View::make('admin.login');
    });
});
