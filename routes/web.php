<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Exam;

Route::get('/', [Exam::class, 'index']);
