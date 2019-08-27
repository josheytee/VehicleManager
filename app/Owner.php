<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Owner extends Model
{
    // public $timestamps = false;
    protected $fillable = [
        'name', 'dob', 'photo', 'gender', 'state', 'lga', 'address'
    ];
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function getPhotoAttribute($value)
    {
        return $value ? Storage::url($value) : asset('img/user.png');
    }
}
