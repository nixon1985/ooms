<?php

namespace App\Http\Controllers\maintenance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceRequestController extends Controller
{
    function saveServiceRequest(Request $request){
        $data=array(
            'asset_reg_id'  => $request->asset_reg_id,
            'problem_date'  => $request->problem_date,
            'outlet_id'     => $request->outlet_id,
            'user_comment'  => $request->user_comment
        );

        $returnData = array();
        if(DB::table('service_request')->insert($data)){
            $returnData['success'] = "Data save successfully";
        }else{
            $returnData['error'] = "Data save failed";
        }

        DB::table('assets_register')
            ->where('asset_reg_id', $request->asset_reg_id)  // find your user by their email
            ->limit(1)  // optional - to ensure only one record is updated.
            ->update(array('asset_condition' => 2));

        return response()->json($returnData);
    }
}
