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
    return view('welcome');
});

Auth::routes();

/** The below controller works for the backend for English Users**/
    Route::get('/dashboard', 'AdminController@index');
    // Dashboard
    Route::resource('page', 'PageController');
    // Client Setting
    Route::resource('client', 'ClientController');
    // Blog Setting
    Route::resource('blog', 'BlogController');
    // Services has been used as the events section
	Route::resource('service', 'ServiceController');
	// Slide Routes
    Route::resource('slide', 'SlideController');
    // Team Routes
    Route::resource('team', 'TeamController');
    // Project Routes
    Route::resource('project', 'ProjectController');
    // Media Routes
    Route::resource('media', 'MediaController');
    // Setting Routes
    Route::resource('setting', 'SettingController');
    // Artist Routes
    Route::resource('artist', 'ArtistController');
    // Menu Routes
    Route::resource('menu', 'MenuController');
    // Volumterism Form Checking
    Route::resource('volunterism', 'VolunterismForm');
/** It Ends Here **/

//Pages Section Together
Route::get('/sponsor', 'HomeController@sponsor')->name('sponsor');
Route::get('/patron', 'HomeController@patron')->name('patron');
Route::get('/policy', 'HomeController@policy')->name('policy');
Route::get('/festival', 'HomeController@festival')->name('festival');
Route::get('/consumer', 'HomeController@consumer')->name('consumer');

// Sponsorship Section
Route::get('/sponsorship', 'HomeController@sponsorship')->name('sponsorship');

// Sponsorship Section
Route::get('/cameroon', 'HomeController@cameroon')->name('cameroon');

// About Section
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/aboutcliq', 'HomeController@aboutcliq')->name('aboutcliq');

Route::get('/mission', 'HomeController@mission')->name('mission');

// Problem Statement Section 
Route::get('/problem', 'HomeController@problem')->name('problem');

// Events Section 
Route::get('/events', 'HomeController@events')->name('events');
Route::get('/events/{slug}', ['as' => 'cliq.single-event', 'uses' => 'HomeController@getSingleEvent'])->where('slug', '[\w\d\-\_]+');

//Contact Section
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@postContact');

//  Blog Section
Route::get('/blogs', 'HomeController@blogs')->name('blogs');
Route::get('/blogs/{slug}', ['as' => 'cliq.single-blog', 'uses' => 'HomeController@getSingleBlog'])->where('slug', '[\w\d\-\_]+');

//  Project Section
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/projects/{slug}', ['as' => 'cliq.single-project', 'uses' => 'HomeController@getSingleProject'])->where('slug', '[\w\d\-\_]+');


// This Is the Artist Section
Route::get('/artists', 'HomeController@artists')->name('artists');

// The Below Routes Works for The French Content Section

Route::get('.fr', 'HomeController@frenchindex');
Route::get('sponsorfr', 'HomeController@frenchsponsor');
Route::get('/aboutcliqfr', 'HomeController@frenchaboutcliq')->name('aboutcliqfr');
Route::get('/patronfr', 'HomeController@frenchpatron')->name('patronfr');
Route::get('/policyfr', 'HomeController@frenchpolicy')->name('policyfr');
Route::get('/festivalfr', 'HomeController@frenchfestival')->name('festivalfr');
Route::get('/consumerfr', 'HomeController@frenchconsumer')->name('consumerfr');

Route::get('/aboutfr', 'HomeController@frenchabout')->name('aboutfr');
Route::get('/aboutcliqfr', 'HomeController@frenchaboutcliq')->name('aboutcliqfr');

Route::get('/missionfr', 'HomeController@frenchmission')->name('missionfr');

// Problem Statement Section 
Route::get('/problemfr', 'HomeController@frenchproblem')->name('problemfr');

// Events Section 
Route::get('/eventsfr', 'HomeController@frenchevents')->name('eventsfr');
Route::get('/eventsfr/{slug_fr}', ['as' => 'cliqfrench.single-event', 'uses' => 'HomeController@getSingleEventFrench'])->where('slug_fr', '[\w\d\-\_]+');

//  Blog Section
Route::get('/blogsfr', 'HomeController@frenchblogs')->name('blogsfr');
Route::get('/blogsfr/{slug_fr}', ['as' => 'cliqfrench.single-blog', 'uses' => 'HomeController@getSingleBlogFrench'])->where('slug_fr', '[\w\d\-\_]+');

//  Project Section
Route::get('/projectsfr', 'HomeController@frenchprojects')->name('projectsfr');
Route::get('/projectsfr/{slug_fr}', ['as' => 'cliqfrench.single-project', 'uses' => 'HomeController@getSingleProjectFrench'])->where('slug_fr', '[\w\d\-\_]+');

// This Is the Artist Section
Route::get('/artistsfr', 'HomeController@frenchartists')->name('artistsfr');
