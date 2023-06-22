<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        // Using Raw Query
        // $users = DB::select('select * from users');
        // dd($users);

        // Using Eloquent ORM
        $students = Student::all();
        // dd($students);

    // Looping over all students in the database
    foreach($students as $student){
        echo $student->name. "<br>";
    }

    // Adding new data to the database using Eloquent ORM
    // $student = new Student();
    // $student->name = "New";
    // $student->email = "newemail@email.com";
    // $student->save();

    }
}