<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
Route::match(['get', 'post',], '/training/continuous/course', [HomePageController::class, 'training'])->name('training')->middleware(ProtectAgainstSpam::class);
Route::match(['get', 'post',], '/training/e-learning-form', [HomePageController::class, 'e_learning_form'])->name('student.enroll')->middleware(ProtectAgainstSpam::class);
Route::get('complete-transfer/{id}', [HomePageController::class, 'completeTransfer'])->name('complete.transfer');
Route::post('complete', [HomePageController::class, 'complete'])->name('complete');
Route::get('cancel-payment', [HomePageController::class, 'paymentCancel'])->name('cancel.payment');
Route::get('payment-success', [HomePageController::class, 'paymentSuccess'])->name('success.payment');
Route::get('/jobs', [HomePageController::class, 'jobs'])->name('jobs');
Route::get('/view/job/{id}', [HomePageController::class, 'viewJob'])->name('viewJob');
Route::get('/api/jobs', [HomePageController::class, 'getJobs'])->name('getJobs');
Route::get('/search/jobs', [HomePageController::class, 'searchJobs'])->name('searchJobs');
Route::post('/submit-application', [HomePageController::class, 'submitApplication'])->name('submitApplication');
Route::get('/download/resume/{id}', [HomePageController::class, 'downloadResume'])->name('downloadResume');


// Auth
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/auth/register', [AuthController::class, 'authRegister'])->name('authRegister')->middleware(ProtectAgainstSpam::class);
Route::get('/verify', [AuthController::class, 'verify'])->name('verify');
Route::post('/confirm/code', [AuthController::class, 'confirmCode'])->name('comfirmCode');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/login', [AuthController::class, 'authLogin'])->name('authLogin')->middleware(ProtectAgainstSpam::class);
// Password reset routes
Route::get('/password/email',  [AuthController::class, 'forgetPassword'])->name('forgetPassword');
Route::post('/reset/password/email', [AuthController::class, 'passwordResetEmail'])->name('passwordResetEmail');
Route::get('/password/reset/code',  [AuthController::class, 'passwordReset'])->name('passwordReset');
Route::post('/password/reset', [AuthController::class, 'resetPassword'])->name('resetPassword');

Route::get('/admin/login', [AuthController::class, 'admin_login'])->name('admin.login');
Route::post('/post/admin/login', [AuthController::class, 'post_admin_login'])->name('post.admin.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/home', [DashboardController::class, 'dashboard'])->name('home');
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/account', [DashboardController::class, 'account'])->name('account');
    Route::post('/update/profile', [DashboardController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/update/password', [DashboardController::class, 'updatePassword'])->name('updatePassword');
    Route::post('/upload/profile-picture', [DashboardController::class, 'uploadProfilePicture'])->name('uploadProfilePicture');

    // Jobs
    Route::get('/jobs', [DashboardController::class, 'jobs'])->name('jobs');
    Route::get('job/add', [DashboardController::class, 'jobAdd'])->name('jobAdd');
    Route::post('job/post', [DashboardController::class, 'jobPost'])->name('jobPost');
    Route::get('job/view/{id}', [DashboardController::class, 'jobView'])->name('jobView');
    Route::get('job/edit/{id}', [DashboardController::class, 'jobEdit'])->name('jobEdit');
    Route::post('job/update/{id}', [DashboardController::class, 'jobUpdate'])->name('jobUpdate');
    Route::post('job/delete/{id}', [DashboardController::class, 'jobDelete'])->name('jobDelete');
    Route::post('job/close/{id}', [DashboardController::class, 'jobClose'])->name('jobClose');

    // Notifications
    Route::get('/notifications', [DashboardController::class, 'notifications'])->name('notifications');
    Route::get('/read/notification/{id}', [DashboardController::class, 'readNotification'])->name('readNotification');
});

Route::prefix('admin/dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/account', [AdminController::class, 'account'])->name('admin.account');
    Route::post('/update/profile', [AdminController::class, 'updateProfile'])->name('admin.updateProfile');
    Route::post('/update/password', [AdminController::class, 'updatePassword'])->name('admin.updatePassword');
    Route::post('/upload/profile-picture', [AdminController::class, 'uploadProfilePicture'])->name('admin.uploadProfilePicture');

    // Jobs
    Route::get('/jobs', [AdminController::class, 'jobs'])->name('admin.jobs');

    // Trainings
    Route::get('/trainings', [AdminController::class, 'trainings'])->name('admin.trainings');

    // Notifications
    Route::get('/notifications', [AdminController::class, 'notifications'])->name('admin.notifications');
    Route::get('/read/notification/{id}', [AdminController::class, 'readNotification'])->name('admin.readNotification');
});
