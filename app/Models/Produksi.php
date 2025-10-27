<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    //
    protected $fillable = [
        'po_id',
        'deadline',
        'material_id',
    ];

    public function brand()
    {
        return $this->hasOne(Brand::class);
    }
}
