<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;

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
//Home
Route::get('/', function () {return view('index');})->middleware('guest');
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

//Login & Logout
Route::get('/login', [AuthController::class, 'indexLogin'])->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

//Register
Route::get('/signup', [AuthController::class, 'indexRegister'])->middleware('guest');
Route::post('/signup', [AuthController::class, 'register']);

//E-Book Detail
Route::get('/ebook-detail/{id}', [EbookController::class, 'detail'])->middleware('auth');

//Cart
Route::get('/cart', [TransactionController::class, 'create'])->middleware('auth');
Route::get('/add-cart/{id}', [TransactionController::class, 'add'])->middleware('auth');
Route::get('/delete-cart/{id}', [TransactionController::class, 'delete'])->middleware('auth');
Route::post('/checkout', [TransactionController::class, 'checkout'])->middleware('auth');
Route::get('/success-checkout', [TransactionController::class, 'success'])->middleware('auth');

//Profile
Route::get('/profile', [ProfileController::class, 'create'])->middleware('auth');
Route::post('/update/{id}', [ProfileController::class, 'update'])->middleware('auth');
Route::get('/success-update', [ProfileController::class, 'success'])->middleware('auth');

//Maintenance
Route::get('/maintenance', [MaintenanceController::class, 'create'])->middleware('admin');
Route::get('/update-role/{id}', [MaintenanceController::class, 'createUpdate'])->middleware('admin');
Route::post('/update-role/{id}', [MaintenanceController::class, 'update'])->middleware('admin');
Route::get('/delete-user/{id}', [MaintenanceController::class, 'delete'])->middleware('admin');