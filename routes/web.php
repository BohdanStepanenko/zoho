<?php

use App\Http\Controllers\ZohoLeadsController;
use com\zoho\crm\api\record\Leads;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZohoAuthController;
use App\Http\Controllers\ZohoDealController;

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

// Zoho Auth
Route::get('/', [ZohoAuthController::class, 'index'])->name('home');
Route::post('zoho-auth', [ZohoAuthController::class, 'authZoho'])->name('zoho_auth');
Route::get('zoho-token-generate', [ZohoAuthController::class, 'generateToken'])->name('zoho-token-generate');

//Zoho Leads
Route::get('leads', [ZohoLeadsController::class, 'index'])->name('leads');
Route::post('add-leads', [ZohoLeadsController::class, 'store'])->name('add-leads');
Route::get('show-lead', [ZohoLeadsController::class, 'show'])->name('show-lead');
Route::put('edit-lead', [ZohoLeadsController::class, 'update'])->name('edit-lead');
Route::delete('destroy',[ZohoLeadsController::class, 'destroy'])->name('destroy-lead');
