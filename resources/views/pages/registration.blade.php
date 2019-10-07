@extends('layouts.navbar')

@section('content')

    @if (!Session::has('userid'))

    <h2 class="text-muted">Open An Account Here,it's Free</h2>
    <form method="post" action=" {{ url('regstore') }} ">
        @csrf
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" placeholder="Name" value="{{ old('name') }}" name="name" class="form-control">
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
            <small>already have an account?
                    <a href="/login">click to login</a>
                </small>
            <button type="submit" class="btn btn-primary btn-block">Registration</button>
        </div>

    </form>

    @endif



@endsection
