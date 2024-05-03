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

Route::get('settinglocale/{lang}', function ($lang) {

    $referer = Redirect::back()->getTargetUrl();; //URL предыдущей страницы
    $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

    //разбиваем на массив по разделителю
    $segments = explode('/', $parse_url);

    //Если URL (где нажали на переключение языка) содержал корректную метку языка
    if (in_array($segments[1], Config::get('app.locales'))) {

        unset($segments[1]); //удаляем метку
    }

    //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
    array_splice($segments, 1, 0, $lang);

    //формируем полный URL
    $url = Request::root() . implode("/", $segments);

    //если были еще GET-параметры - добавляем их
    if (parse_url($referer, PHP_URL_QUERY)) {
        $url = $url . '?' . parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url); //Перенаправляем назад на ту же страницу

})->name('settinglocale');


Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'localed'
], function () {
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

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

});


Route::get('/', function () {
    return redirect(app()->getLocale());
});


Route::group([
    'prefix' => '{locale?}',
    'where' => ['locale' => '^ru|en|kz$'],
    'middleware' => 'localed'
], function () {
    Route::get('/', function () {
        return view('index');
    });
    Auth::routes();
    // Route::get('registerb', 'Auth\RegisterController@showRegistrationForm')->name('registerb');
    Route::get(
        'password/reset/{token}',
        'Auth\ResetPasswordController@showResetForm'
    )
        ->name('password.reset');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';


