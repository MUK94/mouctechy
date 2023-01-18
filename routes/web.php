<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SkillsController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Auth;

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


// VIEW ROUTES
Route::get('/foo', function() {
    Artisan::call('storage:link');
});
Route::get('/', [ViewController::class, 'index']);
// Route::get('/', 'App\Http\Controllers\ViewController@index')->name('pages.index');


Route::get('/project/{project:slug}', [ViewController::class, 'show']);



Route::middleware('admin')->group(function () {
    
    Route::get('/admin', [ProjectController::class, 'index']);
    
    // Get the create form
    Route::get('/admin/create', [ProjectController::class, 'create']);
    
    // Project CRUD OPERATIONS
    Route::post('/admin/store', [ProjectController::class, 'store']);
    
    // edit project
    Route::get('/admin/{id}/edit', 'App\Http\Controllers\Admin\ProjectController@edit')->name('admin.edit');
    
    // update project
    Route::put('/admin/{id}/update', 'App\Http\Controllers\Admin\ProjectController@update')->name('admin.update');
    
    // delete project
    Route::delete('/admin/{id}/delete', 'App\Http\Controllers\Admin\ProjectController@delete')->name('admin.delete');
    
    // ---- Skill CRUD OPERATIONS
    
    // Get the create form
    Route::get('/admin/skills/create', [SkillsController::class, 'create']);
    
    Route::post('/admin/skills/store', [SkillsController::class, 'store']);
    
    
    // edit project
    Route::get('/admin/skills/{id}/edit', 'App\Http\Controllers\Admin\SkillsController@edit')->name('admin.skills.edit');
    
    // update project
    Route::put('/admin/skills/{id}/update', 'App\Http\Controllers\Admin\SkillsController@update')->name('admin.skills.update');
    
    // delete project
    Route::delete('/admin/skills/{id}/delete', 'App\Http\Controllers\Admin\SkillsController@delete')->name('admin.skills.delete');
});

Auth::routes();
