<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class student extends Controller
{
    public function showstudents()
    {
        $students = DB::table('studnets')
            ->join('cities', 'studnets.City', '=', 'cities.Cid')
            ->select('studnets.name', 'studnets.Age', 'cities.City')
            // ->where('cities.City', 'like', '%a%')
                // ->count()
                ->get();
        // return $students;
        return view('newview', ['data' => $students]);
    }
}
