<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    function indexPage(){
        return view('Pages.loginPage');
    }

    function userLogin(Request $request){
        $email = $request->input('email');
        $pass = $request->input('password');
        $password = md5($pass);

        $result = UserModel::where('email',$email)->where('password',$password)->count();

        $userResult = UserModel::where('email',$email)->where('password',$password)->get();

        $decodeuser = json_decode($userResult, true);
        $email = $decodeuser[0]['email'];
        $userName = $decodeuser[0]['username'];

        if ($result == 1){
            $request->session()->put('userMail', $email);
            $request->session()->put('userName', $userName);
            return 1;
        }else{
            return 0;
        }
    }


    public function onRegister(Request $request){
        $name       = $request->input('name');
        $username   = $request->input('username');
        $email      = $request->input('email');
        $phone      = $request->input('phone');
        $pass       = $request->input('password');
        $password   = md5($pass);

        date_default_timezone_set('Asia/Dhaka');
        $time = date("h:i:sa");
        $date = date("d-m-Y");

        $count = UserModel::where('email',$email)->count();

        if ($count >= 1){
            return 10;
        }else{
            $result = UserModel::insert([
                "name"=>$name,
                "username"=>$username,
                "email"=>$email,
                "phone"=>$phone,
                "password"=>$password,
                "status"=>0,
                "time"=>$time,
                "date"=>$date
            ]);

            if ($result == true){
                return 1;
            }else{
                return 0;
            }
        }
    }

    function onLogOut(Request $request){
        $request->session()->flush();
        return redirect('/user-login');
    }

}
