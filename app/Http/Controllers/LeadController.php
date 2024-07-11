<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function welcome() {
        
        return view('welcome');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leads = Lead::paginate(10);
        return view('leads.index', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('leads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Lead $lead)
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'email' =>'required|email|unique:leads,email',
            'phone' => 'nullable|string',
            'message' => 'nullable|string',
            'status' => 'required|in:new,contacted,converted',
        ]);

         $lead->create($validator);

        return redirect()->route('leads.index')->with('message', 'Lead created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        return view('welcome');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        return view('leads.edit', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lead $lead)
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'email' =>'required|email',
            'phone' => 'nullable|string',
            'message' => 'nullable|string',
            'status' => 'required|in:new,contacted,converted',
        ]);

         $lead->update($validator);

        return redirect()->route('leads.index')->with('message', 'Lead updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        $lead->delete();

        return redirect()->route('leads.index')->with('message', 'Lead deleted successfully.');
    }
}
