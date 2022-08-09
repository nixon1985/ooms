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
        if(DB::table('problem_list')->insert($data)){
            $returnData['success'] = "Data save successfully";
        }else{
            $returnData['error'] = "Data save failed";
            return 0;
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
}
