<?php

namespace App\Http\Controllers\assets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetRegisterController extends Controller
{
    function index(){
        return view('assets.assetRegister');
    }

}
