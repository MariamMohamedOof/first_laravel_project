<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function register(){
        return view('register');
 
   }

public function postregister(Request $re){
//dd($re);
   $val=$re->validate([
   'name' =>'required',
   'email' =>'required',
   'password' =>'required',
  
]);
//dd($val);

  //$users= users :: create($val);
  $users=new user();
  $users->name= $re->name;
  $users->email= $re->email;
  $users->password= $re->password;
     $users->save();
   //dd($users);
}
public function login()
{
   return view('login');
}
   public function postlogin(Request $re)
   {
     $r=$re->only("email","password");
     //dd($re);
     //dd($r);
     if(Auth::attempt($r))
     {
      return redirect('home');}
     else{return redirect('login');
   }
   }
   public function logout()
   {
      Auth::logout();
      return redirect('login');
   }
//    public function show(){

//  $users=DB::table('users')->get();

// }
}
?>
