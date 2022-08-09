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


}
