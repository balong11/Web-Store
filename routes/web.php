<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Models\Paper;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Mockery\Generator\StringManipulation\Pass\Pass;

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

Route::group(['prefix'=>'/admincp','as'=>'admincp.'], function(){

    Route::get('/', [LoginController::class, 'index']);
    //create
    Route::get('/create', [LoginController::class, 'create']);
    Route::post('/store', [LoginController::class, 'store']);
    //update
    Route::get('/edit/{id}', [LoginController::class, 'edit']);
    Route::post('/update/{id}', [LoginController::class, 'update']);
    //delete
    Route::get('/destroy/{id}', [LoginController::class, 'destroy']);

    // Route::get('/login',[LoginController::class, 'login']);

    Route::get('/logout', [LoginController::class, 'logout']);

    Route::get('/admin', [LoginController::class, 'admin']);

    Route::group(['prefix'=>'pape','as'=>'pape.'],function(){
        Route::get('/', [PaperController::class, 'index']);
        Route::get('/create', [PaperController::class, 'create']);
        Route::post('/store',[PaperController::class, 'store']);
        Route::get('/edit/{id}',[PaperController::class, 'edit']);
        Route::post('/update/{id}',[PaperController::class, 'update']);
        Route::get('/destroy/{id}', [PaperController::class, 'destroy']);
    });

    Route::group(['prefix'=>'cate','as'=>'cate.'], function(){

        Route::get('/', [CategoriController::class, 'index']);
        //create
        Route::get('/create', [CategoriController::class, 'create']);
        Route::get('/store', [CategoriController::class, 'store']);
        //update
        Route::get('/edit/{id}', [CategoriController::class, 'edit']);
        Route::post('/update/{id}', [CategoriController::class, 'update']);
        //delete
        Route::get('/destroy/{id}', [CategoriController::class, 'destroy']);
    
    });

    Route::group(['prefix'=>'product', 'as'=>'product'], function(){

        Route::get('/',[ProductController::class, 'index']);
        Route::get('/create',[ProductController::class, 'create']);
        Route::post('/store',[ProductController::class, 'store']);
        Route::get('/edit/{id}',[ProductController::class, 'edit']);
        Route::post('/update/{id}',[ProductController::class, 'update']);
        Route::get('/destroy/{id}', [ProductController::class, 'destroy']);
    });
 
});

Route::group(['prefix'=>'home', 'as'=>'home'], function() {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home',[HomeController::class, 'home']);
});





