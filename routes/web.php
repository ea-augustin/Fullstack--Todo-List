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

Route::get('/', function () {
    return view('home');

});

Route::get('/accueil', function () {
    return view('pages.accueil');
});

    Route::get('/home', function () {
        return view('home');
});

Route::get('/mail', 'MailController@send');

Route::get('/{n}', 'categoryController@show')->where('n', '[0-9]+');




Route::get('/boite', function () {
    return view('pages/boite');
});



Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/destroy/{n}', 'TaskController@destroy')->where('n', '[0-9]+');

////////
Auth::routes(['verify' => true]);

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');
///////

//Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::resource('tasks', 'TaskController', [
        'only' => [
            'index', 'store', 'update','delete'
        ]
    ]);

});
