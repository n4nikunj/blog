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

route::get('/','WebController@index');
route::get('/viewblog/{blogname}/{id}','WebController@veiwBlog');
route::get('/panel','BackEndController@login');
route::post('/panel/checkLogin','BackEndController@checkLogin');
route::get('/panel/dashboard','BackEndController@dashBoard');
route::get('/panel/users/list','BackEndController@userList');
route::get('/panel/blog/list','BackEndController@blogList');
route::get('/panel/blog/add','BackEndController@blogAdd');
route::get('/panel/blog/edit/{id}','BackEndController@blogEdit');
route::get('/panel/blog/delete/{id}','BackEndController@blogEdit');
route::post('/panel/blog/submit','BackEndController@blogSubmit');
route::post('/panel/blog/update','BackEndController@blogUpdate');
route::get('/panel/signout','BackEndController@signout');
route::get('/panel/error/404','BackEndController@error');