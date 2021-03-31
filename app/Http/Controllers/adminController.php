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
            $user = array_reduce($user, function ($value, $var) {
               $infunc = (array) $var;
               if ($infunc['permission'] == $_GET['act']) {
                   $value[] = $infunc['name'];
               }
               return $value;
        }, []);
        }
        return view('admin/home', ['user' => $user]);
    }
}
