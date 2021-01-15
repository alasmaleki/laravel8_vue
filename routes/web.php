<?php

use Illuminate\Support\Facades\Route;
use Psy\Util\Json;

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
    return view('welcome');
});
Route::get('/t', function () {

    $salesGuy = \App\Http\Controllers\SalesGuyController::store(['name' => 'test',
        'sales_area_postal_codes' => Json::encode(['pcode'=>['12345','12123']])
    ]);
    \App\Http\ValidatePostCodeHelper::validate($salesGuy,['66123']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
