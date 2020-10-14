<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Util\Json;

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
                return redirect('/manager/table');
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
                return redirect('/user');
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

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    public function boy_or_girl(){
        if(session()->has('gender')){
            if(session('gender') == 'boy'){
                $config = Homepage::where('gender','پسر')->orderby('created_at','desc')->get();
                return view('homepage.boy',compact('config'));
            
            }else{ 
                $config = Homepage::where('gender','دختر')->orderby('created_at','desc')->get();
                return view('homepage.girl',compact('config'));
            
            }
        }else{
            return redirect('/select');
        }
    }

    public function select(){

        return view('/homepage.boy_or_girl');

    }

    public function select_gender($gender){
        
            session(['gender'=>$gender]);
            return redirect('/');   
    }

    public function book_detail($id){
        return view('homepage.book_details');
    }
}
