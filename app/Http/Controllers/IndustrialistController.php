<?php

namespace App\Http\Controllers;

use App\Models\Industrialist;
use Illuminate\Http\Request;

class IndustrialistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industrialists = Industrialist::latest()->paginate(5);

        return view('industrialists.index', compact('industrialists'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('industrialists.create');
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
            'Photo' => 'required',
            'CompanyPersonalEmailID' => 'required',
            'NameWithInitials' => 'required',
            'Designation' => 'required',
            'LinkedIn' => 'required',
            'FieldOfInterests' => 'required',
            'ContactNumber' => 'required',
            'CompanyName' => 'required',
            
            
        ]);

        Industrialist::create($request->all());

        return redirect()->route('industrialists.index')
            ->with('success', 'Industrialist details created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Industrialist  $industrialist
     * @return \Illuminate\Http\Response
     */
    public function show(Industrialist $industrialist)
    {
        return view('industrialists.show', compact('industrialist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Industrialist  $industrialist
     * @return \Illuminate\Http\Response
     */
    public function edit(Academic $academic)
    {
        return view('industrialists.edit', compact('industrialist'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Industrialist  $industrialist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Industrialist $industrialist)
    {
        $request->validate([
            
            'password ' => 'required',
            'Photo' => 'required',
            'CompanyPersonalEmailID' => 'required',
            'NameWithInitials' => 'required',
            'Designation' => 'required',
            'LinkedIn' => 'required',
            'FieldOfInterests' => 'required',
            'ContactNumber' => 'required',
            'CompanyName' => 'required',
            
        
            
        ]);
        $industrialist->update($request->all());

        return redirect()->route('industrialists.index')
            ->with('success', 'Industrialist deatils updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Industrialist  $industrialist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Industrialist $industrialist)
    {
        $industrialist->delete();

        return redirect()->route('industrialists.index')
            ->with('success', 'Industrialist details deleted successfully');
    }
}
