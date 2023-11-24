<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\LengthAwarePaginator;

class user_control extends Controller
{
    public function show()
    {
        // $users = DB::table('user_details')->get();
        // return view('about', ['data' => $users]);
        $users = DB::table('user_details')
    //     // //     // ->orderBy('first_name')
    //     // //     // ->where('last_name', 'john')
    //     //     //  ->simplePaginate(10);
              ->Paginate(10);
            return view('about', ['data' => $users]);

    //     // $users = DB::select("SELECT * FROM user_details");
    //     // $perPage = 10; // Number of items per page
    //     // $page = request('page', 1); // Get the current page number from the request

    //     // $paginatedResults = new LengthAwarePaginator(
    //     //     collect($users), // Results from the raw query
    //     //     count($users),   // Total number of results
    //     //     $perPage,          // Number of items per page
    //     //     $page,             // Current page number
    //     //     ['path' => request()->url(), 'query' => request()->query()]
    //     // );
        // return view('about', ['data' =>  $paginatedResults]);
    }





    
    // public function show()
    // {
        //     $users = DB::table('user_details')->get();
        //     return view('about', ['data' =>  $users]);

//         $results = DB::select("
//     SELECT *
//     FROM students
//     INNER JOIN Cities ON students.city = Cities.Cid
//     // WHERE your_conditions
// ");
    // }

    public  function store(Request $request)
    {
        $data = $request->validate([
            'table_name' => 'required|string',
            'column1' => 'required|in:0,1',
            'column2' => 'required|in:0,1',
            'column3' => 'required|in:0,1',
            'column4' => 'required|in:0,1',
            'column5' => 'required|in:0,1',
            'column6' => 'required|in:0,1',
            // Add more validation rules for other columns as needed
        ]);

        //create the table dynamically in the database
        Schema::create($data['table_name'], function (Blueprint $table) use ($data) {
            if ($data['column1'] == '1') {
                $table->float('Bangla');
            }
            if ($data['column2'] == '1') {
                $table->float('Math');
            }
            if ($data['column3'] == '1') {
                $table->float('English');
            }
            if ($data['column4'] == '1') {
                $table->float('Physics');
            }
            if ($data['column5'] == '1') {
                $table->float('Cemestry');
            }
            if ($data['column6'] == '1') {
                $table->float('ICT');
            }
            // Add more columns based on user selections
        });
        return view('cb');
    }
}
