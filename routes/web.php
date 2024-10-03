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
    Route::get('/acounting', 'PerlpbbmController@index')->name('acounting.index');
    Route::get('/acounting/create', 'PerlpbbmController@create')->name('acounting.create');
    // Route::post('/perlpbbms', 'PerlpbbmController@store')->name('perlpbbms.store');
    // Tambahkan rute lain yang diperlukan
    // Route::resource('acounting', PerlpbbmController::class);
    Route::get('acounting/tambah-lpb', function () {
        return view('acounting.tambahlpb');
    })->name('acounting.tambahlpb');
    Route::get('acounting/faktur&pajak', function () {
        return view('acounting.fakturpajak');
    })->name('acounting.fakturpajak');
    Route::get('acounting/pembayaran', function () {
        return view('acounting.pembayaranlpb');
    })->name('acounting.pembayaranlpb');

    Route::get('pembelian/tambahbeli', function () {
        return view('pembelian.tambahbeli');
    })->name('pembelian.tambahbeli');

    Route::get('pembelian/tambah-beli', function () {
        return view('pembelian.tambahpembelian');
    })->name('pembelian.tambahpembelian');

});

Route::get('/dashboard', function () {
    return view('template.dashboard');
});
Route::get('/', function () {
    return view('auth.login');
});
Route::get('index2', function () {
    return view('acounting.welcome');
});

// Route::get('acounting', function () {
//     return view('acounting.index');
// });
Route::get('pembelian', function () {
    return view('pembelian.index');
})->name('pembelian.index');

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


