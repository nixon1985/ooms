<?php

namespace App\Http\Controllers\assets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetConfigController extends Controller
{
    public function assetConfigUi(){
        return view('assets.assetConfig');
    }
}
