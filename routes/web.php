<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/',[SiteController::class,'index']);
Route::post('/detalhes',[SiteController::class,'detalhes']);
