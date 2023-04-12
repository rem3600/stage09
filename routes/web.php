<?php

use App\Models\Course;
// use request
use App\Models\Student;
use Illuminate\Http\Request;
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
    // redirect naar /admin
    return redirect('/admin');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Evaluations routes

Route::get('/admin/evaluations/{id}', function ($id) {
    // get the course with id 1 and with relations hardskill and softskill eager loaded
    $course = Course::with('hardskill', 'softskill')->find(1);
    $student = Student::find($id);

    return view('admin.evaluationscrud', compact('course', 'student'));
})->name('evaluations.show');

Route::get('/admin/evaluations', function () {
   // get all studends with course and where user_id = current user id
    $students = Student::with('course')->where('user_id', auth()->user()->id)->get();

    return view('admin.evaluations', compact('students'));
})->name('evaluations.all');

Route::post('/admin/evaluations', function (Request $request) {
   // show form post result for dev testing and name the route evaluations.store
    dd($request->all());
})->name('evaluations.store');

// End Evaluations routes