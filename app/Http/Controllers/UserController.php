<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))  // hadi bach c'compariw password li jay mel $req (ma3naha input) m3a passwprd li jay mel $user (ma3naha database)
        {
            return "Username or password is not matched";
        }
        else
        {
            $req->session()->put('user',$user);  // jcp wech ma3naha
            return redirect('/');
            // edit on userAuth.php line 18/19/20..  added by php artisan make middleware and kernel.php line 21/.. 
        }
    }
}
