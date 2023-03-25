<?php

namespace App\Http\Controllers\Developers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index(){
        $data['title'] = "Gipra | Interview Task";
        $data['menu']  = "dashboard";
        $data['menu_admin']  = "developers.dashboard";
        $data['submenu'] = "";

        return view('developers.dashboard',$data); 
    }
}
