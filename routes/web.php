<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
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

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/project-details1', [ProjectsController::class, 'detail1'])->name('project-details1');
Route::get('/project-details2', [ProjectsController::class, 'detail2'])->name('project-details2');
Route::get('/project-details3', [ProjectsController::class, 'detail3'])->name('project-details3');
Route::get('/project-details4', [ProjectsController::class, 'detail4'])->name('project-details4');
Route::get('/project-details5', [ProjectsController::class, 'detail5'])->name('project-details5');
Route::get('/project-details6', [ProjectsController::class, 'detail6'])->name('project-details6');
Route::get('/project-details7', [ProjectsController::class, 'detail7'])->name('project-details7');
Route::get('/project-details8', [ProjectsController::class, 'detail8'])->name('project-details8');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news-details', [NewsController::class, 'detail'])->name('news-details');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about-2', [AboutController::class, 'about2'])->name('about-2');
Route::get('/about-3', [AboutController::class, 'about3'])->name('about-3');
Route::get('/about-4', [AboutController::class, 'about4'])->name('about-4');
Route::get('/about-5', [AboutController::class, 'about5'])->name('about-5');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
