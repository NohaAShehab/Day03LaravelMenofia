<?php

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

    use App\Http\Controllers;

    Route::get('/', function () {
        return view('welcome');
    });


    Route::get('/students',
        [Controllers\StudentController::class,"index"])->name("students.index");

    Route::get('/students/create',
        [Controllers\StudentController::class,"create"])->name("students.create");

    Route::post('/students',
        [Controllers\StudentController::class,"store"])->name("students.store");

    Route::get('/students/{student}',
        [Controllers\StudentController::class,"show"])->name("students.show");

    Route::get('/students/{student}/edit',
        [Controllers\StudentController::class,"edit"])->name("students.edit");

    Route::put('/students/{student}',
        [Controllers\StudentController::class,"update"])->name("students.update");

    Route::delete('/students/{student}',
        [Controllers\StudentController::class,"destroy"])->name("students.delete");


    # naming the routes ->name("students.show)

    #posts routes
    Route::get('/posts',
        [Controllers\PostsController::class,"index"])->name("posts.index");

    Route::get('/posts/create',
        [Controllers\PostsController::class,"create"])->name("posts.create");

    Route::post('/posts',
        [Controllers\PostsController::class,"store"])->name("posts.store");

    Route::get('/posts/{post}',
        [Controllers\PostsController::class,"show"])->name("posts.show");

    Route::get('/posts/{post}/edit',
        [Controllers\PostsController::class,"edit"])->name("posts.edit");

    Route::put('/posts/{post}',
        [Controllers\PostsController::class,"update"])->name("posts.update");

    Route::delete('/posts/{post}',
        [Controllers\PostsController::class,"destroy"])->name("posts.delete");





