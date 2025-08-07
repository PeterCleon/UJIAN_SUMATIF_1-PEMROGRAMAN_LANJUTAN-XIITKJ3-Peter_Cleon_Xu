<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::prefix('students')->group(function(){

	Route::get('/', [StudentController::class, 'showall']);

	Route::get('/{id}', [StudentController::class, 'show']);

});