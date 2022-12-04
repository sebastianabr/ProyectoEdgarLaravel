<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index');
    }
    public function store(Request $request){
        $this->validate($request,[
            'nombre'=>'required',
            'apellidos'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);

        User::create([
            'nombre'=>$request->nombre,
            'apellidos'=>$request->apellidos,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
    }
}
