<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::get('/jahanara.com', function () {
    return view('login');
});
Route::get('/jahanara.com/UserDashboard', function () {
    return view('dashboard1');
});
Route::get('/jahanara.com/dashboard', function () {
    return view('ManagerDashboard');
})->name('ManagerDashboard');
Route::post('/jahanara.com/dashboard', [Controller::class, 'login']);
Route::get('/jahanara.com/Register', function () {
    return view('addmember');
});
Route::get('/jahanara.com/Donation', [Controller::class, 'donation'])->name('UserDonation');
Route::get('/jahanara.com/Donations', [Controller::class, 'ManagerDonation'])->name('ManagerDonation');
Route::get('/jahanara.com/Members', [Controller::class, 'members']);

Route::get('/jahanara.com/Overlook', [Controller::class, 'Overlook']);
Route::get('/jahanara.com/Volunteer', [Controller::class, 'Volunteer']);
Route::get('/jahanara.com/Volunteer/1', [Controller::class, 'ShowTask']);
Route::get('/jahanara.com/Account', [Controller::class, 'Account']);
Route::get('/jahanara.com/Message', [Controller::class, 'Message']);



