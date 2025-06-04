<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\whatWeDoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendBlogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

require __DIR__ . '/admin.php';
require __DIR__ . '/frontend.php';


Route::get('what-we-do/{id}', function ($id) {
    return view('web.gallery', compact('id'));
})->name('frontend.whatwedo');

Route::get('blog', [FrontendBlogController::class, 'blogfrontend'])->name('frontend.blog');

Route::post('contact/store', [ContactController::class, 'store'])->name('frontend.contact');



