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
// routes/web.php

Route::group(['middleware' => ['web']], function () {
    // Route::get('/perlpbbms', 'PerlpbbmController@index')->name('perlpbbms.index');
    // Route::get('/perlpbbms/create', 'PerlpbbmController@create')->name('perlpbbms.create');
    // Route::post('/perlpbbms', 'PerlpbbmController@store')->name('perlpbbms.store');
    // Tambahkan rute lain yang diperlukan
    Route::resource('perlpbbms', PerlpbbmController::class);
});
Route::get('/', function () {
    return view('template.master');
});

Route::get('acounting', function () {
    return view('acounting.index');
});
Route::get('pembelian', function () {
    return view('pembelian.index');
});

// Route::get('/perlpbbms', 'PerlpbbmController@index');
// // Route::get('/perlpbbms/create', 'PerlpbbmController@create');
// Route::get('/perlpbbms/create', [
//     'as' => 'perlpbbms.create', 
//     'uses' => 'PerlpbbmController@create'
// ]);
// // Route::post('/perlpbbms', 'PerlpbbmController@store');
// Route::post('/perlpbbms', [
//     'as' => 'perlpbbms.store', // Nama rute
//     'uses' => 'PerlpbbmController@store' // Controller dan metode
// ]);
// Route::get('/create', 'PerlpbbmController@create');


