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

    function getAllPendingList(){
        $dataList = DB::table('service_request AS s')
            ->selectRaw('s.asset_reg_id as pending')
            ->join('assets_register AS ar', 'ar.asset_reg_id', '=', 's.asset_reg_id')
            ->join('asset_list AS a', 'a.asset_id', '=', 'ar.asset_id')
            ->leftJoin('outlet_info AS o', 'o.outlet_id','=','ar.outlet_id')
            ->whereNull('s.token_id')
            ->orderByDesc('s.added_on')
            ->count();
        return response()->json($dataList);
    }

    function getDashServiceInProgressData(){
        $dataList = DB::table('service_maintenance AS sp')
            ->selectRaw('sp.token_id, sp.request_id, ar.asset_reg_id, s.view_status, s.user_comment,ar.purchase_date,ar.warranty_end_date, ar.photo_path, a.asset_id, a.asset_name, o.outlet_name, s.added_on, a.model_no, a.brand_name')
            ->join('service_request AS s','s.request_id','=','sp.request_id')
            ->join('assets_register AS ar', 'ar.asset_reg_id', '=', 's.asset_reg_id')
            ->join('asset_list AS a', 'a.asset_id', '=', 'ar.asset_id')
            ->leftJoin('outlet_info AS o', 'o.outlet_id','=','ar.outlet_id')
            ->where('sp.service_status','=','0')
            ->orderByDesc('sp.added_on')
            ->count();
        return response()->json($dataList);
        // $results = DB::select('select * from users where id = ?', [1]);
    }

    function getDashServiceDoneData(){
        $dataList = DB::table('service_maintenance AS sp')
            ->selectRaw('sp.token_id, sp.request_id, ar.asset_reg_id, s.view_status, s.user_comment,ar.purchase_date,ar.warranty_end_date, ar.photo_path, a.asset_id, a.asset_name, o.outlet_name, s.added_on, a.model_no, a.brand_name')
            ->join('service_request AS s','s.request_id','=','sp.request_id')
            ->join('assets_register AS ar', 'ar.asset_reg_id', '=', 's.asset_reg_id')
            ->join('asset_list AS a', 'a.asset_id', '=', 'ar.asset_id')
            ->leftJoin('outlet_info AS o', 'o.outlet_id','=','ar.outlet_id')
            ->where('sp.service_status','=','1')
            ->where('sp.delivered_status','=','0')
            ->orderByDesc('sp.added_on')
            ->count();
        return response()->json($dataList);
        // $results = DB::select('select * from users where id = ?', [1]);
    }

    function getDashServiceDamageData(){
        $dataList = DB::table('service_maintenance AS sp')
            ->selectRaw('sp.token_id, sp.request_id, ar.asset_reg_id, s.view_status, s.user_comment,ar.purchase_date,ar.warranty_end_date, ar.photo_path, a.asset_id, a.asset_name, o.outlet_name, s.added_on, a.model_no, a.brand_name')
            ->join('service_request AS s','s.request_id','=','sp.request_id')
            ->join('assets_register AS ar', 'ar.asset_reg_id', '=', 's.asset_reg_id')
            ->join('asset_list AS a', 'a.asset_id', '=', 'ar.asset_id')
            ->leftJoin('outlet_info AS o', 'o.outlet_id','=','ar.outlet_id')
            ->where('sp.service_status','=','2')
            ->where('sp.delivered_status','=','0')
            ->orderByDesc('sp.added_on')
            ->count();
        return response()->json($dataList);
    }

    function getAllBusinessUnit(){
        $dataList = DB::table('business_unit as b')
            ->selectRaw('b.business_id as id, b.business_name as text')
            ->get();
        return response()->json($dataList);
    }


}
