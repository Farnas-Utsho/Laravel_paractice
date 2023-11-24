<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use APP\Notifications\welcomeNotify;
use Illuminate\Support\Facades\Notification;

class welcome extends Controller
{
    public function welcome()
    {   $user=User::first();
        Notification:: send($user,new welcomeNotify);
        return view("welcome");
    }
}
