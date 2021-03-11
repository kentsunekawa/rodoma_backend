<?php

use Illuminate\Http\Request;

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

Route::group(['middleware' => 'api'], function() {
    Route::post('/register', 'Auth\RegisterController@register');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('/password/reset/{token}', 'Auth\ResetPasswordController@reset');
    Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

    Route::get('/sns', 'ApiController@sns');
    Route::get('/profiles', 'ApiController@profiles');
    Route::post('/users', 'ApiController@users');
    Route::get('/users/{id}', 'ApiController@userWithProfile');
    Route::get('/posts', 'ApiController@posts');
    Route::get('/posts/{id}', 'ApiController@post');
    Route::get('/relations/{id}', 'ApiController@relations');
    Route::get('/followers/{id}', 'ApiController@followers');
    Route::get('/followings/{id}', 'ApiController@followings');

    Route::get('/categories', 'ApiController@categories');
    Route::get('/specialties', 'ApiController@specialties');
    Route::get('/categoryTree', 'ApiController@categoryTree');

    Route::get('/comments/{postId}', 'ApiController@getCommentsByPostId');
    Route::get('/icon/{id}', 'ApiController@getIconByUserId');

    Route::group(['middleware' => ['jwt.auth']], function() {
       Route::get('/home', 'ApiController@index');
    });
});
