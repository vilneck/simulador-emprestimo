<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','description','brand_id','value'
    ];

    protected $appends = ['brand'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function getBrandAttribute()
    {
        return $this->brand()->first();
    }

}
