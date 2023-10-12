<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('/about', [HomePageController::class, 'about'])->name('about');
Route::get('/contact', [HomePageController::class, 'contact'])->name('contact');
Route::post('/contact', [HomePageController::class, 'ContactUsForm'])->name('contact.store')->middleware(ProtectAgainstSpam::class);
Route::get('/service/ict/solutions', [HomePageController::class, 'ict_solutions'])->name('service.ict.solutions');
Route::get('/service/financial/services', [HomePageController::class, 'financial_services'])->name('service.financial.services');
Route::get('/service/general/resouces', [HomePageController::class, 'general_resources'])->name('service.general.resources');
Route::get('/service/human/capital/development', [HomePageController::class, 'human_capital_development'])->name('service.human.capital.development');


Route::post('/query', [HomePageController::class, 'queryForm'])->name('query.store')->middleware(ProtectAgainstSpam::class);
Route::match(['get', 'post',], 'training', [HomePageController::class, 'training'])->name('training')->middleware(ProtectAgainstSpam::class);
Route::get('cancel-payment', [HomePageController::class, 'paymentCancel'])->name('cancel.payment');
Route::get('payment-success', [HomePageController::class, 'paymentSuccess'])->name('success.payment');