<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\whatWeDoController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Admin'], function () {
    Route::get('/admin', [LoginController::class, 'index'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'adminLogin'])->name('admin.login.submit');


    Route::group(['middleware' => 'auth:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboardView'])->name('dashboard');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('/change/password/form', [DashboardController::class, 'changePasswordForm'])->name('change_password_form');
        Route::post('/change/password', [DashboardController::class, 'changePassword'])->name('change_password');

        //what-we-do
        Route::get('what-we-dos', [whatWeDoController::class, 'index'])->name('whatwedo.index');
        Route::get('what-we-dos/add', [WhatWeDoController::class, 'add'])->name('whatwedo.add');
        Route::post('what-we-dos/store', [WhatWeDoController::class, 'store'])->name('whatwedo.store');
        Route::get('what-we-dos/edit/{id}', [WhatWeDoController::class, 'edit'])->name('whatwedo.edit');
        Route::post('what-we-dos/update/{id}', [WhatWeDoController::class, 'update'])->name('whatwedo.update');
        Route::get('what-we-dos/delete/{id}', [WhatWeDoController::class, 'delete'])->name('whatwedo.delete');

        //blog
        Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
        Route::get('blog/add', [BlogController::class, 'add'])->name('blog.add');
        Route::post('blog/store', [BlogController::class, 'store'])->name('blog.store');
        Route::get('blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::post('blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
        Route::get('blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');

        //aboutus
        Route::get('about_us', [AboutUsController::class, 'index'])->name('about_us.index');
        Route::get('about_us/add', [AboutUsController::class, 'add'])->name('about_us.add');
        Route::post('about_us/store', [AboutUsController::class, 'store'])->name('about_us.store');
        Route::get('about_us/edit/{id}', [AboutUsController::class, 'edit'])->name('about_us.edit');
        Route::post('about_us/update/{id}', [AboutUsController::class, 'update'])->name('about_us.update');
        Route::get('about_us/delete/{id}', [AboutUsController::class, 'delete'])->name('about_us.delete');

        //team
        Route::get('team', [TeamController::class, 'index'])->name('team.index');
        Route::get('team/add', [TeamController::class, 'add'])->name('team.add');
        Route::post('team/store', [TeamController::class, 'store'])->name('team.store');
        Route::get('team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
        Route::post('team/update/{id}', [TeamController::class, 'update'])->name('team.update');
        Route::get('team/delete/{id}', [TeamController::class, 'delete'])->name('team.delete');
        //banner
        Route::get('banner', [BannerController::class, 'index'])->name('banner.index');
        Route::get('banner/add', [BannerController::class, 'add'])->name('banner.add');
        Route::post('banner/store', [BannerController::class, 'store'])->name('banner.store');
        Route::get('banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
        Route::post('banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
        Route::get('banner/delete/{id}', [BannerController::class, 'delete'])->name('banner.delete');

        //contact
        Route::get('contact/list', [ContactController::class, 'list'])->name('contact.list');
    });
});
