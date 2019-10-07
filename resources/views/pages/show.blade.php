@extends('layouts.navbar')

@section('content')
    <h1>Students Information</h1>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Fathers Name</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>  

        @foreach($students as $student)
            <tr> 
                <th scope="row"> {{ $student->university_id }} </th>
                <td> {{ $student->name }} </td>
                <td> {{ $student->email }} </td>
                <td> {{ $student->f_name }} </td>
                <td> {{ $student->address }} </td>
            </tr>
        @endforeach

        </tbody>
      </table>
      
     
@endsection