<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\TechstackController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\ExperienceController;
use App\Http\Controllers\admin\CertificateController;
use App\Http\Controllers\admin\DashboardController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('techstacks', TechstackController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('experiences', ExperienceController::class);
    Route::resource('certificates', CertificateController::class);
});

// Frontend Routes
Route::name('frontend.')->group(function () {
    Route::get('/projects', [\App\Http\Controllers\Frontend\ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/{project}', [\App\Http\Controllers\Frontend\ProjectController::class, 'show'])->name('projects.show');
    
    Route::get('/experiences', [\App\Http\Controllers\Frontend\ExperienceController::class, 'index'])->name('experiences.index');
    Route::get('/experiences/{experience}', [\App\Http\Controllers\Frontend\ExperienceController::class, 'show'])->name('experiences.show');
    
    Route::get('/techstacks', [\App\Http\Controllers\Frontend\TechstackController::class, 'index'])->name('techstacks.index');
    
    Route::get('/certificates', [\App\Http\Controllers\Frontend\CertificateController::class, 'index'])->name('certificates.index');
});



// require __DIR__.'/auth.php';
// Hapus atau komentari route register
// require __DIR__.'/auth.php';

// Ganti dengan hanya menyertakan route login
Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');
    
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
