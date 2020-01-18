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

Route::post('/addTask', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:200'
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
//    dd('');
    $task = new Task();
    $task->name = $request->name;
    $task->email = $request->email;
    $task->phone = $request->phone;
    $task->subject = $request->subject;
    $task->message = $request->message;
//    $task->look = false;
    $task->save();

    return redirect('/');
});

Route::post('/addNewsletter', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'email' => 'required|max:100'
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $newsletter = new Newsletter();
    $newsletter->email = $request->email;
    $newsletter->save();

    return redirect('/');
});

Route::post('/addOurServices', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'description' => 'required|max:500'
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $price = new Price();
    $price->price = $request->price;
    $price->description = $request->description;
    $price->save();

    return redirect('/ourservices');
});


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/pricing', function () {
    $ourservices = Price::orderBy('created_at', 'asc')->get();
    return view('pricing', [
        'ourservices' => $ourservices
    ]);
})->name('pricing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::middleware('auth')->get('/requests', function () {
    $tasks = Task::where('look','=','false')->orderBy('created_at', 'asc')->get();

    return view('requests', [
        'tasks' => $tasks
    ]);
})->name('requests');

Route::middleware('auth')->get('/scanned_requests', function () {
    $tasks = Task::where('look','=','true')->orderBy('created_at', 'asc')->get();

    return view('scanned_requests', [
        'tasks' => $tasks
    ]);
})->name('scanned_requests');

Route::middleware('auth')->get('/emails', function () {
    $emails = Newsletter::orderBy('created_at', 'asc')->get();

    return view('emails', [
        'emails' => $emails
    ]);
})->name('emails');

Route::middleware('auth')->get('/ourservices', function () {
    $ourservices = Price::orderBy('created_at', 'asc')->get();

    return view('ourservices', [
        'ourservices' => $ourservices
    ]);
})->name('ourservices');

Auth::routes();

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::middleware('auth')->delete('/task/{id}', function ($id) {
    Task::findOrFail($id)->delete();

    return redirect('/scanned_requests');
});

Route::middleware('auth')->delete('/ourservice/{id}', function ($id) {
    Price::findOrFail($id)->delete();

    return redirect('/ourservices');
});

Route::middleware('auth')->put('/look_task/{id}', function ($id) {

    $task = Task::findOrFail($id);
    $task->look = true;
    $task->save();

    return redirect('/requests');
});
