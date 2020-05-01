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

//Route::get('index/{lang}', function ($lang) {
//    \Session::put('lang', $lang);
//    return redirect()->back();
//})->name('locale');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() {
        Route::get('/', 'FrontendController@index')->name('frontend.index');
        Route::get('/give-question', 'FrontendController@giveQuestion')->name('frontend.giveQuestion');
        Route::post('/take-question', 'FrontendController@takeQuestion')->name('frontend.takeQuestion');

        Route::group(['prefix' => 'orders', 'middleware' => 'auth'], function () {
            Route::get('{any?}', 'OrdersController@index')->where(['any' => '.*'])->name('order.index');
        });

});
Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('home');
//    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	Route::get('questions', 'QuestionController@index')->name('questions');
    Route::get('questions/{question}/show', 'QuestionController@show')->name('questions.show');
    Route::resource('menus', 'MenuController');
    Route::resource('services', 'ServiceController');
    Route::resource('settings', 'SettingController');

    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');


    Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    Route::get('notifications', function () {
        return view('backend.pages.notifications');
    })->name('notifications');


//routs of the payment systems
    //handle requests from payment system
    Route::any('/handle/{paysys}',function($paysys){
        (new Goodoneuz\PayUz\PayUz)->driver($paysys)->handle();
    });

    //redirect to payment system or payment form
    Route::any('/pay/{paysys}/{key}/{amount}',function($paysys, $key, $amount){
        $model = Goodoneuz\PayUz\Services\PaymentService::convertKeyToModel($key);
        $url = request('redirect_url','/'); // redirect url after payment completed
        $pay_uz = new Goodoneuz\PayUz\PayUz;
        $pay_uz
            ->driver($paysys)
            ->redirect($model, $amount, 860, $url);
    });
});

