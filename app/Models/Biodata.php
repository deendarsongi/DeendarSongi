<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Symfony\Component\String\b;

class Biodata extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'customer_id',
        'biodata_id',
    ];
     public function subBiodata()
    {
        return $this->hasOne(Sub_biodata::class, 'customer_id', 'customer_id');
    }
    
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
