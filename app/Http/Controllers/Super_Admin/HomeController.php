<?php

namespace App\Http\Controllers\Super_Admin;

use App\pengunjung;
use Carbon\Carbon;
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

    public function chart()
    {
        $visitors = pengunjung::all();
        $results = [];
        $year = Carbon::now()->year;

        foreach ($visitors as $key => $visitor) {
            $type = $visitor->Motor->jenis->name;
            $count = [];
            for ($i = 1; $i <= 12; $i++) {
                $countVisitor = pengunjung::whereMonth('created_at', $i)->whereYear('created_at', $year)->get()->count();
                array_push($count, $countVisitor);
            }
            $item = [
                "name" => $type,
                "data" => $count,

            ];
            if (!in_array($item, $results)){
                $results[$key] = $item;
            }
        }

        return response()->json($results);
    }
}
