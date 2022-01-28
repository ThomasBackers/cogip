<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('companies.index')
            ->with('companies', Company::orderBy('name')
            ->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('edit.form')
            ->with('type', 'Create')
            ->with('group', 'companies');
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
            'zip_code' => 'required',
            'city' => 'required',
            'country' => 'required',
            'vat_number' => 'required',
            'category' => 'required'
        ]);

        Company::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'zip_code' => $request->input('zip_code'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'vat_number' => $request->input('vat_number'),
            'category' => $request->input('category')
        ]);

        return redirect('/dashboard')->with('message', 'The company has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('companies.show')
            ->with('company', Company::where('id', $id)
            ->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit.form')
            ->with('type', 'Editing')
            ->with('group', 'companies')
            ->with('data', Company::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
