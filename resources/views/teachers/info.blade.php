@extends('layouts.navbar')


@section('jquery')

    <style media="screen">
        .box {
            width: 10px;
            border: 5px solid grey;
            padding: 3px;
            margin: 1px;
            background-color: black;
        }


        .info {
            width: 300px;
            border: 10px solid grey;
            padding: 30px;
            margin: 15px;
            background-color: black;
            box-shadow: 10px 5px 7px grey;
            display: none;
        }
    </style>


    <h2>Let's Have Fun..</h2>
   
    <div class="row flex-fill">
        <div class="col-md-2  box">
           <center> <button id="tchr1" class="btn btn-secondary  btn-lg">Teacher 1</button></center> 
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2 box">
                <center> <button id="tchr2" class="btn btn-secondary  btn-lg">Teacher 2</button></center> 
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2 box">
                <center> <button id="tchr3" class="btn btn-secondary  btn-lg">Teacher 3</button></center> 
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2 box">
                <center> <button id="tchr4" class="btn btn-secondary  btn-lg">Teacher 4</button></center> 
        </div>
    </div>
    




    <div id="info" class="info">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ratione velit sit natus, quia delectus officiis libero et provident!</p>
    </div>

    <script>
        $(document).ready(function(){
            $("#tchr1").click(function(){
                $("#info").fadeToggle(2000);
            });
        });
    </script> 


@endsection

