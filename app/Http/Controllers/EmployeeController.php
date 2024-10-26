<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::latest()->paginate(10);
        return view('home.accounts', ['employees' => $employees]);
    }
    public function edit(Employee $employee)
    {
        return view('home.edit-employee', ['employee' => $employee]);
    }
    public function update(Employee $employee)
    {
        $validated = request()->validate([
            'name' => ['required'],
            'username' => ['required'],
            'email' => ['required'],
            'title' => ['required'],
            'role' => ['required'],
            'department' => ['required'],
        ]);

        $employee->update($validated);

        return redirect('/');
    }


    // account update

    public function accountUpdate(Employee $employee)
    {
        
        return view('home.account-update');
    }
}
