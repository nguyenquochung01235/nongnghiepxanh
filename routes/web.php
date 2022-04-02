<?php

use App\Http\Controllers\Admin\CategoryNewsController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SelfInforController;
use App\Http\Controllers\Admin\UploadImgController;
use App\Http\Controllers\NongNghiep\MainController as NongNghiepMainController;
use App\Http\Controllers\NongNghiep\NewsController as NongNghiepNewsController;
use App\Http\Controllers\NongNghiep\SignInController;
use App\Http\Controllers\NongNghiep\SignUpController;
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
//Nong Nghiệp Xanh

Route::get('/', [NongNghiepMainController::class, 'index']);
Route::get('/sign-up', [SignUpController::class, 'index']);
Route::post('/sign-up/create', [SignUpController::class, 'create']);

Route::get('/sign-in', [SignInController::class, 'index']);
Route::post('/sign-in/store', [SignInController::class, 'store']);
Route::get('/log-out', [SignInController::class, 'logout']);

Route::get('/news/detail/{news}', [NongNghiepNewsController::class, 'newsDetailByID']);





//Administrator
Route::get('/administrator/login', [LoginController::class, 'index'])->name('login');
Route::get('/administrator/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/administrator/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::prefix('administrator')->group(function () {
        Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
        
        // Department
        Route::prefix('department')->group(function () {
            Route::get('/', [DepartmentController::class, 'index']);
            Route::get('add', [DepartmentController::class, 'add']);
            Route::post('add/create', [DepartmentController::class, 'create']);
            Route::get('view/{department}', [DepartmentController::class, 'view']);
            Route::get('edit/{department}', [DepartmentController::class, 'show']);
            Route::post('update/{department}', [DepartmentController::class, 'update']);
            Route::delete('delete', [DepartmentController::class, 'delete']);
        });

        // Job
        Route::prefix('job')->group(function () {
            Route::get('/', [JobController::class, 'index']);
            Route::get('add', [JobController::class, 'add']);
            Route::post('add/create', [JobController::class, 'create']);
            Route::get('view/{job}', [JobController::class, 'view']);
            Route::get('edit/{job}', [JobController::class, 'show']);
            Route::post('update/{job}', [JobController::class, 'update']);
            Route::delete('delete', [JobController::class, 'delete']);

            Route::post('getjobbydepartment', [JobController::class, 'getJobByDepartmentAjax']);
            Route::post('getsalaryofjob', [JobController::class, 'getSalaryOfJobAjax']);

        });

        //Employee
        Route::prefix('employee')->group(function () {
            Route::get('/', [EmployeeController::class, 'index']);
            Route::get('add', [EmployeeController::class, 'add']);
            Route::post('add/create', [EmployeeController::class, 'create']);
            Route::get('view/{id}', [EmployeeController::class, 'view']);
            Route::get('edit/{id}', [EmployeeController::class, 'show']);
            Route::post('update/{id}', [EmployeeController::class, 'update']);
            Route::delete('delete', [EmployeeController::class, 'delete']);
        });



        //Category - News
        Route::prefix('category-news')->group(function () {
            Route::get('/', [CategoryNewsController::class, 'index']);
            Route::get('/add', [CategoryNewsController::class, 'add']);
            Route::post('/add/create', [CategoryNewsController::class, 'create']);
            // Route::get('/view/{id}', [CategoryNewsController::class, 'view']);
            Route::get('edit/{categorynews}', [CategoryNewsController::class, 'show']);
            Route::post('update/{categorynews}', [CategoryNewsController::class, 'update']);
            Route::delete('delete', [CategoryNewsController::class, 'delete']);
        });
        //News
        Route::prefix('news')->group(function () {
            Route::get('/', [NewsController::class, 'index']);
            Route::get('/add', [NewsController::class, 'add']);
            Route::post('/add/create', [NewsController::class, 'create']);
            Route::post('/add/upload/img', [NewsController::class, 'upload']);
            Route::get('edit/{news}', [NewsController::class, 'show']);
            Route::post('update/{news}', [NewsController::class, 'update']);
            Route::delete('delete', [NewsController::class, 'delete']);


            Route::get('view/{news}', [NewsController::class, 'view']);
        });


        Route::get('/{id}', [SelfInforController::class, 'index']);
        Route::post('/{id}/admin/update', [SelfInforController::class, 'update']);
        Route::post('/upload/{admin}/img', [UploadImgController::class, 'store']);

    });
});









