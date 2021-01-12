<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academics = Academic::latest()->paginate(5);

        return view('academics.index', compact('academics'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('academics.create');
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
            
            'password ' => 'required',
            'EmployeeID' => 'required',
            'Photo' => 'required',
            'Title' => 'required',
            'FirstName' => 'required',
            'LastName' => 'required',
            'Gender' => 'required',
            'DateOfBirth' => 'required',
            'Designation' => 'required',
            'AdminRole' => 'required',
            'EmailID' => 'required',
            'LinkedIn' => 'required',
            'ContactNumber' => 'required',
            'Faculty' => 'required',
            'Department' => 'required',
            'OfficialWebsite' => 'required',
            'ResearchInterest' => 'required',
            'FieldOfSpecialization' => 'required',
            
            
        ]);

        Academic::create($request->all());

        return redirect()->route('academics.index')
            ->with('success', 'Academic details created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function show(Academic $academic)
    {
        return view('academics.show', compact('academic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function edit(Academic $academic)
    {
        return view('academics.edit', compact('academic'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Academic $academic)
    {
        $request->validate([
            
            'password ' => 'required',
            'EmployeeID' => 'required',
            'Photo' => 'required',
            'Title' => 'required',
            'FirstName' => 'required',
            'LastName' => 'required',
            'Gender' => 'required',
            'DateOfBirth' => 'required',
            'Designation' => 'required',
            'AdminRole' => 'required',
            'EmailID' => 'required',
            'LinkedIn' => 'required',
            'ContactNumber' => 'required',
            'Faculty' => 'required',
            'Department' => 'required',
            'OfficialWebsite' => 'required',
            'ResearchInterest' => 'required',
            'FieldOfSpecialization' => 'required',
            'ResearchID' => 'required',
        
            
        ]);
        $academic->update($request->all());

        return redirect()->route('academics.index')
            ->with('success', 'Academic deatils updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Academic $academic)
    {
        $academic->delete();

        return redirect()->route('academics.index')
            ->with('success', 'Academic details deleted successfully');
    }
}
