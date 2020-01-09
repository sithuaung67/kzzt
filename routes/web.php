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

use App\Jnews;

Route::get('/', function () {
    $jnews=Jnews::OrderBy('id','desc')->get();
    return view('welcome')->with(['jnews'=>$jnews]);
});


Route::get('welcome', 'HomeController@index')->name('welcome');

Route::get('/post-image/{img_name}', [
    'uses'=>'Admin\JibcController@getPostImage',
    'as'=>'view.image'
]);
Route::get('/getAllPost', [
    'uses'=>'Admin\JibcController@getAllPost',
    'as'=>'allPost'
]);
Route::post('/contact-message',[
    'uses'=>'HomeController@postMessage',
    'as'=>'post.message'
]);
Auth::routes(['verify'=>true]);

Route::group(['middleware'=>'verified'],function () {


    Route::post('/newUploadPost',[
        'uses'=>'Admin\JibcController@postNewUploadPost',
        'as'=>'new.uploadPost'
    ]);
    Route::get('/post/delete',[
        'uses'=>'TravelController@getDeletePost',
        'as'=>'remove.uploadPost'
    ]);

    Route::get('/logout',[
        'uses'=>'Admin\JibcController@getLogout',
        'as'=>'logout'
    ]);
});
