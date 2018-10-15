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

Route::prefix('blog')->group(function() {
    Route::get('/', 'BlogController@index');
    Route::get('/{id}', 'BlogController@show');

    Route::group([
        'middleware' => ['web', 'auth'], 
        'prefix' => 'admin', 
        'namespace' => 'Admin'],
        function()
    {
        Route::get('/', 'PostsController@admin')->name('dashboard');
        Route::get('/post', 'PostsController@index')->name('allPosts');
        Route::get('/create', 'PostsController@create')->name('postCreate');
        Route::post('/create', 'PostsController@store')->name('postStore');
        // rotas do blog
    });
});
