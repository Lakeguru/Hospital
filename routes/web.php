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
//Route::middleware(['guest'])->group(function () {
    Route::get('/','ViewsController@index')->name('index');
    Route::get('contact','ViewsController@contact')->name('contact');
    Route::post('contact','ViewsController@getcontact')->name('getcontact');
    Route::post('email','ViewsController@email')->name('email');
    Route::get('service','ViewsController@service')->name('service');
    Route::get('doctor','ViewsController@doctors')->name('doctor');
    Route::get('department','ViewsController@department')->name('department');
    Route::get('about','ViewsController@about')->name('about');
    Route::get('faqs','ViewsController@faqs')->name('faqs');
    Route::get('galary','ViewsController@galary')->name('galary');
    Route::get('pricelist','ViewsController@pricelist')->name('pricelist');
    Route::get('blog','BlogController@blog')->name('blog');
    Route::get('blogdetails','BlogController@blogdetails')->name('blogdetails');
    Route::get('post','PostController@createpost');
    Route::post('post','PostController@postcreate');
//Route::post('postdetails','BlogController@postdetails')->name('postdetails')
    Route::post('comment','BlogController@comment')->name('comment');
    Route::get('dashboard','Admincontroller@dashboard')->name('dashbaord');
    Route::get('drugs','DrugsController@index')->name('drugs');
    Route::get('add_doctor','DoctorController@add')->name('add_doctor');
    Route::post('add_doctor','DoctorController@add_doctor')->name('postadd_doctor');

//});

//Route::group(['prefix' => '/',  'middleware' => 'auth'], function()
//{
//
//});


Route::get('login','Admincontroller@login')->name('login');
Route::post('login','SessionController@postlogin')->name('postlogin');
Route::get('signup','Admincontroller@signup')->name('signup');
Route::post('/signup','RegistationController@postregistar')->name('postregistar');


