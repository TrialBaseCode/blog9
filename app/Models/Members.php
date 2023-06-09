<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    public $timestamps=false;

    function getNameAttribute($value)
    {
        return ucfirst($value);
    }
    function getAddressAttribute($value)
    {
        return $value. ",india";
    }

    // need mutator to change
    public function setNameAttribute($value)
    {
        return $this->attributes['name'] = 'Mr.' .$value;
    }
}
