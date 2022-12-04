<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login.index');
    }
    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);
        if(!auth()->attempt($request->only(['email','password']))){
            return back()->with('mensaje','Credenciales Incorrectas');
        }
        $usuario=DB::table('users')->pluck('nombre');
        
    
        return redirect()->route('menu-principal',auth()->user());
        
    }
}
