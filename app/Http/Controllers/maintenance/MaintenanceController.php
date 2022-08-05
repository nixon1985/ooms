<?php

namespace App\Http\Controllers\maintenance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    function index()
    {
        //return view('assets.assetRegister', compact('registerAssetList'));
        return view('maintenance.maintenanceConfig');
    }
}
