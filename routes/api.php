<?php

use App\Http\Controllers\DistrictsController;
use App\Http\Controllers\ProvincesController;
use App\Http\Controllers\RegenciesController;
use App\Http\Controllers\VillagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/provinces/all', [ProvincesController::class, 'getAll']);
Route::get('/province/{province_id}', [ProvincesController::class, 'get']);
Route::get('/regencies/by-province/{province_id}', [RegenciesController::class, 'getByProvince']);
Route::get('/districts/by-regency/{regency_id}', [DistrictsController::class, 'getByRegency']);
Route::get('/villages/by-district/{district_id}', [VillagesController::class, 'getByDistrict']);
