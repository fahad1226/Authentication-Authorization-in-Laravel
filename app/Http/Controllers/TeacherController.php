<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    public function teacher()
    {
        return view('teachers.info');
    }
 
}
