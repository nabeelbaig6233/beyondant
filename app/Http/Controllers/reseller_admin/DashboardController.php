<?php

namespace App\Http\Controllers\reseller_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('reseller.admin.welcome');
    }
}
