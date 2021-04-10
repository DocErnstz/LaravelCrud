<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Students::all();
        //dd($students);
        return view("index", compact("students", "students"));
    }
    public function create()
    {
        return view("create");
    }
    public function store(Request $request)
    {
        Students::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "address" => $request->address,
            "created_at" => now(),
        ]);
        return redirect()->route("students.index")->with("success", "Student has been added");
    }
}
