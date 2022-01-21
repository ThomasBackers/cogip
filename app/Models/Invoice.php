<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'amount',
        'outstanding_balance',
        'contact_id',
        'company_id'
    ];

    public function contact()
    {
        $this->belongsTo(Contact::class);
    }
}
