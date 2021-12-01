<?php

Route::get('/user', function (\Illuminate\Http\Request $request) {
    return $request->user();
});

Route::get('/post', [\App\Http\Controllers\Api\ApiController::class, 'index'])
    ->middleware('ability:post:list,post:test');
