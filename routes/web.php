<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Team_MemberController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TestimonialController;


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

Route::get('/dashboard/service',[ServiceController::class,'index'])->name('service');
Route::get('/dashboard/service/add',[ServiceController::class,'add'])->name('service.add');
Route::get('/dashboard/service/view/{slug}',[ServiceController::class,'view'])->name('service.view');
Route::get('/dashboard/service/edit/{slug}',[ServiceController::class,'edit'])->name('service.edit');
Route::post('/dashboard/service/submit',[ServiceController::class,'insert'])->name('service.submit');
Route::post('/dashboard/service/update',[ServiceController::class,'update'])->name('service.update');
Route::post('/dashboard/service/softdelete',[ServiceController::class,'softdelete'])->name('service.softdelete');
Route::post('/dashboard/service/restore',[ServiceController::class,'restore'])->name('service.restore');
Route::post('/dashboard/service/delete',[ServiceController::class,'delete'])->name('service.delete');

Route::get('/dashboard/team',[Team_MemberController::class,'index'])->name('team');
Route::get('/dashboard/team/add',[Team_MemberController::class,'add'])->name('team.add');
Route::get('/dashboard/team/view/{slug}',[Team_MemberController::class,'view'])->name('team.view');
Route::get('/dashboard/team/edit/{slug}',[Team_MemberController::class,'edit'])->name('team.edit');
Route::post('/dashboard/team/submit',[Team_MemberController::class,'insert'])->name('team.submit');
Route::post('/dashboard/team/update',[Team_MemberController::class,'update'])->name('team.update');
Route::post('/dashboard/team/softdelete',[Team_MemberController::class,'softdelete'])->name('team.softdelete');
Route::post('/dashboard/team/restore',[Team_MemberController::class,'restore'])->name('team.restore');
Route::post('/dashboard/team/delete',[Team_MemberController::class,'delete'])->name('team.restore');

Route::get('/dashboard/partner',[PartnerController::class,'index'])->name('partner');
Route::get('/dashboard/partner/add',[PartnerController::class,'add'])->name('partner.add');
Route::get('/dashboard/partner/view/{slug}',[PartnerController::class,'view'])->name('partner.view');
Route::get('/dashboard/partner/edit/{slug}',[PartnerController::class,'edit'])->name('partner.edit');
Route::post('/dashboard/partner/submit',[PartnerController::class,'insert'])->name('partner.submit');
Route::post('/dashboard/partner/update',[PartnerController::class,'update'])->name('partner.update');
Route::post('/dashboard/partner/softdelete',[PartnerController::class,'softdelete'])->name('partner.softdelete');
Route::post('/dashboard/partner/restore',[PartnerController::class,'restore'])->name('partner.restore');
Route::post('/dashboard/partner/delete',[PartnerController::class,'delete'])->name('partner.restore');

Route::get('/dashboard/client',[ClientController::class,'index'])->name('client');
Route::get('/dashboard/client/add',[clientController::class,'add'])->name('client.add');
Route::get('/dashboard/client/view/{slug}',[clientController::class,'view'])->name('client.view');
Route::get('/dashboard/client/edit/{slug}',[clientController::class,'edit'])->name('client.edit');
Route::post('/dashboard/client/submit',[clientController::class,'insert'])->name('client.submit');
Route::post('/dashboard/client/update',[clientController::class,'update'])->name('client.update');
Route::post('/dashboard/client/softdelete',[clientController::class,'softdelete'])->name('client.softdelete');
Route::post('/dashboard/client/restore',[clientController::class,'restore'])->name('client.restore');
Route::post('/dashboard/client/delete',[clientController::class,'delete'])->name('client.restore');

Route::get('/dashboard/testimonial',[TestimonialController::class,'index'])->name('testimonial');
Route::get('/dashboard/testimonial/add',[TestimonialController::class,'add'])->name('testimonial.add');
Route::get('/dashboard/testimonial/view/{slug}',[TestimonialController::class,'view'])->name('testimonial.view');
Route::get('/dashboard/testimonial/edit/{slug}',[TestimonialController::class,'edit'])->name('testimonial.edit');
Route::post('/dashboard/testimonial/submit',[TestimonialController::class,'insert'])->name('testimonial.submit');
Route::post('/dashboard/testimonial/update',[TestimonialController::class,'update'])->name('testimonial.update');
Route::post('/dashboard/testimonial/softdelete',[TestimonialController::class,'softdelete'])->name('testimonial.softdelete');
Route::post('/dashboard/testimonial/restore',[TestimonialController::class,'restore'])->name('testimonial.restore');
Route::post('/dashboard/testimonial/delete',[TestimonialController::class,'delete'])->name('testimonial.restore');

require __DIR__.'/auth.php';
