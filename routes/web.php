<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/t',function(){
   $p1 = ['64765','54677','65777','65098','65776'];
   $p2 = ['657*'];
    dd(strpos($p2[0],'*'));
      function validator($po1=[],$po2=[]): array
   {

    return [integerValue($po1),integerValue($po2)];
   }
   validator($p1,$p2);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
