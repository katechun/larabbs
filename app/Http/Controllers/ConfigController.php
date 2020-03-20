<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    //
    public function config(){
        return config('app.timezone');
    }
}
