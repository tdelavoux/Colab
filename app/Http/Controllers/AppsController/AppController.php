<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Color;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getColors()
    {
        $color = Color::where('active', 1)->pluck('hexaCode');
        return \json_encode($color);
    }
}
