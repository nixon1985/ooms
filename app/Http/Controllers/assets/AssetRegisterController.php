<?php

namespace App\Http\Controllers\assets;

use App\Http\Controllers\Controller;
use App\Models\asset\AssetRegisterModel;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AssetRegisterController extends Controller
{
    function index(){
        $registerAssetList = $this->getRegisterAssetList();
        return view('assets.assetRegister',compact('registerAssetList'));
    }

    function addAssetsRegister(Request $request){

        $request->validate([
            'image' => 'required|max:5048'
        ]);
        $newImageName = time().'-'.$request->asset_id.'.'.$request->image->extension();
        $request->image->move(public_path('asset_image'),$newImageName);


        $data=array(
            'asset_id' => $request->asset_id,
            'purchase_date' => $request->purchase_date,
            'warranty_end_date' => $request->warranty_end_date,
            'supplier_id'=>$request->supplier_id,
            'outlet_id'=>$request->outlet_id,
            'photo_path'=>$newImageName
        );




        if(DB::table('assets_register')->insert($data)){
            $p = QrCode::size(100)->generate('A basic example of QR code!');
            $data = array();
            $data['qrcode'] = "$p";
            $data['reg_id'] = '38480008';
            return response()->json($data);
        }else{
            return 0;
        }
    }



    function getRegisterAssetList(){
        $dataList = DB::table('assets_register')
            ->selectRaw('assets_register.asset_reg_id, asset_list.asset_name, asset_list.model_no, asset_list.brand_name, assets_register.purchase_date, assets_register.warranty_end_date, assets_register.photo_path, outlet_info.outlet_name')
            ->join('asset_list', 'asset_list.asset_id', '=', 'assets_register.asset_id')
            ->leftJoin('outlet_info', 'outlet_info.outlet_id', '=','assets_register.outlet_id')
            // ->groupBy('companies.id')
            // ->orderByDesc('avg_salary')
            ->get();
        return response()->json($dataList);
        // $results = DB::select('select * from users where id = ?', [1]);
    }

}
