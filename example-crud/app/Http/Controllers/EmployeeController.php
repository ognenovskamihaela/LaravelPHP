<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Petshop;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function employeesCreate()
    {
        $petshops = Petshop::all();
        return view('employee.employees-create', compact('petshops'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'surname' => 'required',
            'salary' => 'required',
            'petshop_id' => 'required|exists:petshops,id',
        ]);
        Employee::create($data);
        return redirect(route('employee.index'));
    }

    public function edit(Employee $employee)
    {
        $petshops = Petshop::all();
        return view('employee.employees-edit', compact('employee', 'petshops'));
    }

    public function update(Employee $employee, Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'surname' => 'required',
            'salary' => 'required',
            'petshop_id' => 'required|exists:petshops,id'
        ]);
        $employee->update($data);

        return redirect(route('employee.index'))->with('success', 'Employee Updated Successfully');
    }

    public function delete(Employee $employee)
    {
        $employee->delete();
        return redirect(route('employee.index'))->with('success', 'Employee Deleted Successfully');
    }
}
