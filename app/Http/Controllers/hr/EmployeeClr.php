<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Models\hr\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return response()->json($getAllEmployeeDta);
    }
    public function employeeByID($emp_id) {
        // $dtaa = Employee::find($emp_id);
        $dtaa = DB::table('emp_info AS ei')
        ->join('emp_designation AS ed', 'ed.designation_id', '=', 'ei.designation_id') 
        ->select('ei.*', 'ed.designation_name')->where('ei.emp_id', $emp_id)->first(); 
        return response()->json($dtaa);
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
