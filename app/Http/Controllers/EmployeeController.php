<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employee = Employee::all();
        return view('/admin/personeel/index',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $employee = Employee::orderBy('username', 'DESC')->first();
        return view('/admin/personeel/create', compact('employee'));
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
        // dd(request()->all());

        Employee::create([
            'sedula' => $request['sedula'],
            'username' => $request['username'],
            'lastname' => $request['lastname'],
            'maidenname' => $request['maidenname'],
            'firstname' => $request['firstname'],
            'gender' => $request['gender'],
            'birthday' => $request['birthday'],
            'birthplace' => $request['birthplace'],
            'nationality' => $request['nationality'],
            'address' => $request['address'],
            'maritalstatus' => $request['maritalstatus'],
            'tel_home' => $request['tel_home'],
            'tel_mobile' => $request['tel_mobile'],
            'email_internal' => $request['email_internal'],
            'email_private' => $request['email_private'],
            'driverslicense' => $request['driverslicense'],
            'total_kids' => $request['total_kids'],
            'role' => $request['role'],
            'status' => $request['status'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/employee')->with('success', 'Nieuw registratie voltooid!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
        $data::find($employee);
        return view('/employee/$employee/edit', compact(data));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
