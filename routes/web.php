<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Install\InstallComponent;
use App\Livewire\Install\WelcomeComponent;

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

Route::get('/',WelcomeComponent::class);
Route::get('app-install',InstallComponent::class)->name('app-install');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
