<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SampleController;

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

// Route::controller(SampleController::class)->group(function(){

    Route::get('login', 'SampleController@index')->name('login');

    Route::get('registration', 'SampleController@registration')->name('registration');

    Route::get('logout', 'SampleController@logout')->name('logout');

    Route::post('validate_registration', 'SampleController@validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'SampleController@validate_login')->name('sample.validate_login');

    Route::get('dashboard', 'SampleController@dashboard')->name('dashboard');

    Route::get('profile', 'SampleController@profile')->name('profile');

    Route::post('profile_validation', 'SampleController@profile_validation')->name('sample.profile_validation');

// });