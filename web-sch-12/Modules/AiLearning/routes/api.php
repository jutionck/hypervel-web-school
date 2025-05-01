<?php

use Illuminate\Support\Facades\Route;
use Modules\AiLearning\Http\Controllers\AiLearningController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('ailearnings', AiLearningController::class)->names('ailearning');
});
