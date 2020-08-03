<?php

namespace App\Http\Controllers\Super_Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        return view('superAdmin.homeSuperAdmin');
    }
}
