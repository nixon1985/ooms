<?php

use App\Http\Controllers\maintenance\MaintenanceController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;
use App\Http\Controllers\Config\OutletController;
use App\Http\Controllers\hr\EmployeeClr;

use App\Http\Controllers\assets\AssetGroupController;
use App\Http\Controllers\assets\AssetConfigController;
use App\Http\Controllers\assets\AssetRegisterController;
use App\Http\Controllers\maintenance\ServiceRequestController;





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

// Route::get('/empinfo', function () {
//     return view('hr.empinfo');
// });

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
Route::get('/getAllOutlet',[OutletController::class,'getAllOutlet'])->name('getAllOutlet');



//// HRM starts
Route::get('/employeeInfo',[EmployeeClr::class,'employeeInfo'])->name('employeeInfo');

Route::get('/getAllEmployee',[EmployeeClr::class,'getAllEmployee'])->name('getAllEmployee');
Route::get('/getAllDesignation',[EmployeeClr::class,'getAllDesignation'])->name('getAllDesignation');


Route::post('/saveEmployeeBasicInfo',[EmployeeClr::class,'saveEmployeeBasicInfo'])->name('saveEmployeeBasicInfo');
Route::post('/saveEmployeeJoiningInfo',[EmployeeClr::class,'saveEmployeeJoiningInfo'])->name('saveEmployeeJoiningInfo');
Route::post('/updateEmployeeJoiningInfo',[EmployeeClr::class,'updateEmployeeJoiningInfo'])->name('updateEmployeeJoiningInfo');
Route::post('/saveEmployeeEduInfo',[EmployeeClr::class,'saveEmployeeEduInfo'])->name('saveEmployeeEduInfo');
Route::post('/saveEmployeeAttendInfo',[EmployeeClr::class,'saveEmployeeAttendInfo'])->name('saveEmployeeAttendInfo');

Route::get('/employeeByID/{id}',[EmployeeClr::class,'employeeByID'])->name('employeeByID');
Route::get('/joiningByID/{id}',[EmployeeClr::class,'joiningByID'])->name('joiningByID');
Route::get('/editJoiningByID/{id}',[EmployeeClr::class,'editJoiningByID'])->name('editJoiningByID');
Route::get('/eduByID/{id}',[EmployeeClr::class,'eduByID'])->name('eduByID');
Route::get('/editEduByID/{id}',[EmployeeClr::class,'editEduByID'])->name('editEduByID');
Route::get('/attendByID/{id}',[EmployeeClr::class,'attendByID'])->name('attendByID');
Route::get('/editAttendByID/{id}',[EmployeeClr::class,'editAttendByID'])->name('editAttendByID');
Route::delete('/deleteEmpJoiningInfo/{id}',[EmployeeClr::class,'deleteEmpJoiningInfo'])->name('deleteEmpJoiningInfo');
Route::delete('/deleteEmpEduInfo/{id}',[EmployeeClr::class,'deleteEmpEduInfo'])->name('deleteEmpEduInfo');
Route::delete('/deleteEmpAttendInfo/{id}',[EmployeeClr::class,'deleteEmpAttendInfo'])->name('deleteEmpAttendInfo');
// Route::get('/assetGroup',[AssetGroupController::class,'assetSubGroup'])->name('assetSubGroup');
// Route::get('/getAllAssetGroup',[AssetGroupController::class,'getAllAssetGroup'])->name('getAllAssetGroup');
// Route::get('/getAllAssetList',[AssetGroupController::class,'getAllAssetList'])->name('getAllAssetList');

// Route::post('/saveAssetGroup',[AssetGroupController::class,'saveAssetGroup'])->name('saveAssetGroup');
// Route::post('/saveSubGroup',[AssetGroupController::class,'saveSubGroup'])->name('saveSubGroup');
// Route::post('/saveAssets',[AssetGroupController::class,'saveAssets'])->name('saveAssets');

// Route::delete('/deleteAssetGroup',[AssetGroupController::class,'deleteAssetGroup'])->name('deleteAssetGroup');
// Route::delete('/deleteSubGroup',[AssetGroupController::class,'deleteSubGroup'])->name('deleteSubGroup');
// Route::delete('/deleteAsset',[AssetGroupController::class,'deleteAsset'])->name('deleteAsset');
//// HRM ends


//__ Asset Config __//
Route::get('/assetConfigUi',[AssetConfigController::class,'assetConfigUi'])->name('assetConfigUi');

Route::get('/assetGroup',[AssetGroupController::class,'assetSubGroup'])->name('assetSubGroup');
Route::get('/getAllAssetGroup',[AssetGroupController::class,'getAllAssetGroup'])->name('getAllAssetGroup');
Route::get('/getAllAssetSubGroup',[AssetGroupController::class,'getAllAssetSubGroup'])->name('getAllAssetSubGroup');
Route::get('/getAllAssetList',[AssetGroupController::class,'getAllAssetList'])->name('getAllAssetList');

Route::post('/saveAssetGroup',[AssetGroupController::class,'saveAssetGroup'])->name('saveAssetGroup');
Route::post('/saveSubGroup',[AssetGroupController::class,'saveSubGroup'])->name('saveSubGroup');
Route::post('/saveAssets',[AssetGroupController::class,'saveAssets'])->name('saveAssets');

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
Route::post('/addAssetsRegister',[AssetRegisterController::class,'addAssetsRegister'])->name('addAssetsRegister');
Route::get('/getAllRegisterAssetList',[AssetRegisterController::class,'getRegisterAssetList'])->name('getAllRegisterAssetList');

// Maintenance Configure
Route::get('/maintenanceConfig',[MaintenanceController::class, 'index'])->name('maintenanceConfig');
Route::post('/saveProblem',[MaintenanceController::class,'saveProblem'])->name('saveProblem');
Route::post('/saveSolution',[MaintenanceController::class,'saveSolution'])->name('saveSolution');
Route::post('/saveAssetParts',[MaintenanceController::class,'saveAssetParts'])->name('saveAssetParts');

Route::get('/getAllProblems',[MaintenanceController::class,'getAllProblems'])->name('getAllProblems');
Route::get('/getAllSolutions',[MaintenanceController::class,'getAllSolutions'])->name('getAllSolutions');
Route::get('/getAllAssetParts',[MaintenanceController::class,'getAllAssetParts'])->name('getAllAssetParts');
Route::delete('/deleteProblem',[MaintenanceController::class,'deleteProblem'])->name('deleteProblem');
Route::delete('/deleteSolution',[MaintenanceController::class,'deleteSolution'])->name('deleteSolution');
Route::delete('/deleteAssetParts',[MaintenanceController::class,'deleteAssetParts'])->name('deleteAssetParts');

// Maintenance Service
Route::get('/getServiceUI',[MaintenanceController::class,'getServiceUI'])->name('getAllProblems');
Route::get('/getIncomingService',[MaintenanceController::class,'getIncomingService'])->name('getIncomingService');
Route::post('/updateReqSeenStatus',[MaintenanceController::class,'updateReqSeenStatus'])->name('updateReqSeenStatus');
Route::post('/addServiceMaintenance',[MaintenanceController::class,'addServiceMaintenance'])->name('addServiceMaintenance');
Route::get('/getServiceInProgressData',[MaintenanceController::class,'getServiceInProgressData'])->name('getServiceInProgressData');
Route::get('/getSolutionForProblem',[MaintenanceController::class,'getSolutionForProblem'])->name('getSolutionForProblem');

// Problems Identify
Route::get('/getIdentifyProblems',[MaintenanceController::class,'getIdentifyProblems'])->name('getIdentifyProblems');
Route::post('/saveIdentifiedProblem',[MaintenanceController::class,'saveIdentifiedProblem'])->name('saveIdentifiedProblem');

// Applied Solution
Route::post('/saveAppliedSolution',[MaintenanceController::class,'saveAppliedSolution'])->name('saveAppliedSolution');
// Update Service Status
Route::post('/updateServiceStatus',[MaintenanceController::class,'updateServiceStatus'])->name('updateServiceStatus');
Route::post('/updateDeliveredStatus',[MaintenanceController::class,'updateDeliveredStatus'])->name('updateDeliveredStatus');

// Used Part
Route::get('/getUsedPartsList',[MaintenanceController::class,'getUsedPartsList'])->name('getUsedPartsList');
Route::post('/addPartsIntoDevice',[MaintenanceController::class,'addPartsIntoDevice'])->name('addPartsIntoDevice');
// Data List of Damage and Done
Route::get('/getServiceDoneData',[MaintenanceController::class,'getServiceDoneData'])->name('getServiceDoneData');
Route::get('/getServiceDamageData',[MaintenanceController::class,'getServiceDamageData'])->name('getServiceDamageData');





// Complain Request
Route::post('/serviceRequest',[ServiceRequestController::class,'saveServiceRequest'])->name('serviceRequest');









