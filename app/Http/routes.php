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

// Маршруты аутентификации...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Маршруты регистрации...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


$router->group(['middleware' => 'auth'], function() {

    Route::get('/', function () {
        return view('welcome');
    });

//chat rooms
    Route::get('/api/chat-rooms', 'ChatRoomController@getAll');
    Route::get('/api/chat-rooms/{chatRoom}', 'ChatRoomController@show');
    Route::post('/api/chat-rooms', 'ChatRoomController@create');

//Messages
    Route::get('/api/messages/{chatRoom}', 'MessageController@getByChatRoom');
    Route::post('/api/messages/{chatRoom}', 'MessageController@createInChatRoom');
    Route::get('/api/messages/{lastMessageId}/{chatRoom}', 'MessageController@getUpdates');

//users api
//    Route::get('/api/users/login/kareem', 'UserController@loginKareem');
//    Route::get('/api/users/login/mohamed', 'UserController@loginMohamed');


    Route::model('chatRoom', 'App\models\ChatRoom');
});