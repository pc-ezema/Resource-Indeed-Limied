<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

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
Route::post('/contact', [HomePageController::class, 'ContactUsForm'])->name('contact.store');
Route::get('/service/information/technology', [HomePageController::class, 'information_technology'])->name('service.information.technology');
Route::get('/service/financial/services', [HomePageController::class, 'financial_service'])->name('service.financial.service');
Route::get('/service/general/resouce', [HomePageController::class, 'general_resource'])->name('service.general.resource');
Route::get('/service/human/resource/management', [HomePageController::class, 'human_resource_management'])->name('service.human.resource.management');
Route::get('/service/professional/services', [HomePageController::class, 'professional_service'])->name('service.professional.service');
Route::get('/service/waste/management', [HomePageController::class, 'waste_management'])->name('service.waste.management');