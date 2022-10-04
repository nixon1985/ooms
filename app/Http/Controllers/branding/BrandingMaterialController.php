<?php

namespace App\Http\Controllers\branding;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandingMaterialController extends Controller
{
    function index()
    {
        return view('branding.brandingMaterial');
    }

    function saveBrandingArea(Request $request){
        $data=array(
            'outlet_id'  => $request->outletId,
            'section_id' => $request->sectionId,
            'area_size'  => $request->areaSize
        );

        $returnData = array();
        if(DB::table('branding_area')->insert($data)){
            $returnData['success'] = "Data save successfully";
        }else{
            $returnData['error'] = "Data save failed";
        }
        return response()->json($returnData);
    }

    function getAllBrandingArea(){
        $dataList = DB::table('branding_area as a')
            ->selectRaw('a.area_id, a.area_size, o.outlet_name, s.section_name')
            ->join('outlet_info as o', 'o.outlet_id', '=', 'a.outlet_id')
            ->join('outlet_section as s', 's.section_id', '=', 'a.section_id')
            // ->groupBy('companies.id')
            // ->orderByDesc('avg_salary')
            ->get();
        return response()->json($dataList);
    }

    function getOutletWiseBrandingArea(){
        $outletId = $_GET['outletId'];
        $dd = 1;
        $dataList = DB::table('branding_area as a')
            ->selectRaw('a.area_id, a.area_size, s.section_name, m.material_status')
            ->join('outlet_section as s', 's.section_id', '=', 'a.section_id')
            ->leftJoin('branding_material AS m', function($join) use ($dd){
                $join->on('m.area_id','=','a.area_id');
                $join->on('m.material_status','=',DB::raw("'".$dd."'"));
            })
            ->where('a.outlet_id','=',$outletId)
            // ->groupBy('companies.id')
            // ->orderByDesc('avg_salary')
            ->get();
        return response()->json($dataList);
        // $results = DB::select('select * from users where id = ?', [1]);
    }


}
