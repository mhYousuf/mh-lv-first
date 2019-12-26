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
// =====Admin Login System====
Route::get('admin','Admin\Auth\Login\LoginCn@index')->name('admin.login');

Route::group(['prefix' => 'admin-auth', 'as' => 'auth.', 'namespace' => 'Admin'], function(){

Route::post('login', 'Auth\Login\LoginCn@login')->name('log');
Route::get('register', 'Auth\RegisterCn@store')->name('register');
});
// =====Admin Login End======

// ======Website Start======
// home
Route::get('/','web\Website\WebCn@index');
// blog
Route::get('/blog','web\Blog\BlogController@index');
// portfolio
Route::get('/portfolio','Portfolio\PortfolioController@index');
// ======Website End=====

// ======Admin panel start=====
// deshboard
Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'as' => 'admin.', 'middleware'=>'adAuth'], function()
{
Route::get('deshboard', 'Deshboard\DeshboardCn@index')->name('deshboard');


// Route::get('/admin', 'deshboard\DeshboardController@deshboard');
// deshboard basic
Route::get('deshboard/basic', 'Admin\setup\BasicCn@index')->name('basic');
Route::get('/form/{id?}', 'Admin\setup\BasicCn@form');
Route::post('deshboard/basic/form', 'Admin\setup\BasicCn@save')->name('edit.store');
Route::get('/destroy/{id}', 'Admin\setup\BasicCn@destroy');
// deshboard basic end

// =====socail====
Route::get('deshboard/social', 'Admin\setup\SocialCn@index')->name('social');
Route::get('social/create/{id?}', 'Admin\setup\SocialCn@create');
Route::post('deshboard/social/create', 'Admin\setup\SocialCn@store')->name('social.store');
Route::get('social/destroy/{id}', 'Admin\setup\SocialCn@destroy');
// =====end social====

// =====slider====
Route::get('deshboard/slider', 'Admin\SliderCn@index')->name('slider');
Route::get('slider/create/{id?}', 'Admin\SliderCn@create');
Route::post('deshboard/slider/create', 'Admin\SliderCn@store')->name('slider.store');
Route::get('slider/destroy/{id}', 'Admin\SliderCn@destroy');

// ABOUT
Route::get('deshboard/about', 'Admin\AboutCn@index')->name('about.us');
Route::get('create/form/{id?}', 'Admin\AboutCn@form');
Route::post('deshboard/about/form', 'Admin\AboutCn@store')->name('about.store');
Route::get('destroy/{id}', 'Admin\AboutCn@destroy');
// about end

// ======Service=====
Route::get('deshboard/srervice', 'Admin\ServiceCn@index')->name('service');
Route::get('service/create/form/{id?}', 'Admin\ServiceCn@form');
Route::post('deshboard/service/form', 'Admin\ServiceCn@store')->name('service.store');
Route::get('destroy/{id}', 'Admin\ServiceCn@destroy');
// =====end service===
// =====resume====
Route::get('deshboard/resume', 'Admin\ResumeCn@index')->name('resume');
Route::get('resume/form/{id?}', 'Admin\ResumeCn@form');
Route::post('deshboard/resume/form', 'Admin\ResumeCn@store')->name('resume.store');
Route::get('destroy/{id}', 'Admin\ResumeCn@destroy');
// =====end resume=====
// =====skill=====
Route::get('deshboard/skill', 'Admin\SkillCn@index')->name('skill');
Route::get('skill/create/form/{id?}', 'Admin\SkillCn@form');
Route::post('deshboard/skill/form', 'Admin\SkillCn@store')->name('skill.store');
Route::get('skill/destroy/{id}', 'Admin\SkillCn@destroy');
// =====end skill====
// =====Blog====
Route::get('deshboard/blog', 'Admin\BlogCn@index')->name('blog');
Route::get('blog/create/form/{id?}', 'Admin\BlogCn@form');
Route::post('deshboard/blog/form', 'Admin\BlogCn@store')->name('blog.store');
Route::get('blog/destroy/{id}', 'Admin\BlogCn@destroy');
// =====end Blog=====
// =====Testimonials=====
Route::get('deshboard/testimonials', 'Admin\TestimonialsCn@index')->name('testimonials');
Route::get('testimonial/create/form/{id?}', 'Admin\TestimonialsCn@form');
Route::post('deshboard/testimonials/form', 'Admin\TestimonialsCn@store')->name('testimonial.store');
Route::get('testimonial/destroy/{id}', 'Admin\TestimonialsCn@destroy');
// ====end Testimonials====
// =====Category====
Route::get('deshboard/category', 'Admin\CategoryCn@index')->name('category');
Route::get('category/create/form/{id?}', 'Admin\CategoryCn@create');
Route::post('deshboard/category/store', 'Admin\CategoryCn@store')->name('category.store');
// Route::post('deshboard/create/form', 'Admin\CategoryCn@store')->name('category.store');
Route::get('category/destroy/{id}', 'Admin\CategoryCn@destroy');
// ====end category====

// =====category details=====
Route::get('deshboard/details', 'Admin\Ct_DetailsCn@index')->name('category.details');
Route::get('details/create/form/{id?}', 'Admin\Ct_DetailsCn@create');
Route::post('deshboard/create/form', 'Admin\Ct_DetailsCn@store')->name('details.store');
Route::get('details/destroy/{id}', 'Admin\Ct_DetailsCn@destroy');
});

// Route::post('edit/save','basic\BasicController@save')->name('edit.save');



// Route::get('/about','About\Abooutuscontroller@index')->name('aboutss');
// Route::get('/about', function () {
//     return view('web.pages.about.about');
// });


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
