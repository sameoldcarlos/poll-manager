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

Route::get('/', 'HomePageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/poll/new', 'PollController@create')->name('new-poll')->middleware('auth');

Route::post('/poll/save', 'PollController@store')->name('save-poll');

Route::get('/poll', 'PollController@index')->name('index-poll')->middleware('auth');

Route::get('/public/vote/{id}', 'PollController@vote')->name('vote-poll');

Route::put('public/vote/{id}/confirm', 'PollController@confirmVote')->name('confirm-vote');