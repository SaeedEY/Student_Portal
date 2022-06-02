<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AgentController;
use App\Http\Middleware\AgentIsAdmin;

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

Route::get('/', [HomeController::class,'loginIndex']);
Route::post('/', [HomeController::class,'login']);
Route::get('/logout', [HomeController::class,'logout']);


Route::get('/requests', [RequestController::class,'index']);
Route::post('/requests/add', [RequestController::class,'add']);

Route::middleware(AgentIsAdmin ::class)->group(function(){
    Route::get('/administrator/fields', [FieldController::class,'index']);
    Route::post('/administrator/fields/add', [FieldController::class,'add']);

    Route::get('/administrator/students', [StudentController::class,'index']);
    Route::post('/administrator/students/add', [StudentController::class,'add']);

    Route::get('/administrator/agents', [AgentController::class,'agentsListIndex']);
    Route::post('/administrator/agents/add', [AgentController::class,'addNewAgent']);
});


