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
        return view('assets.assetRegister');
    }

    function addAssetsRegister(Request $request){

//        $request->validate([
//            'image' => 'required|max:5048'
//        ]);
        //$newImageName = time().'-'.$request->asset_id.'.'.$request->image->extension();
        //$request->image->move(public_path('asset_image'),$newImageName);


//        $data=array(
//            'asset_id' => $request->asset_id,
//            'purchase_date' => $request->purchase_date,
//            'warranty_end_date' => $request->warranty_end_date,
//            'supplier_id'=>$request->supplier_id,
//            'outlet_id'=>$request->outlet_id,
//            'photo_path'=>$newImageName
//        );

        $p = QrCode::size(100)->generate('A basic example of QR code!');
        $data = array();
        $data['qrcode'] = "$p";
        $data['reg_id'] = '38480008';
        return response()->json($data);
        // echo json_encode($data);


//        if(DB::table('assets_register')->insert($data)){
//            // return QrCode::size(300)->generate('A basic example of QR code!');
//            return QrCode::size(200)->generate('A basic example of QR code!');
//        }else{
//            return 0;
//        }
    }

}
