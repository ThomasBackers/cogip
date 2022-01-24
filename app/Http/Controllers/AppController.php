<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class AppController extends Controller
{
    public function index()
    {
        return view('dashboard')
            ->with('companies', Company::orderByRaw('coalesce(updated_at, created_at) DESC')->get());
    }
}
