<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganizationFormRequest;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $organizations = Organization::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // return view('organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrganizationFormRequest $request)
    {
        //
        // $data = $request->validated();
        // try {
        //     Organization::create($data);
        //     return redirect()->route('register.form')->with('success', 'Organization created successfully');
        // } catch (\Exception $e) {
        //     return back()->withErrors(['error' => 'Failed to create organization: ' . $e->getMessage()]);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
