<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthContoroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Ekstrakurikuler;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\EventNewsController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoGalleryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pulic.pagesmatn');
// });

Route::get('/login', [AuthContoroller::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthContoroller::class, 'login'])->name('login.post');

Route::get('/logout', [AuthContoroller::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/operator/dashboard', fn() => view('operator.dashboard'))->name('operator.dashboard');
    Route::get('/guru/dashboard', fn() => view('guru.dashboard'))->name('guru.dashboard');
    Route::get('/siswa/dashboard', fn() => view('siswa.dashboard'))->name('siswa.dashboard');
});

Route::get('/public/page-sma-tn', [PublicController::class, 'page'])->name('public.pagesmatn');
Route::get('/public/profil/sejarah-sma-tn', [PublicController::class, 'sejarah'])->name('public.profil.sejarahsmatn');
Route::get('/public/profil/visimisi-sma-tn', [PublicController::class, 'visimisi'])->name('public.profil.visimisismatn');
Route::get('/public/profil/lambang-sma-tn', [PublicController::class, 'lambang'])->name('public.profil.lambangsmatn');
Route::get('/public/profil/penguruspamong-sma-tn', [PublicController::class, 'penguruspamong'])->name('public.profil.penguruspamongsmatn');
Route::get('/public/eventnews-sma-tn', [PublicController::class, 'eventnews'])->name('public.eventnewssmatn');

Route::get('/users', [AdminController::class, 'index'])->name('admin.users.index');
Route::get('/users/create', [AdminController::class, 'create'])->name('admin.users.create');
Route::post('/users', [AdminController::class, 'store'])->name('users.store');
Route::get('/user/{id}/edit', [AdminController::class, 'edit'])->name('admin.users.edit');
Route::put('/user/{id}', [AdminController::class, 'update'])->name('user.update');
Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy');

Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('admin.ekstrakurikuler.index');
Route::get('/ekstrakurikuler/create', [EkstrakurikulerController::class, 'create'])->name('admin.ekstrakurikuler.create');
Route::post('/eskul/store', [EkstrakurikulerController::class, 'store'])->name('admin.ekstrakurikuler.store');
Route::get('/admin/ekstrakurikuler/{id}/edit', [EkstrakurikulerController::class, 'edit'])->name('admin.ekstrakurikuler.edit');
Route::put('/admin/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'update'])->name('admin.ekstrakurikuler.update');
Route::delete('/admin/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'destroy'])->name('admin.ekstrakurikuler.destroy');

Route::get('/admin/eventnews/index', [EventNewsController::class, 'index'])->name('admin.eventnews.index');
Route::get('/admin/eventnews/create', [EventNewsController::class, 'create'])->name('admin.eventnews.create');
Route::post('/admin/news', [EventNewsController::class, 'store'])->name('admin.eventnews.store');

Route::get('/admin/videogallery/index', [VideoGalleryController::class, 'index'])->name('admin.videogallery.index');
Route::get('/admin/videogallery/create', [VideoGalleryController::class, 'create'])->name('admin.videogallery.create');
Route::post('/admin/videogallery', [VideoGalleryController::class, 'store'])->name('admin.videogallery.store');
