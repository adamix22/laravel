<?php

namespace App\Http\Controllers;
use Auth;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        $users = User::where('is_admin','0')->get();

            return view('admin.users')->with('users', $users);


    }
    public function edit($id){
      $user= User::find($id);
      return view('edit')->with('user', $user);

    }
    public function show($id){
       $user= User::find($id);
        
        return view('show')->with('user', $user);
    } 
    public function update(Request $request,$id){
        $this->validate($request, [
          'name' => 'required',
          'email' => 'required',
          'password' => 'required',
        
        ]);
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')) ;
        $user->save();

        return redirect('home')->with('success!');

        
    
}

}
