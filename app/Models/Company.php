<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'zip_code',
        'city',
        'country',
        'vat_number',
        'category'
    ];

    public function people()
    {
        return $this->hasMany(People::class);
    }
}
