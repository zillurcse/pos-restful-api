<?php

namespace App\Http\Controllers\ZATCA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ZatcaController extends Controller
{
    public function index(Request $request){
        return 'working';
    }

    public function setting(Request $request){
       return 1;
    }
}
