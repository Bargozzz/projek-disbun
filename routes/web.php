<?php

use App\Models\Item;
use App\Models\Post;
use App\Models\Varietas;
use App\Models\Komoditas;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommodityController;

Route::get('/', [CommodityController::class, 'index']);
Route::get('/about', [CommodityController::class, 'about']);
Route::get('/posts', [CommodityController::class, 'posts']);
Route::get('/posts/{post:slug}', [CommodityController::class, 'showPost']);
Route::get('/varietas/{varietas}', [CommodityController::class, 'varietas']);
Route::get('/komoditas/{komoditas}', [CommodityController::class, 'komoditas']);
Route::get('/contact', [CommodityController::class, 'contact']);
Route::get('/komoditas-strategis', [CommodityController::class, 'strategis']);
Route::get('/komoditas-prosfektif', [CommodityController::class, 'prosfektif']);
Route::get('/komoditas-unggul-lokal', [CommodityController::class, 'unggul']);

// routes/web.php

Route::get('/komoditas-strategis/item/{item}', [CommodityController::class, 'showVarietasByItemStrategis']);
Route::get('/komoditas-prosfektif/item/{item}', [CommodityController::class, 'showVarietasByItemProsfektif']);
Route::get('/komoditas-unggul-lokal/item/{item}', [CommodityController::class, 'showVarietasByItemUnggul']);

// Add this route to show varietas details
Route::get('/komoditas-strategis/item/{item}/varietas/{varietas}', [CommodityController::class, 'showDetailVarietas']);

Route::get('/varietas/{varietas}', [CommodityController::class, 'showDetailVarietas']);