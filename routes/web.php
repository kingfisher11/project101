<?php
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\MentorPLController;

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
Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/location', [App\Http\Controllers\LocationController::class, 'index'])->name('location:list');
Route::get('/mentor', [App\Http\Controllers\MentorController::class, 'index'])->name('mentor:list');
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index'])->name('staff:list');
Route::get('/mentee', [App\Http\Controllers\StudentController::class, 'index'])->name('student:list');
Route::get('/mentormentee/{NoStaf}', [App\Http\Controllers\MentorPLController::class, 'show'])->name('mentormentee');
Route::get('/test/{NoStaf}', [MentorController::class, 'getStudent']);
Route::get('/session', [App\Http\Controllers\SessionController::class, 'index'])->name('session');
Route::get('/sem', [App\Http\Controllers\SemPLController::class, 'index'])->name('sem');
Route::get('/activity', [App\Http\Controllers\ActivityController::class, 'index'])->name('activities');
Route::get('/activity/create', [App\Http\Controllers\ActivityController::class, 'create'])->name('create');
Route::post('/activity/create', [\App\Http\Controllers\ActivityController::class, 'store'])->name('activity:store');//route utk simpan data
// Route::get('/lokasi/create',[App\Http\Controllers\LokasiController::class, 'create'])->name('lokasi:create');
// Route::post('/lokasi/create',[App\Http\Controllers\LokasiController::class, 'store'])->name('lokasi:store');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
