<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Http\Controllers\CrudController;

use App\Http\Controllers\ExcelController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\UserMiddleware;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// Route::get('/send', function () {
//     Mail::to('mohamedzayed52100@gmail.com')->send(new TestMail());
//     return redirect('/')->with('wait_user' , 'wait till admin make your status true and system send mail to admin to accept you');
// });
Route::get('/send', [MailController::class, 'send']);




Route::get('/', [TaskController::class, 'index']);

Route::post('/login', [TaskController::class, 'login']);
Route::get('/signup', [TaskController::class, 'signup']);
Route::post('/signup_submit', [TaskController::class, 'signup_submit']);


Route::middleware([UserMiddleware::class])->group(function () {
Route::get('/profile', [TaskController::class, 'profile']);
Route::get('/logout', [TaskController::class, 'logout']);
 Route::get('/downloadex', [ExcelController::class , 'downloadex']);
Route::get('/upload', [ExcelController::class , 'upload']);
Route::post('/read', [ExcelController::class , 'read']);




});




//For Admin

Route::any('admin/login', [AdminController::class, 'index']);
Route::any('login_admin_submit', [AdminController::class, 'login_admin_submit']);
Route::any('verify/{id}', [AdminController::class, 'verify']);
