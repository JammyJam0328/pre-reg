<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
   if(auth()->user()->isAdmin()){
        return redirect()->route('admin.dashboard');
    }else{
        return redirect()->route('student.home');
    }
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if(auth()->user()->isAdmin()){
        return redirect()->route('admin.dashboard');
    }else{
        return redirect()->route('student.home');
    }
})->name('dashboard');


Route::prefix('student')
->middleware(['auth:sanctum','verified', 'student'])
->group(function () {
    Route::get('/home', App\Http\Livewire\Student\Home::class)->name('student.home');
    Route::get('/my-application', App\Http\Livewire\Student\MyApplication::class)->name('student.my-application');
    Route::get('/schedules', App\Http\Livewire\Student\Schedules::class)->name('student.schedules');
    Route::get('/notifications', App\Http\Livewire\Student\Notifications::class)->name('student.notifications');
    Route::get('/pre-registration/{portal_id}', App\Http\Livewire\Student\PreRegistration::class)->name('student.pre-registration');
    Route::get('/payment', App\Http\Livewire\Student\PaymentSection::class)->name('student.payment');
});


Route::prefix('admin')
->middleware(['auth:sanctum','verified','admin',])
->group(function () {
    Route::get('/dashboard', App\Http\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
    Route::get('/applications', App\Http\Livewire\Admin\Applications::class)->name('admin.applications');
    Route::get('/application-portals', App\Http\Livewire\Admin\FormPortal::class)->name('admin.form-portals');
    Route::get('/portals/schedule/{id}', App\Http\Livewire\Admin\ViewSchedules::class)->name('admin.portal-schedule');
});