<?php

namespace App\Http\Controllers\maintenance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaintenanceController extends Controller
{
    function index()
    {
        //return view('assets.assetRegister', compact('registerAssetList'));
        return view('maintenance.maintenanceConfig');
    }

    function getServiceUI(){
        return view('maintenance.serviceUI');
    }

    function saveProblem(Request $request){
        $data=array(
            'group_id' => $request->group_id,
            'problem_name' => $request->problem_name
        );

        $returnData = array();
        if(DB::table('problem_list')->insert($data)){
            $returnData['success'] = "Data save successfully";
        }else{
            $returnData['error'] = "Data save failed";
        }
        return response()->json($returnData);
    }


    function saveSolution(Request $request){
        $data=array(
            'problem_id' => $request->problem_id,
            'solution_name' => $request->solution_name
        );

        $returnData = array();
        if(DB::table('problem_solution_list')->insert($data)){
            $returnData['success'] = "Data save successfully";
        }else{
            $returnData['error'] = "Data save failed";
        }
        return response()->json($returnData);
    }

    function saveAssetParts(Request $request){
        $data=array(
            'group_id' => $request->sub_group_id,
            'parts_name' => $request->parts_name
        );

        $returnData = array();
        if(DB::table('asset_parts')->insert($data)){
            $returnData['success'] = "Data save successfully";
        }else{
            $returnData['error'] = "Data save failed";
        }
        return response()->json($returnData);
    }





    function getAllProblems(){
        $dataList = DB::table('problem_list')
            ->selectRaw('problem_list.problem_id, problem_list.problem_name, asset_sub_group.sub_group_name')
            ->join('asset_sub_group', 'asset_sub_group.sub_group_id', '=', 'problem_list.group_id')
            // ->groupBy('companies.id')
            // ->orderByDesc('avg_salary')
            ->get();
        return response()->json($dataList);
        // $results = DB::select('select * from users where id = ?', [1]);
    }

    function getAllSolutions(){
        $dataList = DB::table('problem_solution_list')
            ->selectRaw('problem_solution_list.solution_id, problem_list.problem_name, problem_solution_list.solution_name,asset_sub_group.sub_group_name')
            ->join('problem_list', 'problem_list.problem_id', '=', 'problem_solution_list.problem_id')
            ->join('asset_sub_group', 'asset_sub_group.sub_group_id', '=', 'problem_list.group_id')
            // ->groupBy('companies.id')
            // ->orderByDesc('avg_salary')
            ->get();
        return response()->json($dataList);
        // $results = DB::select('select * from users where id = ?', [1]);
    }

    function getAllAssetParts(){
        $dataList = DB::table('asset_parts')
            ->selectRaw('asset_parts.parts_id, asset_parts.parts_name, asset_sub_group.sub_group_name')
            ->join('asset_sub_group', 'asset_sub_group.sub_group_id', '=', 'asset_parts.group_id')
            // ->groupBy('companies.id')
            // ->orderByDesc('avg_salary')
            ->get();
        return response()->json($dataList);
        // $results = DB::select('select * from users where id = ?', [1]);
    }

    public function deleteProblem(Request $id){
        $deleted = DB::table('problem_list')->where('problem_id', '=', $id->problem_id)->delete();
        return $deleted;
    }

    public function deleteSolution(Request $id){
        $deleted = DB::table('problem_solution_list')->where('solution_id', '=', $id->solution_id)->delete();
        return $deleted;
    }

    public function deleteAssetParts(Request $id){
        $deleted = DB::table('asset_parts')->where('parts_id', '=', $id->parts_id)->delete();
        return $deleted;
    }



    /* Service Panel */



    function getIncomingService(){
        $dataList = DB::table('service_request AS s')
            ->selectRaw('s.request_id,s.view_status, s.user_comment,ar.purchase_date,ar.warranty_end_date, ar.photo_path, a.asset_name, o.outlet_name, s.added_on, a.model_no, a.brand_name')
            ->join('assets_register AS ar', 'ar.asset_reg_id', '=', 's.asset_reg_id')
            ->join('asset_list AS a', 'a.asset_id', '=', 'ar.asset_id')
            ->leftJoin('outlet_info AS o', 'o.outlet_id','=','ar.outlet_id')
            ->whereNull('s.token_id')
            ->orderByDesc('s.added_on')
            ->get();
        return response()->json($dataList);
        // $results = DB::select('select * from users where id = ?', [1]);
    }


    function updateReqSeenStatus(Request $request){
        $seenUpdate = DB::table('service_request')
            ->where('request_id',  $request->request_id)
            ->limit(1)
            ->update(array('view_status' =>1));
        return response()->json($seenUpdate);
    }


    function addServiceMaintenance(Request $request){

        $data=array(
            'request_id'                => $request->request_id,
            'service_start_date'        => $request->service_start_date,
            'tentative_delivery_date'   => $request->tentative_delivery_date,
            'user_comment'              => $request->receiverComment,
            'service_status'            => 0
        );

        $returnData = array();
        if(DB::table('service_maintenance')->insert($data)){

            $tokenID = DB::table('service_maintenance AS sm')
                ->selectRaw('Max(sm.token_id) max_token')
                ->value('max_token');

            $seenUpdate = DB::table('service_request')
                ->where('request_id', $request->request_id)
                ->limit(1)
                ->update(array('token_id' => $tokenID));

            $returnData['success'] = "Data save successfully";
        }else{
            $returnData['error'] = "Data save failed";
        }
        return response()->json($returnData);
    }



    function getServiceInProgressData(){
        $dataList = DB::table('service_maintenance AS sp')
            ->selectRaw('sp.token_id,sp.request_id,s.view_status, s.user_comment,ar.purchase_date,ar.warranty_end_date, ar.photo_path, a.asset_id, a.asset_name, o.outlet_name, s.added_on, a.model_no, a.brand_name')
            ->join('service_request AS s','s.request_id','=','sp.request_id')
            ->join('assets_register AS ar', 'ar.asset_reg_id', '=', 's.asset_reg_id')
            ->join('asset_list AS a', 'a.asset_id', '=', 'ar.asset_id')
            ->leftJoin('outlet_info AS o', 'o.outlet_id','=','ar.outlet_id')
            ->where('sp.service_status','=','0')
            ->orderByDesc('sp.added_on')
            ->get();
        return response()->json($dataList);
        // $results = DB::select('select * from users where id = ?', [1]);
    }

    function getIdentifyProblems(Request $request){
        $tokenId = $request->tokenId;
        $assetId = $request->assetId;

        $dataList = DB::table('problem_list AS p')
            ->selectRaw('p.problem_id, p.problem_name, ag.sub_group_name, ind.problem_id identified_problem_id')
            ->join('asset_sub_group AS ag', 'ag.sub_group_id', '=', 'p.group_id')
            ->leftJoin('service_problem_identify AS ind', function($join) use ($tokenId){
                $join->on('ind.problem_id','=','p.problem_id');
                $join->on('ind.token_id','=',DB::raw("'".$tokenId."'"));
            })
            ->where('p.group_id','=',$assetId)
            // ->groupBy('companies.id')
            // ->orderByDesc('avg_salary')
            ->get();
        return response()->json($dataList);
        // $results = DB::select('select * from users where id = ?', [1]);
    }


    function saveIdentifiedProblem(Request $request){

        $array = [];
        for ($i = 0; $i < count($request->problem_list); $i++) {
            $array[] = [
                'problem_id' => $request->problem_list[$i],
                'token_id' => $request->token_id
            ];
        }
        // print_r($array);
        DB::table('service_problem_identify')->insert($array);
    }
}
