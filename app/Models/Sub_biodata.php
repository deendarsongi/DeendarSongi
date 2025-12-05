<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_biodata extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'customer_id',
        'biodata_id',
    ];
    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'customer_id', 'customer_id');
    }
}
