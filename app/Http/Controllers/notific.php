<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\userfollow;
use Illuminate\Routing\Controller;
use App\Notifications\welcomeNotify;



class notific extends Controller
{
    public function notify(){
        $user=User::first();
        auth()->user->notify(new userfollow($user));
    }
    
}
