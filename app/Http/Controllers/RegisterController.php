<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(){
        $data['title'] = 'Gipra | Interview Task';
        return view('register', $data);
    }
    public function doSignup(Request $request){

        $validator = Validator::make($request->all(),[
            'type' => 'required' ,
            'name' => 'required' ,
            'email'  => 'required|email|unique:users' , 
            'address'  => 'required' , 
            'dob'  => 'required' , 
            'photo' => 'required',
            'gender'  => 'required' ,
            'mobile'  => 'required|numeric|digits:10',
            'password' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised()]
         ]);
         if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $filename = '';
        if ($request->photo) {
            $image = Str::random(12);
            $filename = $image . '-' . time() . '.' . $request->photo->extension();
            $request->photo->storeAs('public/upload/user', $filename);
        }

        $user = User::create([
            'type' => $request->type,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'dob' => date('Y-m-d',strtotime($request->dob)),
            'photo' => $filename,
            'gender' => $request->gender,
            'mobile_prefix' =>"+91",
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password)
        ]);
        if($user){
            return redirect()->back()->withSuccess('Registraion Successfull');
        }else{
            return redirect()->back()->withError('Failed! Try again');
        }
        

    }
}
