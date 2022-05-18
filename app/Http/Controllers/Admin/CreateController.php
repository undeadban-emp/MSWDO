<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SocialInformation;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create-cbms');
    }

    public function createDetails($id)
    {
        return view('admin.create-details',compact('id'));
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
        dd($request);
        // if($request->ajax()) {

            


            // SocialInformation::where(['payroll_no' => $payroll_no, 'employee_id' => $employeeID])->update([
            //     'monthly_salary'       => $monthlySalary,
            //     'add_compensation'     => $totalCompensation,
            //     'gross_salary'         => $grossSalary,
            //     'mandatory_deductions' => $totalMandatory,
            //     'personal_deductions'  => $personalDeductions,
            //     'total_deductions'     => $totalDeductions,
            //     'net_amount'           => $netSalary,
            // ]);

            // return response()->json(['success' => true]);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
