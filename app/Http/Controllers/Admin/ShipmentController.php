<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index(){
        return view('admin.shipments');
    }

    public function show($id){
        $shipment= Shipment::findOrFail($id);
        return view('admin.show_shipment')->with('shipment',$shipment);
    }
}
