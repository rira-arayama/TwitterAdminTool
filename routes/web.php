<?php


Route::resource('task', 'TaskController');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/', 'RootInvokeController')->name('root');

Route::group(['prefix' => 'auth', 'middleware' => 'guest'], function () {
    Route::get('{provider}/redirect', 'Auth\SocialAuthController@redirect')->name('social.login');
    Route::get('{provider}/callback/', 'Auth\SocialAuthController@callback');
});
