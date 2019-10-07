<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }
    public function store()
    {
        $data = request()->validate([
            'name'=>'required|min:5',
            'email'=>'required|email',
            'university_id'=>'required',
            'f_name'=>'',
            'address'=>'',
           
        ]);
        //dd($data);

        Student::create($data);
        

        return redirect('show');
    }
    public function student1()
    {
        echo "Student 1";
    }
    public function student2()
    {
        echo "Student 2";
    }
}
