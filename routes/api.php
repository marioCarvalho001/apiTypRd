<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post("rout", function(){
    $taks = [
        "id" =>4,
        "name"=>"phppost"
    ];
    return $taks;
});
Route::get("rout", function(){
    $taks = [
        "id" => 5,
        "name"=>"phppost"
    ];
    return $taks;
});
