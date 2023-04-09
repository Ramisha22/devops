<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Illuminate\Http\Request;
use DB;
class customerController extends Controller
{
    public function ViewSignUp(){
        return view('createaccount');
    }
 
    public function signUp(Request $request) { 
        
        $fname = $request->input('name'); 
        $lname = $request->input('lastname');  
        $email = $request->input('email'); 
        $pass= $request->input('pwd'); 
    $Data = DB::select('select email from customer where email = ?', [$email]); 

    if (count($Data) > 0){
        
        foreach ($Data as $t) {
            if (($t->email) == $email){
                return view('createaccount')->with('error','Email already exists');
            }
        }
    }
    
    $customer = new customer;
    $customer->fname = $fname;
    $customer->lname = $lname;
    $customer->email = $email;
    $customer->password = $pass;
    $customer->save();

    return redirect('main');
 }

    function signIn(Request $request){
        $email = $request -> input('email');
        $password = $request -> input('password');
        $loginData = customer::where('email', $email)->get();
        if (count($loginData) == 0){
            return redirect('login')->with('error','Email does not exist');
        }
        //checking password
        foreach($loginData as $login){
            if($login -> password === $password){
                return redirect('main');
            }
            else{
                return redirect('login')->with('error','Invalid password');
            }
        }
    }
    function resetPassword(Request $request){
        $email = $request -> input('email');
        $loginData = customer::where('email', $email)->get();
        if (count($loginData) == 0){
            return redirect('forgotpassword')->with('error','Email does not exist');
        }
        else{
                return view('resetpassword',['email'=>$email]);
        }
        
    }
} 
