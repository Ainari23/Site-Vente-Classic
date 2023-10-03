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
//Route couverture du site
Route::get('/', function () {
    return view('cover');
});

//Route login-client du site
Route::get('/auth/client/client_login', function(){
    return view('/auth/client/client_login');
});

//Route a propos du site
Route::get('/about', function () {
    return view('about');
});
//Route index du blog
Route::prefix('/blog')->name('blog.')->group(function(){
    Route::get('/', [\App\Http\Controllers\BlogController::class, 'index'])->name('index');
    Route::get('/{slug}-{id}',[\App\Http\Controllers\BlogController::class, 'show'])->where([
        'id'=>'[0-9]+',
        'slug'=>'[a-z0-9\-]+'
    ])->name('show');
    
});
//Route articles du site
Route::get('/articles/ldpe', [\App\Http\Controllers\ArticleController::class, 'show_ldpe'])->name('articles.ldpe');
Route::get('/articles/pehd', [\App\Http\Controllers\ArticleController::class, 'show_pehd'])->name('articles.pehd');
Route::get('/articles/pet', [\App\Http\Controllers\ArticleController::class, 'show_pet'])->name('articles.ldpe');
Route::get('/articles/pp', [\App\Http\Controllers\ArticleController::class, 'show_pp'])->name('articles.pp');
Route::get('/articles/ps', [\App\Http\Controllers\ArticleController::class, 'show_ps'])->name('articles.ps');
Route::get('/articles/pvc', [\App\Http\Controllers\ArticleController::class, 'show_pvc'])->name('articles.pvc');
 
