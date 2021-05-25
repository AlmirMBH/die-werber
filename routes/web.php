<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\GraphicsController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WebController;
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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/team', [PagesController::class, 'team'])->name('team');
Route::get('/questions', [PagesController::class, 'questions'])->name('questions');
Route::get('/portfolio', [PagesController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/privacy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('/bus', [PagesController::class, 'bus'])->name('bus');


Route::get('/starter', [EmailController::class, 'starter'])->name('email-starter');
Route::get('/medium', [EmailController::class, 'medium'])->name('email-medium');
Route::get('/advanced', [EmailController::class, 'advanced'])->name('email-advanced');
Route::get('/special', [EmailController::class, 'special'])->name('email-special');


Route::get('/3d', [GraphicsController::class, 'threeD'])->name('graphics-3d');
Route::get('/design', [GraphicsController::class, 'design'])->name('graphics-design');
Route::get('/illustrations', [GraphicsController::class, 'illustrations'])->name('graphics-illustrations');
Route::get('/print', [GraphicsController::class, 'print'])->name('graphics-print');


Route::get('/logo', [LogoController::class, 'logo'])->name('logo-logo');
Route::get('/animation-logo', [LogoController::class, 'animation'])->name('logo-animation');
Route::get('/brand', [LogoController::class, 'brand'])->name('logo-brand');
Route::get('/3d-logo', [LogoController::class, 'threeD'])->name('logo-3d');


Route::get('/2d-animation', [VideoController::class, 'twoD'])->name('video-2d');
Route::get('/3d-animation', [VideoController::class, 'threeD'])->name('video-3d');
Route::get('/video-prices', [VideoController::class, 'prices'])->name('video-prices');
Route::get('/voice', [VideoController::class, 'voice'])->name('video-voice');
Route::get('/whiteboard', [VideoController::class, 'whiteboard'])->name('video-whiteboard');


Route::get('/applications', [WebController::class, 'applications'])->name('web-applications');
Route::get('/hosting', [WebController::class, 'hosting'])->name('web-hosting');
Route::get('/analysis', [WebController::class, 'analysis'])->name('web-analysis');
Route::get('/web-prices', [WebController::class, 'prices'])->name('web-prices');
Route::get('/webshop', [WebController::class, 'shop'])->name('web-shop');
Route::get('/web-design', [WebController::class, 'design'])->name('web-design');
















