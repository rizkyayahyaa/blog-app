<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\PostUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerChatController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SearchPostController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AdminCommentController;
use App\Http\Controllers\Admin\StatisticsController;
use App\Http\Controllers\Admin\ReportController;

Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerStore'])->name('register.store');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/index', [LandingpageController::class, 'index'])->name('landingpage')->middleware('auth');
Route::get('/dashboard', [PostUserController::class, 'index'])->name('dashboard');
Route::get('/customer-chat', [CustomerChatController::class, 'index'])->name('customer.chat');
Route::get('/mypost/mypost', [IndexController::class, 'index'])->name('mypost.mypost');


Route::middleware('auth')->group(function () {
    Route::get('/mypost/archive', [PostController::class, 'archive'])->name('mypost.archive');
    Route::post('/mypost/archive/{id}', [PostController::class, 'archive'])->name('mypost.archive');
    Route::get('/mypost', [MyPostController::class, 'index'])->name('mypost.index'); // Changed from mypost.mypost
    Route::get('/mypost/{id}/edit', [MyPostController::class, 'edit'])->name('mypost.edit');
    Route::put('/mypost/{id}', [MyPostController::class, 'update'])->name('mypost.update');
    Route::delete('/mypost/{id}', [MyPostController::class, 'destroy'])->name('mypost.destroy');

    Route::post('/posts/{post_id}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

});

Route::get('/profile', [UserController::class, 'show'])->name('user.profile');

Route::middleware(['auth'])->group(function () {
    Route::get('/customer/chats', [ChatController::class, 'chatList'])->name('customer.chatList');
    Route::get('/customer/chat/{receiverId}', [ChatController::class, 'index'])->name('customer.chat');
    Route::post('/customer/chat/{receiverId}', [ChatController::class, 'sendMessage'])->name('customer.sendMessage');
});


Route::group(['middleware' => 'auth', 'prefix' => 'user'], function () {
    Route::get('/posts', [PostUserController::class, 'index'])->name('user.posts.index');
    Route::get('/posts/create', [PostUserController::class, 'create'])->name('user.posts.create');
    Route::post('/posts', [PostUserController::class, 'store'])->name('user.posts.store');
});

Route::get('/admin', [AdminController::class, 'index'])->name('index_admin')->middleware('auth');;

Route::group(['middleware' => ['auth']], function () {

    Route::get('/search/posts', [SearchPostController::class, 'search'])->name('search.posts');
    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('posts/{postId}/comments', [CommentController::class, 'index'])->name('comments.index');
    Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
    Route::get('/admin/comments', [AdminCommentController::class, 'index'])->name('admin.comments.index');

    Route::resource('comments', AdminCommentController::class, ['as' => 'admin']);
    Route::get('statistics', [StatisticsController::class, 'index'])->name('admin.statistics.index');

    Route::get('reports', [ReportController::class, 'index'])->name('admin.reports.index');
    Route::get('reports/create', [ReportController::class, 'create'])->name('admin.reports.create');
    Route::post('reports', [ReportController::class, 'store'])->name('admin.reports.store');
    Route::get('reports{id}/edit', [ReportController::class, 'edit'])->name('admin.reports.edit');
    Route::put('reports{id}', [ReportController::class, 'update'])->name('admin.reports.update');
    Route::delete('reports{id}', [ReportController::class, 'destroy'])->name('admin.reports.destroy');

    Route::get('users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    Route::get('comments', [CommentController::class, 'index'])->name('comments.index');
    Route::get('comments/create', [CommentController::class, 'create'])->name('comments.create');
    Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('comments/{id}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('comments/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');

});

