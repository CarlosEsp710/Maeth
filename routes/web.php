<?php

use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Nutritionists\NutritionistProfileController;
use App\Http\Controllers\Patients\PatientProfileController;
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

Route::redirect('/', 'home');

// Login and logout
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// Password's
Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Register (patient)
Route::get('register.patient', [RegisterController::class, 'showRegistrationPatientForm'])->name('register.patient');
Route::post('register.patient', [RegisterController::class, 'registerPatient']);
//Register (nutritionist)
Route::get('register.nutritionist', [RegisterController::class, 'showRegistrationNutritionistForm'])->name('register.nutritionist');
Route::post('register.nutritionist', [RegisterController::class, 'registerNutritionist']);
// View index
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Routes permissions
Route::middleware(['auth'])->group(function () {
    // Patient profile
    Route::get('patient.profile.index', [PatientProfileController::class, 'index'])
        ->name('patient.profile.index')
        ->middleware('permission:patient.profile.index');
    Route::get('patient.profile.show/{patientProfile}', [PatientProfileController::class, 'show'])
        ->name('patient.profile.show')
        ->middleware('permission:patient.profile.show');
    Route::get('patient.profile.edit/{patientProfile}', [PatientProfileController::class, 'edit'])
        ->name('patient.profile.edit')
        ->middleware('permission:patient.profile.edit');
    Route::put('patient.profile.update/{patientProfile}', [PatientProfileController::class, 'update'])
        ->name('patient.profile.update')
        ->middleware('permission:patient.profile.edit');
    Route::delete('patient.profile.destroy/{patientProfile}', [PatientProfileController::class, 'destroy'])
        ->name('patient.profile.destroy')
        ->middleware('permission:patient.profile.destroy');
    // Nutritionist profile
    Route::get('nutritionist.profile.index', [NutritionistProfileController::class, 'index'])
        ->name('nutritionist.profile.index')
        ->middleware('permission:nutritionist.profile.index');
    Route::get('nutritionist.profile.show/{nutritionistProfile}', [NutritionistProfileController::class, 'show'])
        ->name('nutritionist.profile.show')
        ->middleware('permission:nutritionist.profile.show');
    Route::get('nutritionist.profile.edit/{nutritionistProfile}', [NutritionistProfileController::class, 'edit'])
        ->name('nutritionist.profile.edit')
        ->middleware('permission:nutritionist.profile.edit');
    Route::put('nutritionist.profile.update/{nutritionistProfile}', [NutritionistProfileController::class, 'update'])
        ->name('nutritionist.profile.update')
        ->middleware('permission:nutritionist.profile.edit');
    Route::delete('nutritionist.profile.destroy/{nutritionistProfile}', [NutritionistProfileController::class, 'destroy'])
        ->name('nutritionist.profile.destroy')
        ->middleware('permission:nutritionist.profile.destroy');
});
