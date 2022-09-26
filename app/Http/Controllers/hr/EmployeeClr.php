<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Models\hr\Designation;
use App\Models\hr\Employee;
use App\Models\outlet\OutletInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;
use Session;

class EmployeeClr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function employeeInfo() {
        return view('hr.employeeInfo');
    }

    public function getAllEmployee() {
        // $getAllEmployeeDta=Employee::all();
        $getAllEmployeeDta = DB::table('emp_info AS ei')
        ->join('emp_designation AS ed', 'ed.designation_id', '=', 'ei.designation_id')
        ->select('ei.*', 'ed.designation_name')->get();


        // $getAllEmployeeDta = Employee::get();
        return response()->json($getAllEmployeeDta);
    }

    public function getAllDesignation()
    {
        // $getDesignation = DB::table("emp_designation")->get();
        $getDesignation = Designation::get();
        return response()->json($getDesignation);
    }


    public function employeeByID($emp_id) {
        // $dtaa = Employee::find($emp_id);
        $dtaa = DB::table('emp_info AS ei')
        ->join('emp_designation AS ed', 'ed.designation_id', '=', 'ei.designation_id')
        ->select('ei.*','ed.designation_name')->where('ei.emp_id', $emp_id)->first();
        return response()->json($dtaa);
    }

    // joiningByID
    public function joiningByID($emp_id) {
        $data = DB::table('emp_record_info')
                ->where('emp_record_info.emp_id', $emp_id)
                ->join('emp_designation AS ed', 'ed.designation_id', '=', 'emp_record_info.designation_id')
                ->join('outlet_info AS oi', 'oi.outlet_id', '=', 'emp_record_info.outlet_id')
                ->select('emp_record_info.*', 'ed.designation_name as designation','oi.outlet_name as outlet')->get();
        return response()->json($data);
    }

    // educationByID
    public function eduByID($emp_id) {
        $data = DB::table('emp_education')->where('emp_education.emp_id', $emp_id)->get();
        return response()->json($data);
    }

     // deleteEmpJoiningInfo
     public function deleteEmpJoiningInfo($row_id){

        if( $data = DB::table('emp_record_info')->where('emp_rec_id',$row_id)->delete())
        {
            return 1;
        }
        else{
            return 0;
        }
    }
    // deleteEmpEduInfo
    public function deleteEmpEduInfo($row_id){

        if( $data = DB::table('emp_education')->where('edu_id',$row_id)->delete())
        {
            return 1;
        }
        else{
            return 0;
        }
    }

  
    // saveEmployeeBasicInfo
    public function saveEmployeeBasicInfo(Request $request){
        // emp_name:empName,emp_dob:empDob,contact_no:empContact,email_id:empEmail,joining_date:empJoin,designation_id

        // $fileName = imageUploadWithCustomSize($request->photo_path,"150","150","employee");
        // return  $request->file('photo_path');
        // $fileName = anyTypeFileUpload($request->file('photo_path'),"employee");
        $data=array(
            'emp_name'      => $request->emp_name,
            'emp_dob'       => $request->emp_dob,
            'contact_no'    => $request->contact_no,
            'email_id'      => $request->email_id,
            'present_address'     => $request->present_address,
            'permanent_address'   => $request->permanent_address,
            'designation_id'      => $request->designation_id,
            'outlet_id'           => $request->outlet_id,
            'photo_path'           => '$fileName',
            'joining_date'  => $request->joining_date,
            'created_by'    => "1"
        );
        // return $data;
        if(DB::table('emp_info')->insert($data)){
            return 1;
        }else{
            return 0;
        }
    }




    // saveEmployeeJoiningInfo
    public function saveEmployeeJoiningInfo(Request $request){
        $data=array(
            'emp_id'            => $request->emp_id,
            'emp_type'          => "1",
            'designation_id'    => $request->designation_id,
            'outlet_id'         => $request->outlet_id,
            'joining_date'      => $request->joining_date,
            'subordinate_id'    => "1",
            'created_by'        => "1",
            'created_by'        => "1"
        );

        if(DB::table('emp_record_info')->insert($data)){
            return 1;
        }else{
            return 0;
        }
    }

    // saveEmployeeEduInfo
    function saveEmployeeEduInfo(Request $request){
        $data=array(
            'emp_id'        => $request->emp_id,
            'degree_name'   => $request->degree_name,
            'major'         => $request->major,
            'institute'     => $request->institute,
            'board'         => $request->board,
            'year'          => $request->year,
            'result'        => $request->result,
            'created_by'    => "1"
        );

        if(DB::table('emp_education')->insert($data)){
            return 1;
        }else{
            return 0;
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hr\Employee  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hr\Employee  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hr\Employee  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hr\Employee  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employe)
    {
        //
    }
}
