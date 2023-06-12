<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MakananAPIController;

Route::get('/makanan', [MakananAPIController::class, 'index']);
