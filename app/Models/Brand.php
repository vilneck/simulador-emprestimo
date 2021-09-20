<?php

namespace App\Models;

use App\Models\model\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public static function getIdByName($name)
    {
        return Self::where('name','=',$name)->first()->id;
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
