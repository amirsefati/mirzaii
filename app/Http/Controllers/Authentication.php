<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Authentication extends Controller
{

    public function user_to_page(){
        if(Auth::check()){
            $user_level = Auth::user()->level;
            if($user_level == 1){
                return redirect('/student');
            }
            elseif($user_level == 2){
                return redirect('/teacher/class_list');
            }
            elseif($user_level == 3){
                return redirect('/manager');
            }
            else{
                return redirect('/login');
 
            }
        }
        else
            {  
            return redirect('/login');
        }
    }
    public function login(){
        $err = '';
        return view('login',compact('err'));
    }

    public function login_post(Request $request){
        $identity_code = $request->code_meli;
        $password = $request->password;
        if(strlen($identity_code) > 8 && strlen($password) > 5){
            if(User::where('identity_code',$identity_code)->where('password',$password)->count() > 0){
                $user_id = User::where('identity_code',$identity_code)->where('password',$password)->first()->id;
                Auth::loginUsingId($user_id);
                return redirect('/');
            }else{
                $err = 'اطلاعات وارد شده صحیح نمیباشد';
                return view('login',compact('err'));
            }
        }
        else{
            $err = 'لطفا اطلاعات ورود را کامل پر کنید';
            return view('login',compact('err'));
        }
        
    }
}
