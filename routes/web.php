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
Route::get('/user', function () {
    return view('user');
});
Route::get('/user/new', ['uses'=>'NewController@new']);
Route::get('/user/master', ['uses'=>'NewController@master']);
Route::get('/user/create',['uses'=>'UserController@create']);
Route::post('/user/save',['uses'=>'UserController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function () {
Route::resource('companies', 'CompaniesController');
Route::get('projects/create/(company_id?)', 'ProjectsController@create');
Route::post('/projects/adduser', 'ProjectsController@adduser')->name('projects.adduser');
Route::resource('projects', 'ProjectsController');
Route::resource('roles', 'RolesController');
Route::resource('tasks', 'TasksController');
Route::resource('users', 'UsersController');
Route::resource('comments', 'CommentsController');

});

