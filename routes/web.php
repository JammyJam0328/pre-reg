<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
   if (!auth()->user()) {
      return redirect('/login');
   }else{
     if(auth()->user()->isAdmin()){
        return redirect()->route('admin.dashboard');
    }else{
        return redirect()->route('student.home');
    }
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
    Route::get('/view-application/{portal_id}', App\Http\Livewire\Student\ViewApplication::class)->name('student.view-application');
    Route::get('/{user_id}/payment/{application_id}', App\Http\Livewire\Student\PaymentSection::class)->name('student.payment-section');
    Route::get('/{application_id}/select-schedule', App\Http\Livewire\Student\SelectSchedule::class)->name('student.select-schedule');
     Route::get('/{application_id}/permit', App\Http\Livewire\Student\MyPermit::class)->name('student.my-permit');
});



Route::prefix('admin')
->middleware(['auth:sanctum','verified','admin',])
->group(function () {
    Route::get('/dashboard', App\Http\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
    Route::get('/applications', App\Http\Livewire\Admin\Applications::class)->name('admin.applications');
    Route::get('/application-portals', App\Http\Livewire\Admin\FormPortal::class)->name('admin.form-portals');
    Route::get('/portal/{id}/schedules', App\Http\Livewire\Admin\ViewSchedules::class)->name('admin.portal-schedule');
    Route::get('/payments', App\Http\Livewire\Admin\Payments::class)->name('admin.payments');

});