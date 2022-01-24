<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Invoice;

class AppController extends Controller
{
    public function index()
    {
        $rawQuery = 'coalesce(updated_at, created_at) DESC';

        return view('dashboard')
            ->with('companies', Company::orderByRaw($rawQuery)
                ->limit(5)
                ->get())
            ->with('contacts', Contact::orderByRaw($rawQuery)
                ->limit(5)
                ->get())
            ->with('invoices', Invoice::orderByRaw($rawQuery)
                ->limit(5)
                ->get());
    }
}
