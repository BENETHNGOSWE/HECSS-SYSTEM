<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




// Program Manage Here
Route::get('createprogram', [App\Http\Controllers\Program\ProgramController::class, 'create'])->name('programs.create');
Route::post('store/program', [App\Http\Controllers\Program\ProgramController::class, 'store'])->name('programs.store');



// Student Program Selected with Manage
Route::get('/searchresults', [App\Http\Controllers\Student\StudentresultsController::class, 'search'])->name('search.results');
Route::post('/studentprogram', [App\Http\Controllers\Student\StudentresultsController::class, 'student_program'])->name('student.programs');

Route::get('/studentprogram', function () {
    return view('Students.program');
});



// Careerer Manage Here
Route::get('/careerlist', [App\Http\Controllers\Careeries\CareererController::class,'index'])->name('careerer.index');
Route::get('/createcareer', [App\Http\Controllers\Careeries\CareererController::class,'create'])->name('careerer.create');
Route::post('/storecareer', [App\Http\Controllers\Careeries\CareererController::class,'store'])->name('careerer.store');
Route::get('/careerprogram', [App\Http\Controllers\Careeries\CareererController::class,'search_program'])->name('careerer.program');