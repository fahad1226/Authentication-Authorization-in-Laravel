@extends('layouts.navbar')

@section('content')

    @if (session()->has('msg'))
    <div class="alert alert-warning">
        {{ session()->get('msg') }}
    </div>
    @endif

    <h1 class="text-primary">Login Now</h1>
    <form class="form-group" method="post" action=" {{ url('loginstore') }} ">
        @csrf
        <label for="name">Your Email?</label>
        <input type="email" name="email" placeholder="Email" class="form-control">
        <label for="password">Your Password?</label>
        <input type="password" placeholder="Password" name="password" class="form-control">
        <small>not a member yet?
            <a href="/registration">click to register</a>
        </small>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
@endsection