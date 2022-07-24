<?php

namespace App\Http\Controllers\assets;

use App\Http\Controllers\Controller;
use App\Models\asset\AssetRegisterModel;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
    }

}
