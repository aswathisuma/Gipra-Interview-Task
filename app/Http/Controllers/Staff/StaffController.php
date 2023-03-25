<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        $data['title'] = "Gipra | Interview Task";
        $data['menu']  = "dashboard";
        $data['menu_admin']  = "staff.dashboard";
        $data['submenu'] = "";

        return view('staff.dashboard',$data); 
    }
}
