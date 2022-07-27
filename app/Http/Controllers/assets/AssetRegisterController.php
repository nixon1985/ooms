<?php

namespace App\Http\Controllers\assets;

use App\Http\Controllers\Controller;
use App\Models\asset\AssetRegisterModel;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class AssetRegisterController extends Controller
{
    function index(){
        return view('assets.assetRegister');
    }

    function addAssetsRegister(Request $request){

        $request->validate([
            'image' => 'required|max:5048'
        ]);
        $newImageName = time().'-'.$request->asset_id.'.'.$request->image->extension();
        $request->image->move(public_path('asset_image'),$newImageName);
        // $car = AssetRegisterModel::create([]);

        $data=array(
            'asset_id' => $request->asset_id,
            'purchase_date' => $request->purchase_date,
            'warranty_end_date' => $request->warranty_end_date,
            'supplier_id'=>$request->supplier_id,
            'outlet_id'=>$request->outlet_id,
            'photo_path'=>$newImageName
        );

        if(DB::table('assets_register')->insert($data)){
            return 1;
        }else{
            return 0;
        }
    }

}
