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


    
    Route::get('/ppol', 'PpolController@create')->name('ppol.create');
    Route::get('/ppol/store', 'PpolController@store')->name('ppol.store');


    Route::get('/acounting', 'PerlpbbmController@index')->name('acounting.index');
    Route::get('/acounting/create', 'PerlpbbmController@create')->name('acounting.create');


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

    Route::get('/pembelian', 'PpolController@index')->name('pembelian.index');
    Route::post('/pembelian/tambah-data/store', 'PpolController@store')->name('pembelian.store');
    Route::get('/pembelian/tambahdata', 'PpolController@create')->name('pembelian.tambahdata');
    Route::get('/pembelian/create', [App\Http\Controllers\PpolController::class, 'create'])->name('pembelian.create');
    


});
// Route::get('/ppol/create', [PpolController::class, 'create'])->name('ppol.create');
// Route::post('/ppol/store', [PpolController::class, 'store'])->name('ppol.store');


Route::get('/dashboard', function () {
    return view('template.dashboard');
});
Route::get('/', function () {
    return view('auth.login');
});
Route::get('index2', function () {
    return view('acounting.welcome');
});


Route::get('pembelian', function () {
    return view('pembelian.index');
})->name('pembelian.index');

// Route::get('/pembelian', 'PpolController@index')->name('pembelian.index');
// Route::post('/pembelian/tambah-data/store', 'PpolController@store')->name('pembelian.store');
// Route::get('/pembelian/tambahdata', 'PpolController@create')->name('pembelian.tambahdata');
// Route::get('/pembelian/create', [App\Http\Controllers\PpolController::class, 'create'])->name('pembelian.create');

// Route::resource('pembelian', PpolController::class);

