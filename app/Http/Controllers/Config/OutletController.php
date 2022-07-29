<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use App\Models\outlet\OutletInfo;
use Illuminate\Http\Request;
use DB;

class OutletController extends Controller
{
    function agreement(){
        return view('outlet.outletinfo');
    }

//    function save(Request $request){
//        // echo $request->outletName;
//       // dd($request->all());
//        return false;
//    }


    public function save(request $request){
//        $request->validate([
//            'outletName' => 'required|unique:tableName';
//        ]);


        $data = array(
            'outlet_name'   => $request->outletName,
            'outlet_type'   => $request->outletType,
            'outlet_size'   => $request->outletSize,
            'outlet_address' => $request->outletAddress,
            'district_id'   => $request->districtId,
            'area_id'       => $request->areaId
        );

        $returnData = array();
        if(DB::table('outlet_info')->insert($data)){
            $returnData['success'] = "Successfully inserted";
        }else{
            $returnData['error'] = "Failed Insert";
            return 0;
        }
        return response()->json($returnData);
       // return redirect()->back()->with('success','successfully inserted');
    }


    function getAllOutlet(){
        $data = OutletInfo::all();
        return response()->json($data);
    }
}
