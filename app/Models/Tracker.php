<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    use HasFactory;
    protected $primaryKey = 'tracker_id';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public function shipment(){
        return $this->belongsTo('App\Models\Shipment','shipment_id');
    }
}
