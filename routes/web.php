<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;
use App\Http\Controllers\Config\OutletController;
use App\Http\Controllers\assets\AssetGroupController;
use App\Http\Controllers\assets\AssetConfigController;
use App\Http\Controllers\assets\AssetRegisterController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('login');
});


Route::get('/dashboard', function () {
    return view('layout');
});

Route::get('/dashboard2', function () {
    return view('dashboard');
});

//Route::get('/outletinfo', function () {
//     return view('outlet.outletinfo');
//});

Route::get('/empinfo', function () {
    return view('hr.empinfo');
});

Route::get('/servicing', function () {
    return view('servicing.schedule_service');
});

Route::get('/complain', function () {
    return view('servicing.complain');
});

Route::get('/service_update', function () {
    return view('servicing.service_update');
});



Route::get('/outletinfo',[OutletController::class,'agreement'])->name('outletinforr.user');
Route::post('/outletinfoSave',[OutletController::class,'save'])->name('outletinfoSave7.save');



//__ Asset Config __//
Route::get('/assetConfigUi',[AssetConfigController::class,'assetConfigUi'])->name('assetConfigUi');

Route::get('/assetGroup',[AssetGroupController::class,'assetSubGroup'])->name('assetSubGroup');
Route::get('/getAllAssetGroup',[AssetGroupController::class,'getAllAssetGroup'])->name('getAllAssetGroup');
Route::get('/getAllAssetList',[AssetGroupController::class,'getAllAssetList'])->name('getAllAssetList');

Route::post('/saveAssetGroup',[AssetGroupController::class,'saveAssetGroup'])->name('saveAssetGroup');
Route::post('/saveSubGroup',[AssetGroupController::class,'saveSubGroup'])->name('saveSubGroup');
Route::post('/saveAssets',[AssetGroupController::class,'saveAssets'])->name('saveAssets');
//__Get Sub-group__//
Route::get('/getAllAssetSubGroup',[AssetGroupController::class,'getAllAssetSubGroup'])->name('getAllAssetSubGroup');
//__Delete Sub-group __//
// Route::get('/deleteSubGroup/{id}', function () {
//    echo "hello";
// });
Route::delete('/deleteAssetGroup',[AssetGroupController::class,'deleteAssetGroup'])->name('deleteAssetGroup');
Route::delete('/deleteSubGroup',[AssetGroupController::class,'deleteSubGroup'])->name('deleteSubGroup');
Route::delete('/deleteAsset',[AssetGroupController::class,'deleteAsset'])->name('deleteAsset');


Route::get('/qrcode', function () {
    return QrCode::size(300)->generate('A basic example of QR code!');
});



// Asset Register


Route::get('/assetRegister',[AssetRegisterController::class,'index'])->name('assetConfigUi');

