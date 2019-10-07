@extends('layouts.navbar')

@section('content')
    <h2 class="text-muted">Add New Student</h2>

    <form method="POST" action=" {{ url('store') }} ">
        @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Name</label>
                <input type="name" name="name" class="form-control"  placeholder="Student Name">
                <div> {{ $errors->first('name') }} </div>
              </div>
              <div class="form-group col-md-6">
                <label >Email</label>
                <input type="email" name="email" class="form-control" placeholder="Student Email">
                <div> {{ $errors->first('email') }} </div>
              </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label >University ID</label>
                    <input type="number" class="form-control" name="university_id" placeholder="Student ID">
                    <div> {{ $errors->first('university_id') }} </div>
                </div>
                <div class="form-group col-md-6">
                    <label >Fathers Name</label>
                    <input type="text" name="f_name" class="form-control" placeholder="Fathers Name">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label >Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Student Address">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" value="Chittagong" >
                </div>
            </div>

            <div class="form-group">
               <label >University Name</label>
               <input type="text" name="university" value="Premier University" class="form-control" >
            </div>
           
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>

@endsection
