<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $content = ['endpoint' => 'process-string', 'key' => 'name', 'exemple' => 'name: wata'];

    return json_encode($content);
});


Route::post('/process-string', [\App\Http\Controllers\NameController::class, 'processString']);
