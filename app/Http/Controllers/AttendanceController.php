<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::with('employee')->get();
        // return "HELLO THIS IS FROM ATTENDANCES";

        return view('attendances.index', compact('attendances'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('attendances.create', compact('employees'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'status' => 'required|in:present,sick_leave,other_leave,maternity_leave,training',
        ]);

        Attendance::create($validatedData);

        return redirect()->route('attendances.index')
                         ->with('success', 'Attendance recorded successfully.');
    }
}

