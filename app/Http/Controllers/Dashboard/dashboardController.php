<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    public function index(){
        return view('back.index');
    }
}
