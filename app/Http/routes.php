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