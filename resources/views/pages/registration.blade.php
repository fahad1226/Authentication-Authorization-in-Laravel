@extends('layouts.navbar')

@section('content')

    @if (!Session::has('userid'))

    <h2 class="text-muted">Open An Account Here,it's Free</h2>
    <form method="post" action=" {{ url('regstore') }} ">
        @csrf
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" placeholder="Name" value="{{ old('name') }}" name="name" class="form-control">
        <small>
            <ul class="text-secondary">
                <li>your name should only contain character & space</li>
            </ul>
        </small>
            <div> {{ $errors->first('name') }} </div>
            <label for="name">Email</label>
            <input type="email" placeholder="Email" name="email" value=" {{ old('email') }} " class="form-control">
            <div> {{ $errors->first('email') }} </div>
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control">
                <option  disabled>Select Your Role</option>
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
                <option value="admin">Admin</option>
            </select>
            <div> {{ $errors->first('role') }} </div>
        </div>
       
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password"  placeholder="Password" class="form-control">
            <small id="passwordHelpBlock" class="form-text text-muted">
                <ul class="text-secondary">
                    <li>Your password must be more than 8 characters long,</li>
                    <li>should contain at-least 1 Uppercase,</li>
                    <li> 1 Lowercase,</li>
                    <li>1 Numeric and 1 special character.</li>
                </ul>   
            </small>
            <div> {{ $errors->first('password') }} </div>
            
            </div>

            <div class="form-group">
                <label >Confirm Password</label>
                <input type="password" name="password_confirm" placeholder="Confirm Password" class="form-control">
            </div>
            <div> {{ $errors->first('password_confirm') }} </div>
            <small>already have an account?
                    <a href="/login">click to login</a>
                </small>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Registration</button>
        
            </div>

        
    </form>

    @endif



@endsection
