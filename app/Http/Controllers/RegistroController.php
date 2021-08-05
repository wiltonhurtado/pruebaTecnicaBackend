<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function __invoke()
    {
        return view('index');
    }
    public function home(){
        return view('index');
    }
    public function create(){
        return view('loguin');
    }
    public function show(){
       
    }
    public function store(Request $request){
      $request->validate([
        "name"=> "required",
        "lastname"=>"required",
        "document"=>"required",
        "mobile"=>"required|min:10||max:10",
        "email"=>"required|email|unique:users",
        "password"=>"required|min:6"
      ]);
      
      $registro= new User();

      $registro->name=$request->name;
      $registro->lastname=$request->lastname;
      $registro->document=$request->document;
      $registro->mobile=$request->mobile;
      $registro->email=$request->email;
      $registro->password=$request->password;
      //return $registro;
     $registro->save();
  
      return redirect()->route('loguin.create');
    }
    public function hello(){
      return "hola mundo";
    }
}
