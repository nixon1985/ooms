<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Models\hr\Designation;
use App\Models\hr\Employee;
use App\Models\outlet\OutletInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

    // getAllEmployeeByOutlet
    public function getAllEmployeeByOutlet($outlet) {
        // $getAllEmployeeDta=Employee::all();
        $getAllEmployeeData = DB::table('emp_info AS ei')
        ->join('emp_designation AS ed', 'ed.designation_id', '=', 'ei.designation_id')
        ->select('ei.*', 'ed.designation_name')
        ->where('ei.outlet_id',$outlet)
        ->get();
        return response()->json($getAllEmployeeData);
    }

    public function getAllDesignation()
    {
        // $getDesignation = DB::table("emp_designation")->get();
        $getDesignation = Designation::get();
        return response()->json($getDesignation);
    }

    // employeeByID
    public function employeeByID($emp_id) {
        // $dtaa = Employee::find($emp_id);
        $data = DB::table('emp_info AS ei')
        ->select('ei.*','ed.designation_name','outlet_info.outlet_name')
        ->join('emp_designation AS ed', 'ed.designation_id', '=', 'ei.designation_id')
        ->join('outlet_info','outlet_info.outlet_id','ei.outlet_id')
        ->where('ei.emp_id', $emp_id)->first();
        return response()->json($data);
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

    // editJoiningByID
    public function editJoiningByID($row_id) {
        $data = DB::table('emp_record_info')
                ->where('emp_rec_id', $row_id)->first();

        return response()->json($data);
    }


    // educationByID
    public function eduByID($emp_id) {
        $data = DB::table('emp_education')->where('emp_education.emp_id', $emp_id)->get();
        return response()->json($data);
    }

    // editEduByID
    public function editEduByID($row_id) {
        $data = DB::table('emp_education')
                ->where('edu_id', $row_id)->first();

        return response()->json($data);
    }
    // editAttendByID
    public function editAttendByID($row_id) {
        $data = DB::table('emp_attendance')
                ->where('attend_id', $row_id)->first();

        return response()->json($data);
    }
    // attendByID
    public function attendByID($emp_id) {
        $data = DB::table('emp_attendance')->where('emp_id', $emp_id)->get();
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
    // deleteEmpAttendInfo
    public function deleteEmpAttendInfo($row_id){

        if( $data = DB::table('emp_attendance')->where('attend_id',$row_id)->delete())
        {
            return 1;
        }
        else{
            return 0;
        }
    }


    // saveEmployeeBasicInfo
    public function saveEmployeeBasicInfo(Request $request){
        if ($files = $request->file('photo_path')) {
                $fileName = imageUploadWithCustomSize($request->file('photo_path'),250,250,"employee");
                DB::table('emp_info')->insert([
                    'emp_name'      => $request->emp_name,
                    'emp_dob'       => $request->emp_dob,
                    'contact_no'    => $request->contact_no,
                    'email_id'      => $request->email_id,
                    'present_address'     => $request->present_address,
                    'permanent_address'   => $request->permanent_address,
                    'designation_id'      => $request->designation_id,
                    'outlet_id'           => $request->outlet_id,
                    'photo_path'           => $fileName,
                    'joining_date'  => $request->joining_date,
                    'created_by'    => "1"
                ]);

                // insert into user table
                if($request->password != NULL)
                {
                    $user = new User();
                    $user->name = $request->emp_name;
                    $user->username = $request->emp_name;
                    $user->email = $request->email_id;
                    $user->password = Hash::make($request->password);
                    $user->save();
                }
                return 1;
            }
            return 0;
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

        if($request->edit_joining_id > 0)
        {
            if(DB::table('emp_record_info')->where('emp_rec_id',$request->edit_joining_id)->update($data)){
                return 1;
            }else{
                return 0;
            }
        }
        else{
            if(DB::table('emp_record_info')->insert($data)){
                return 1;
            }else{
                return 0;
            }
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

        if($request->edit_emp_id > 0)
        {
            if(DB::table('emp_education')->where('edu_id',$request->edit_emp_id)->update($data)){
                return 1;
            }else{
                return 0;
            }
        }
        else
        {
            if(DB::table('emp_education')->insert($data)){
                return 1;
            }else{
                return 0;
            }
        }

    }
    // saveEmployeeAttendInfo
    function saveEmployeeAttendInfo(Request $request){
        $data=array(
            'emp_id'        => $request->emp_id,
            'attend_date'   => $request->attend_date,
            'in_time'       => $request->in_time,
            'out_time'      => $request->out_time,
            'created_by'    => "1",
            'created_on'    => date('Y-m-d'),
            'updated_by'    => "1",
            'updated_on'    => date('Y-m-d'),
        );

        if($request->row_id > 0)
        {
            if(DB::table('emp_attendance')->where('attend_id',$request->row_id)->update($data)){
                return 1;
            }else{
                return 0;
            }
        }
        else{
            if(DB::table('emp_attendance')->insert($data)){
                return 1;
            }else{
                return 0;
            }
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
