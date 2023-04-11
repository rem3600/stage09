<?php

use Illuminate\Support\Facades\Route;
// use request
use Illuminate\Http\Request;

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
    // redirect naar /admin
    return redirect('/admin');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/admin/evaluations', function () {
    // redirect naar /admin
    // get the course with id 1 and with relations hardskill and softskill eager loaded
    $course = \App\Models\Course::with('hardskill', 'softskill')->find(1);
   
    return view('admin.evaluations', compact('course'));
});

Route::post('/admin/evaluations', function (Request $request) {
   // show form post result for dev testing and name the route evaluations.store
    dd($request->all());
})->name('evaluations.store');