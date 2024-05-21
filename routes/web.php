<?php
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\RegController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HenController;
use App\Http\Controllers\Admin\GoatController;
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
    \Illuminate\Support\Facades\View::composer(['*'],function ($site_data){
        $url =env('APP_URL').":8000";
        $site_data->with([
           '_url'=>$url,
        ]);
    });
Route::get('/',[\App\Http\Controllers\HomeController::class,'index']) ->name('index');
Route::get('news/{id}',[\App\Http\Controllers\HomeController::class,'newsDetail']) ->name('news.detail');
Route::get('hen/{id}',[\App\Http\Controllers\HomeController::class,'henDetail']) ->name('hen.detail');
Route::get('goat/{id}',[\App\Http\Controllers\HomeController::class,'goatDetail']) ->name('goat.detail');
Route::get('log',[\App\Http\Controllers\HomeController::class,'log'])->name('log');
Route::post('log',[\App\Http\Controllers\HomeController::class,'logForm']) ->name('log.store');
Route::get('reg',[\App\Http\Controllers\HomeController::class,'reg'])->name('reg');
Route::post('reg',[\App\Http\Controllers\HomeController::class,'regForm']) ->name('reg.store');
Route::get('item',[\App\Http\Controllers\HomeController::class,'item'])->name('item');
Route::get('hen',[\App\Http\Controllers\HomeController::class,'hen'])->name('hen');
Route::get('goat',[\App\Http\Controllers\HomeController::class,'goat'])->name('goat');
Route::get('photo',[\App\Http\Controllers\HomeController::class,'photo'])->name('photo');
Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

});

Route::group(['middleware'=>['auth']], function() {

    Route::group(['prefix' => 'admin/', 'as' => 'admin.'], function () {
        Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');


        Route::resource('item', ItemController::class);

        Route::resource('news', NewsController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('aboutUs', AboutUsController::class);
        Route::resource('photo', PhotoController::class);
        Route::resource('video',VideoController::class);
        Route::get('siteSetting', [SiteSettingController::class,'edit'])->name('siteSetting');
        Route::put('siteSetting/update/{id}', [SiteSettingController::class,'update'])->name('siteSetting.update');
        Route::resource('user', UserController::class);
        Route::resource('log', LogController::class);
        Route::resource('reg', RegController::class);
        Route::resource('hen', HenController::class);
        Route::resource('goat', GoatController::class);
    });
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
