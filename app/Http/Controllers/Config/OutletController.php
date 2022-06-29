<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class OutletController extends Controller
{
    function agreement(){
        return view('outlet.outletinfo');
    }

//    function save(Request $request){
//        // echo $request->outletName;
//       // dd($request->all());
//        return false;
//    }


    public function save(request $request){
//        $request->validate([
//            'outletName' => 'required|unique:tableName';
//        ]);


        $data=array(
            'name'=>$request->outletName
        );

        DB::table('outlet_info2')->insert($data);
        return redirect()->back()->with('success','successfully inserted');
    }
}
