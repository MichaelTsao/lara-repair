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

use Illuminate\Http\Request;

Route::get('/', 'HomeController@index')->name('home');

Route::get('/apply', function () {
    return view('apply');
})->middleware('auth')->name('apply');

Route::post('/apply', function (Request $request) {
    $data = $request->all();
    Validator::make($data, [
        'company' => 'required|numeric|exists:companies,id',
        'department' => 'required|string|max:255',
        'level' => ['required', 'numeric', \Illuminate\Validation\Rule::in(array_keys(\App\Worker::LEVELS))],
    ])->valid();
    if (\App\Worker::create([
        'user_id' => Auth::id(),
        'company_id' => $data['company'],
        'department' => $data['department'],
        'level' => $data['level'],
        'status' => \App\Worker::STATUS_PEND,
    ])
    ) {
        return redirect(route('home'));
    }
    return view('apply');
})->middleware('auth');

Auth::routes();
