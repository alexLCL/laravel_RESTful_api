<?php

use Illuminate\Http\Request;
use App\Article;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//登录
Route::post('login','Auth\LoginController@login');

//退出
Route::post('logout','Auth\LoginController@logout');

//注册
Route::post('register','Auth\RegisterController@register');

Route::group(['middleware'=>'auth:api'],function (){
    //获取文章列表
    Route::get('articles','ArticleController@index');

//根据id查看文章详情
    Route::get('articles/{article}','ArticleController@show');

//创建文章
    Route::post('articles','ArticleController@store');

//更新文章
    Route::put('articles/{article}','ArticleController@update');

//删除文章
    Route::delete('articles/{article}','ArticleController@delete');
});

Route::post('auth/register','AuthController@register');