<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory, HasUuids;

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function itemPhoto(){
        return $this->hasMany('App\Models\ItemPhoto','shipment_id');
    }
    public function tracker(){
        return $this->hasOne('App\Models\Tracker','shipment_id');
    }
}
