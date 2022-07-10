<?php

namespace App\Http\Controllers\assets;

use App\Http\Controllers\Controller;
use App\Models\asset\AssetSubGroup;
use App\Models\asset\AssetsGroup;
use App\Models\asset\AssetList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssetGroupController extends Controller
{
    public function assetGroup(){
        return view('assets.assetGroupList');
    }


    public function getAllAssetGroup(){
        $data=AssetsGroup::all();
        return response()->json($data);
    }

    public function assetSubGroup(){
        $data=AssetSubGroup::all();
        return view('assets.assetSubGroupList',compact('data'));
    }

    public function saveAssetGroup(Request $request){
        $data=array(
            'group_name' => $request->group_name
        );
        if(DB::table('asset_group')->insert($data)){
            return 1;
        }else{
            return 0;
        }
    }

    public function saveSubGroup(Request $request){
        $data=array(
            'group_id' => $request->group_id,
            'sub_group_name' => $request->sub_group_name
        );
        if(DB::table('asset_sub_group')->insert($data)){
            return 1;
        }else{
            return 0;
        }
    }


    public function saveAssets(Request $request){
        $data=array(
            'sub_group_id' => $request->sub_group_id,
            'asset_name' => $request->asset_name,
            'model_no' => $request->model_no,
            'brand_name' => $request->brand_name
        );
        if(DB::table('asset_list')->insert($data)){
            return 1;
        }else{
            return 0;
        }
    }




    public function getAllAssetSubGroup(){
        $allSubGroupData=AssetSubGroup::all();
        return response()->json($allSubGroupData);
    }

    public function deleteAssetGroup(Request $id){
        $deleted = DB::table('asset_group')->where('group_id', '=', $id->group_id)->delete();
        return $deleted;
    }


    public function deleteSubGroup(Request $id){
//        AssetSubGroup::find($id->sub_group_id)->delete($id->sub_group_id);
//        return response()->json([
//
//            'success' => 'Record deleted successfully!'
//
//        ]);
        // echo $id;
        $deleted = DB::table('asset_sub_group')->where('sub_group_id', '=', $id->sub_group_id)->delete();
        return $deleted;
    }

    public function getAllAssetList(){
        $data=AssetList::all();
        return response()->json($data);
    }

}
