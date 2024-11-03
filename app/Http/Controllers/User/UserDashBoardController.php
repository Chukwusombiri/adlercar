<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserDashBoardController extends Controller
{
    public function ship(){
        return view('user.ship');
    }
}
