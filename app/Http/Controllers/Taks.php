<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Taks extends Controller
{
    public function index()
    {
        $taks = [
            "id" =>1,
            "name"=>"phppost"
        ];
        return $taks;
    }
    public function indexget()
    {
        $taks = [
            "id" =>1,
            "name"=>"phpget"
        ];
        return $taks;
    }
}
