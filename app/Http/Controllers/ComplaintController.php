<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = Complaint::all();
        return view('complaints.index', compact('complaints'));
    }

    public function create()
    {
        return view('complaints.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'complaint' => 'required',
        ]);

        Complaint::create($request->all());

        return redirect()->route('complaints.index')
                         ->with('success', 'Complaint registered successfully.');
    }

    public function show(Complaint $complaint)
    {
        return view('complaints.show', compact('complaint'));
    }

    public function edit(Complaint $complaint)
    {
        return view('complaints.edit', compact('complaint'));
    }

    public function update(Request $request, Complaint $complaint)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'complaint' => 'required',
        ]);

        $complaint->update($request->all());

        return redirect()->route('complaints.index')
                         ->with('success', 'Complaint updated successfully.');
    }

    public function destroy(Complaint $complaint)
    {
        $complaint->delete();

        return redirect()->route('complaints.index')
                         ->with('success', 'Complaint deleted successfully.');
    }
}

