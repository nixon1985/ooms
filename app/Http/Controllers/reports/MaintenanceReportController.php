<?php

namespace App\Http\Controllers\reports;

use App\Http\Controllers\Controller;
use App\Models\asset\AssetRegisterModel;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;


class MaintenanceReportController extends Controller
{
    function index(){
        $registerAssetList = $this->getRegisterAssetList();
        //echo "Page Loading test.....";
        return view('reports.maintenance.newRequestList',compact('registerAssetList'));
    }

    function getRegisterAssetList(){
        $dataList = DB::table('assets_register')
            ->selectRaw('assets_register.asset_reg_id, asset_list.asset_name, asset_list.model_no, asset_list.brand_name, assets_register.purchase_date, assets_register.warranty_end_date, assets_register.photo_path,outlet_info.outlet_id,outlet_info.outlet_name,assets_register.asset_condition')
            ->join('asset_list', 'asset_list.asset_id', '=', 'assets_register.asset_id')
            ->leftJoin('outlet_info', 'outlet_info.outlet_id', '=','assets_register.outlet_id')
            // ->groupBy('companies.id')
            // ->orderByDesc('avg_salary')
            ->get();
        return response()->json($dataList);
        // $results = DB::select('select * from users where id = ?', [1]);
    }

}
