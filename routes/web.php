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

Route::get('/', function () {

    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'web', 'middleware' => 'auth'], function () {

	Route::prefix('evento')->group(function () {

        Route::get('/home', 'HomeController@index')->name('home');

        // subir fotos
        Route::post('/galeria/uploadPhoto','Image\ImageController@uploadPhoto')->name('galeria.upload');
        Route::post('/galeria/drophoto','Image\ImageController@drophoto')->name('galeria.drop');

        // comentarios
        Route::post('/galeria/queryComment','Image\ImageController@commentQuery')->name('galeria.queryComment');
        Route::post('/galeria/commentStore','Image\ImageController@commentStore')->name('galeria.commentStore');

        // like

        Route::post('/galeria/likeStore', 'Image\ImageController@likeStore')->name('galeria.likeStore');;

        Route::post('/galeria/cardList', 'Image\ImageController@cardList')->name('galeria.cardList');


        // Galeria
        Route::get('/galeria/{id?}/event', 'Image\ImageController@eventID')->name('galeria.eventID');

        Route::resource('/galeria', 'Image\ImageController');

        // Video
        Route::resource('/video', 'Video\VideoController');


        // table
        Route::get('/admin/ajax', 'Admin\AdminController@getTable')->name('admin.getTable');

        // ADmin
        Route::resource('/admin', 'Admin\AdminController');






    });

});



