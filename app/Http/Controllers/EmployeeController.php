<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the employees.
     */
    public function index()
    {
        $employees = Employee::all(); // Ambil semua data employees dari database

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new employee.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created employee in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            'position' => 'required',
        ]);

        Employee::create($validatedData);

        return redirect()->route('employees.index')
                         ->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified employee.
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified employee.
     */
    // public function edit(Employee $employee)
    // {
    //     return view('employees.edit', compact('employee'));
    // }

    /**
     * Update the specified employee in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email,'.$employee->id,
            'position' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
                         ->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified employee from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
                         ->with('success', 'Employee deleted successfully.');
    }
}
