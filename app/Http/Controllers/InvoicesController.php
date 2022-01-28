<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Contact;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invoices.index')
            ->with('invoices', Invoice::orderByRaw('coalesce(updated_at, created_at) DESC')
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
            ->with('group', 'invoices');
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
            'invoice_number' => 'required',
            'amount' => 'required',
            'outstanding_balance' => 'required',
            'contact_lastname' => 'required'
        ]);

        $contact = Contact::where('lastname', $request->input('contact_lastname'))->first();
        if ($contact === null) {
            return back()->with('error', 'the specified contact does not exist');
        }

        Invoice::create([
            'invoice_number' => $request->input('invoice_number'),
            'amount' => $request->input('amount'),
            'outstanding_balance' => $request->input('outstanding_balance'),
            'contact_id' => $contact->id
        ]);

        return redirect('/dashboard')->with('message', 'The invoice has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('invoices.show')
            ->with('invoice', Invoice::where('id', $id)
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
            ->with('group', 'invoices')
            ->with('data', Invoice::where('id', $id)->first());
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
