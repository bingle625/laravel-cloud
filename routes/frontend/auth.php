<?php

Route::group(['as' => 'auth.'], function () {
    Route::group([
        'namespace' => 'App\Domains\Auth\Http\Controllers\Frontend\Auth'
    ], function () {
        Route::get('login', [
            'as' => 'getLogin',
            'uses' => 'LoginController@showLoginForm'
        ]);

        Route::post('login', [
            'as' => 'postLogin',
            'uses' => 'LoginController@validateLogin'
        ]);
    });
});