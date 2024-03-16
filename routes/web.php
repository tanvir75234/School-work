<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Team_MemberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[HomeController::class,'index']);

Route::get('/dashboard/banner',[BannerController::class,'index'])->name('banner');
Route::get('/dashboard/banner/add',[BannerController::class,'add'])->name('banner.add');
Route::get('/dashboard/banner/view/{slug}',[BannerController::class,'view'])->name('banner.view');
Route::get('/dashboard/banner/edit/{slug}',[BannerController::class,'edit'])->name('banner.edit');
Route::post('/dashboard/banner/submit',[BannerController::class,'insert'])->name('banner.submit');
Route::post('/dashboard/banner/update',[BannerController::class,'update'])->name('banner.update');
Route::post('/dashboard/banner/softdelete',[BannerController::class,'softdelete'])->name('banner.softdelete');
Route::post('/dashboard/banner/restore',[BannerController::class,'restore'])->name('banner.restore');
Route::post('/dashboard/banner/delete',[BannerController::class,'delete'])->name('banner.delete');

Route::get('/dashboard/team',[Team_MemberController::class,'index'])->name('team');
Route::get('/dashboard/team/add',[Team_MemberController::class,'add'])->name('team.add');
Route::get('/dashboard/team/view/{slug}',[Team_MemberController::class,'view'])->name('team.view');
Route::get('/dashboard/team/edit/{slug}',[Team_MemberController::class,'edit'])->name('team.edit');
Route::post('/dashboard/team/submit',[Team_MemberController::class,'insert'])->name('team.submit');
Route::post('/dashboard/team/update',[Team_MemberController::class,'update'])->name('team.update');
Route::post('/dashboard/team/softdelete',[Team_MemberController::class,'softdelete'])->name('team.softdelete');
Route::post('/dashboard/team/restore',[Team_MemberController::class,'restore'])->name('team.restore');
Route::post('/dashboard/team/delete',[Team_MemberController::class,'delete'])->name('team.restore');

require __DIR__.'/auth.php';
