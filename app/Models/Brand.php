<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable = [
        'name',
        'code'
    ];

    public function po()
    {
        return $this->hasOne(Po::class);
    }

    public function size()
    {
        return $this->hasOne(Size::class);
    }

    public function produksi()
    {
        return $this->belongsTo(Produksi::class);
    }
}
