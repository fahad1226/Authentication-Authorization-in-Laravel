<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Student;

use Session;

class AuthController extends Controller
{
    public function login(){
        if(Session::has('userid')){
            return redirect()->to('show');
        }
        return view('pages.login');
    }


    public function loginstore(Request $req)
    {
        $email = $req->email;
        $password = $req->password;
        
        $obj = Employee::where('email','=',$email)
                ->where('password','=',md5($password))->first();

        if($obj)
        {
            Session::put('userid', $obj->id);
            Session::put('username', $obj->name);
            Session::put('userrole', $obj->role);
            return redirect('show');
        }
        else {

            return redirect()->back()->with('msg', 'Wrong Email or Password');
        }
        
    }

    public function registration()
    {
        return view('pages.registration');
    }


    public function regstore(Request $request)
    {
        $data = $request->validate([
            'name'=>"required|min:5|regex:/^([a-zA-Z\-'\s]+)/",
            'email'=>'required|email|regex:/^.+@.+$/i',
            'role'=>'required',
            'password'=>'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',

            'password_confirm'=>'required|same:password',

        ]);

        //$employee = Employee::create($data);

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->role = $request->role;
        $employee->password = md5($request->password);
        $employee->save();
        return redirect('login');
    }

    public function home()
    {
        return view('pages.home');
    }

    public function logout(){
        Session::flush();
        return redirect()->to('login')->with('msg','you have been logged out');
    }

    public function show()
    {
        $students = Student::all();
        return view('pages.show',compact('students'));
    }
   
}
