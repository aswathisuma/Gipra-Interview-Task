<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $data['title'] = "Gipra | Interview Task";
        $data['menu']  = "dashboard";
        $data['menu_admin']  = "admin.dashboard";
        $data['submenu'] = "";

        return view('admin.dashboard',$data); 

    }
}
