<?php

namespace App\Http\Controllers\Super_Admin;

use App\Jenis;
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

        //     $pengunjung = pengunjung::orderBy('name', 'ASC')->get();
        //     $created_at = [];
        //    foreach ($pengunjung as $p) {
        //        $created_at[] = $p['created_at'];
        //        $bulan[] = substr($p['created_at'], 5,2);

        //    }
        //    $oktober = count($bulan);
        //     return $oktober;
        return view('superAdmin.homeSuperAdmin', compact('pengunjung'));
    }

    public function chart()
    {
        $visitors = pengunjung::all();

        $results = [];
        $year = Carbon::now()->year;
        $count = [];

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
            if (!in_array($item, $results)) {
                array_push($results, $item);
            }
        }
        return response()->json($results);
    }
}
