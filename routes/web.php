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

// Route::get('/', function () {
//     return view('web.index');
// });


// ======Website Start======
// home
Route::get('/','web\Website\WebCn@index');
Route::post('/contact', 'web\Website\WebCn@sentmail')->name('sent.mail');
// blog
// Route::get('blog/details','web\Blog\BlogController@index')->name('single.blog');
Route::get('blog/details','web\Website\WebCn@blogdetails')->name('single.blog');
// portfolio
Route::get('single-portfolio','web\Website\WebCn@portfolio')->name('single.portfolio');
// ======Website End=====

// =====Admin Login System====
Route::get('admin','Admin\Auth\Login\LoginCn@index')->name('admin.login');

Route::group(['prefix' => 'admin-auth', 'as' => 'auth.', 'namespace' => 'Admin'], function(){

Route::post('login', 'Auth\Login\LoginCn@login')->name('log');
Route::get('register', 'Auth\RegisterCn@store')->name('register');
Route::get('change/password', 'Auth\ChangeCn@index')->name('change.index');
Route::post('update', 'Auth\ChangeCn@passwordupdate')->name('password.update');
Route::post('logout', 'Auth\LogoutCn@logout')->name('logout');
});
// =====Admin Login End======


// ======Admin panel start=====
// deshboard
Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'as' => 'admin.', 'middleware'=>'adAuth'], function()
{
	Route::get('deshboard', 'Deshboard\DeshboardCn@index')->name('deshboard');


	// Route::get('/admin', 'deshboard\DeshboardController@deshboard');
	// deshboard basic
	Route::prefix('basic')->group(function() {
	Route::get('/', 'setup\BasicCn@index')->name('basic');
	Route::get('form/{id?}', 'setup\BasicCn@form');
	Route::post('form', 'setup\BasicCn@save')->name('edit.store');
	Route::get('destroy/{id}', 'setup\BasicCn@destroy');
	});
	// deshboard basic end

	// =====socail====
	Route::prefix('social')->group(function(){
	Route::get('/', 'setup\SocialCn@index')->name('social');
	Route::get('create/{id?}', 'setup\SocialCn@create');
	Route::post('create', 'setup\SocialCn@store')->name('social.store');
	Route::get('destroy/{id}', 'setup\SocialCn@destroy');
	});
	// =====end social====

	// =====slider====
	Route::prefix('slider')->group(function(){
	Route::get('/', 'SliderCn@index')->name('slider');
	Route::get('create/{id?}', 'SliderCn@create');
	Route::post('create', 'SliderCn@store')->name('slider.store');
	Route::get('destroy/{id}', 'SliderCn@destroy');
	});

	// ABOUT
	Route::prefix('about')->group(function(){
	Route::get('/', 'AboutCn@index')->name('about.us');
	Route::get('form/{id?}', 'AboutCn@form');
	Route::post('form', 'AboutCn@store')->name('about.store');
	Route::get('destroy/{id}', 'AboutCn@destroy');
	});
	// about end

	// ======Service=====
	Route::prefix('service')->group(function(){
	Route::get('/', 'ServiceCn@index')->name('service');
	Route::get('form/{id?}', 'ServiceCn@form');
	Route::post('form', 'ServiceCn@store')->name('service.store');
	Route::get('destroy/{id}', 'ServiceCn@destroy');
	});
	// =====end service===
	// =====resume====
	route::prefix('resume')->group(function(){
	Route::get('/', 'ResumeCn@index')->name('resume');
	Route::get('form/{id?}', 'ResumeCn@form');
	Route::post('form', 'ResumeCn@store')->name('resume.store');
	Route::get('destroy/{id}', 'ResumeCn@destroy');
	});
	// =====end resume=====
	// =====skill=====
	Route::prefix('skill')->group(function(){
	Route::get('/', 'SkillCn@index')->name('skill');
	Route::get('form/{id?}', 'SkillCn@form');
	Route::post('form', 'SkillCn@store')->name('skill.store');
	Route::get('destroy/{id}', 'SkillCn@destroy');
	});
	// =====end skill====

	// =====Blog====
	Route::prefix('blog')->group(function(){
	Route::get('/', 'BlogCn@index')->name('blog');
	Route::get('form/{id?}', 'BlogCn@form');
	Route::post('form', 'BlogCn@store')->name('blog.store');
	Route::get('destroy/{id}', 'BlogCn@destroy');
	});
	// =====end Blog=====
	// =====Testimonials=====
	Route::prefix('testimonial')->group(function(){
	Route::get('/', 'TestimonialsCn@index')->name('testimonials');
	Route::get('form/{id?}', 'TestimonialsCn@form');
	Route::post('form', 'TestimonialsCn@store')->name('testimonial.store');
	Route::get('destroy/{id}', 'TestimonialsCn@destroy');
	});
	// ====end Testimonials====

	// =====Category====
	Route::prefix('category')->group(function(){
	Route::get('/', 'CategoryCn@index')->name('category');
	Route::get('form/{id?}', 'CategoryCn@create');
	Route::post('form', 'CategoryCn@store')->name('category.store');
	// Route::post('deshboard/create/form', 'CategoryCn@store')->name('category.store');
	Route::get('destroy/{id}', 'CategoryCn@destroy');
	});
	// ====end category====

	// =====category details=====
	Route::prefix('details')->group(function(){
	Route::get('/', 'Ct_DetailsCn@index')->name('category.details');
	Route::get('form/{id?}', 'Ct_DetailsCn@create');
	Route::post('form', 'Ct_DetailsCn@store')->name('details.store');
	Route::get('destroy/{id}', 'Ct_DetailsCn@destroy');
	});
});

// Route::post('edit/save','basic\BasicController@save')->name('edit.save');



// Route::get('/about','About\Abooutuscontroller@index')->name('aboutss');
// Route::get('/about', function () {
//     return view('web.pages.about.about');
// });


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
