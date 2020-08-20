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


use App\Newsletter;
use App\Price;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();


Route::post('/addTask', 'TaskController@addTask');
Route::post('/addNewsletter', 'NewsletterController@addNewsletter');
Route::post('/addOurServices', 'PriceController@addOurServices');
Route::get('/pricing', 'PriceController@pricing')->name('pricing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::middleware(['auth'])->group(function () {
    Route::get('/requests', 'TaskController@requests')->name('requests');
    Route::get('/scanned_requests', 'TaskController@scannedRequests')->name('scanned_requests');
    Route::get('/emails', 'NewsletterController@emails')->name('emails');
    Route::get('/ourservices', 'PriceController@ourservices')->name('ourservices');
    // лучше убрать такую возможность.
    //    Route::delete('/task/{id}', 'TaskController@delete');
    Route::delete('/ourservice/{id}', 'PriceController@delete');
    Route::put('/look_task/{id}', 'TaskController@lookTask');
});

