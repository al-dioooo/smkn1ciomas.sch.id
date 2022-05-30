<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::middleware('guest')->group(function () {
//     Route::get('/', [PageController::class, 'index'])->name('index');
// });

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'team'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::as('dashboard.')->group(function () {
        Route::resource('student', StudentController::class);
        Route::post('student/import', [StudentController::class, 'import'])->name('student.import');
        Route::resource('staff', StaffController::class);
        Route::post('staff/import', [StaffController::class, 'import'])->name('staff.import');

        Route::delete('student/{student}/certificate/{certificate}/delete', [StudentController::class, 'deleteCertificate'])->name('student.certificate.destroy');
        Route::delete('staff/{staff}/pair-pns-identity/delete', [StaffController::class, 'deletePairPNSIdentity'])->name('staff.pair-pns-identity.destroy');
    });
});

require(__DIR__ . './jetstream.php');
