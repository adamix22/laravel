<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
   

    
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        
        return redirect('admin.users');
 
     }
}
