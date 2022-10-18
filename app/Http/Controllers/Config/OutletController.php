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
            'area_id'       => $request->areaId,
            'outlet_short_code' => $request->shortCode,
            'bu_id'         => $request->businessId
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

    function saveOutletAgreement(Request $request){

        $request->validate([
            'image' => 'required|max:5048'
        ]);
        //$newImageName = time().'-'.$request->asset_id.'.'.$request->image->extension();
        $newImageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('agreement_file'),$newImageName);


        $data=array(
            'asset_id' => $request->asset_id,
            'land_owner_name' => $request->land_owner_name,
            'owner_contact'=> $request->owner_contact,
            'agreement_start_date' => $request->purchase_date,
            'agreement_expire_date' => $request->warranty_end_date,
            'agreement_month'=>$request->supplier_id,
            'outlet_size'=>$request->outlet_size,
            'rent_amount'=>$request->rent_amount,
            'rent_increase_month'=>$request->rent_increase_month,
            'increase_percentage'=>$request->increase_percentage,
            'advance_amount'=>$request->advance_amount,
            'adj_amount'=>$request->adj_amount,
            'agreement_file'=>$newImageName
        );




        if(DB::table('assets_register')->insert($data)){
            $data['reg_id'] = '38480008';
            return response()->json($data);
        }else{
            return 0;
        }
    }

}
