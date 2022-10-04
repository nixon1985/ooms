<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('layout');
    }

    function getAllSection(){
        $dataList = DB::table('outlet_section as s')
            ->selectRaw('s.section_id, s.section_name')
            ->get();
        return response()->json($dataList);
    }
}
