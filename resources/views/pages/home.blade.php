@extends('layouts.navbar')

@section('content')
    <div class="container">
        <div class="container">
            @if (!Session::has('userid'))
            <div class="jumbotron text-center">
                    <h2 class="display-4 text-muted text-center">Welcome To Laravel World</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, eligendi.</p>
                    
                    <a type="button" class="btn btn-primary btn-lg text-white" href="/login">Login</a>
                    
                    <a type="button" class="btn btn-secondary btn-lg text-white" href="/registration">Registration</a>
                        
                </div> 

            @endif

            @if (Session::has('userid'))
            <div>
                <a class=" btn btn-secondary btn-block text-white" href=" {{ url('teacher') }} ">
                    <h3>Teachers Section</h3>
                </a>
                <a class="btn btn-secondary btn btn-block text-white" href=" {{ url('show') }} ">
                    <h3>Students Section</h3>
                </a>
                <a class="btn btn-secondary btn-block text-white" href=" {{ url('create') }} ">
                    <h3>Admin Section</h3>
                </a>
                
            </div>

            @endif

        </div>
            
    </div>
@endsection