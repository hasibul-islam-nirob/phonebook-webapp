<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\ContactListController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginRegisterController;
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


Route::get('/dashboard',[AdminHomeController::class, 'indexPage'])->middleware('userLogin');

Route::get('/',[HomeController::class, 'indexPage']);


Route::get('/contact-list',[ContactListController::class, 'indexPage'])->middleware('userLogin');
Route::post('/onContactSave',[ContactListController::class, 'onContactSave'])->middleware('userLogin');
Route::get('/getContactList',[ContactListController::class, 'getContactList'])->middleware('userLogin');
Route::post('/SearchContact',[ContactListController::class, 'SearchContact'])->middleware('userLogin');

Route::get('/user-login',[LoginRegisterController::class, 'indexPage']);
Route::post('/registerNewUser',[LoginRegisterController::class, 'onRegister']);
Route::post('/userLogin',[LoginRegisterController::class, 'userLogin']);
Route::get('/logOut',[LoginRegisterController::class, 'onLogOut']);
