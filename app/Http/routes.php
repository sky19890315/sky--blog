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
/*访问首页*/
get('/' ,function (){
    return redirect('/blog');
});
//    访问首页
get('blog' , 'BlogController@index');
get('blog/{title}' ,'BlogController@show');

//后台管理
get('admin' ,function (){
    return redirect('/admin/article');
});
//认证过滤
$router->group(['namespace' => 'Admin' , 'middleware' => 'auth' ] ,function (){
    resource('admin/article' , 'ArticleController');
});
//登录退出
get('/auth/login' ,'Auth\AuthController@getLogin');
post('/auth/login' ,'Auth\AuthController@postLogin');
get('/auth/logout' ,'Auth\AuthController@getLogout');