<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Po extends Model
{
    //
    protected $fillable = [
        'address',
        'phone',
        'po_number',
        'information',
        'product',
        'artikel',
        'picture',
        'color',
        'unit_price',
        'size_id',
        'total_unit',
        'value',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
