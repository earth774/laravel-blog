<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::post('/newsletter', NewsletterController::class);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('/posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');

    // Route::post('admin/posts', [AdminPostController::class, 'store']);
    // Route::get('admin/posts/create', [AdminPostController::class, 'create']);
    // Route::get('admin/posts', [AdminPostController::class, 'index']);
    // Route::get('admin/posts/{post:id}/edit', [AdminPostController::class, 'edit']);
    // Route::patch('admin/posts/{post:id}', [AdminPostController::class, 'update']);
    // Route::delete('admin/posts/{post:id}', [AdminPostController::class, 'destroy']);
});
