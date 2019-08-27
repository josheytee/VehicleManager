<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Vehicle extends Model
{
    // public $timestamps = false;

    protected $fillable = [
        'owner_id',
        'name', 'model', 'color',
        'plate', 'expires_on', 'registered_on',
        'driving', 'image'
    ];
    protected $with = ['owner'];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    public function getDrivingAttribute($value)
    {
        return $value ? Storage::url($value) : asset('img/car.jpg');
    }
    public function getImageAttribute($value)
    {
        return $value ? Storage::url($value) : asset('img/car.jpg');
    }
}
