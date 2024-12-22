<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/beneficiaries', function () {
    return view('beneficiaries');
});

Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

Route::get('/volunteers', function () {
    return view('volunteers');
});

Route::get('/volunteers', [VolunteerController::class, 'index']);

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/register-partner', function () {
    return view('registerPartner');
});

Route::get('/donate-now', function () {
    return view('donateNow');
});

Route::get('/contact-us', function () {
    return view('contactUs');
});

Route::post('/partner', [PartnerController::class, 'store']);

Route::post('/donor', [DonorController::class, 'store']);

Route::post('/contact', [ContactController::class, 'store']);

Route::post('/volunteers', [VolunteerController::class, 'store'])->name('volunteers.store');

Route::post('/beneficiary', [BeneficiaryController::class, 'store']);

// Route::middleware(['admin.access'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// });

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::delete('/admin/partners/{id}', [PartnerController::class, 'destroy']);

Route::delete('/admin/donors/{id}', [DonorController::class, 'destroy']);

Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy']);

Route::delete('/admin/volunteers/{id}', [VolunteerController::class, 'destroy']);

Route::delete('/admin/beneficiaries/{id}', [BeneficiaryController::class, 'destroy']);

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login'); // Sesuai dengan method `login`
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.authenticate'); // Sesuai dengan method `authenticate`
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
