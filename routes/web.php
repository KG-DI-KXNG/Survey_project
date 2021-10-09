<?php

use App\Http\Controllers\question;
use App\Http\Controllers\Survey;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::post('survey', [Survey::class, 'index'])->name('surveyIndex');
Route::get('surveyquestion', [Survey::class, 'show'])->name('surveyForm');

Route::view('surveyform.', 'surveyForm');

Route::resource('questions', question::class);
