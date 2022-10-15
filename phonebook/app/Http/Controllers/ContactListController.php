<?php

namespace App\Http\Controllers;

use App\Models\ContactListModel;
use Illuminate\Http\Request;

class ContactListController extends Controller
{
    function indexPage(){
        return view('ContactList.contactList');
    }


    function SearchContact(Request $request){
        $userMail = session()->get('userMail');
        $sInput = $request->input('sInput');

        return $result = ContactListModel::whereLike(['name', 'email','phone_one','phone_two'], $sInput)->get();
    }

    function getContactList(){
        return ContactListModel::all();
    }

    public function onContactSave(Request $request){
        $userMail = session()->get('userMail');

        $name       = $request->input('name');
        $email      = $request->input('email');
        $phoneOne      = $request->input('phoneOne');
        $phoneTwo    = $request->input('phoneTwo');

        date_default_timezone_set('Asia/Dhaka');
        $time = date("h:i:sa");
        $date = date("d-m-Y");

        if (strlen($phoneOne) == 0){
            $result = ContactListModel::insert([
                "user_mail"=>$userMail,
                "name"=>$name,
                "email"=>$email,
                "phone_one"=>' ',
                "phone_two"=>$phoneTwo,
                "favorite"=>0,
                "time"=>$time,
                "date"=>$date
            ]);
        }else if (strlen($phoneTwo) == 0){
            $result = ContactListModel::insert([
                "user_mail"=>$userMail,
                "name"=>$name,
                "email"=>$email,
                "phone_one"=>$phoneOne,
                "phone_two"=>' ',
                "favorite"=>0,
                "time"=>$time,
                "date"=>$date
            ]);
        }else{
            $result = ContactListModel::insert([
                "user_mail"=>$userMail,
                "name"=>$name,
                "email"=>$email,
                "phone_one"=>$phoneOne,
                "phone_two"=>$phoneTwo,
                "favorite"=>0,
                "time"=>$time,
                "date"=>$date
            ]);
        }



        if ($result == true){
            return 1;
        }else{
            return 0;
        }

    }


}
