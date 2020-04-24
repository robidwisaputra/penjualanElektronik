<?php

namespace App\Http\Controllers;

use App\Employee;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalEmployee = Employee::count();
        $employees = Employee::all();
        $access = Auth::user()->access;
        return view('employee.index', compact('employees', 'totalEmployee', 'access'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $access = Auth::user()->access;
        return view('employee.create', compact('access'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $input = $request->all();
        $status = Employee::create($input);

        // membuat user
        $employee = Employee::all()->last();
        
        $username = explode(" ", $request->name)[0];
        $number = substr($request->phone, 9);
        $password = $username . $number;

        $user = new User;
        $user->id_employee = $employee->id_employee;
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->access = 'operator';
        $user->save();  

        if($status) return redirect('employee')->with('status', 'Data Succesfully Added');
        else return redirect('employee')->with('status', 'Data Failed Added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $access = Auth::user()->access;
        return view('employee.edit', compact('employee', 'access'));
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
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $status = Employee::find($employee->id_employee)
                    ->update($request->all());

        if('status') return redirect('employee')->with('status', 'Data Succesfully Updated');
        else return redirect('employee')->with('status', 'Data Failed Updates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $status = Employee::destroy($employee->id_employee);
        if($status) return redirect('employee')->with('status', 'Data Succesfully Deleted');
        else return redirect('employee')->with('status', 'Data Failed Deleted');
    }
}
