<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function showAccount()
    {
        $user = User::showAccount();
        if(isset($_GET['act'])) {
            $user = array_filter($user, function ($var) {
               $infunc = (array) $var;
               return ($infunc['permission'] == $_GET['act']);
        });
        }
        return view('admin/home', ['user' => $user]);
    }
}
