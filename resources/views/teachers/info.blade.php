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
            width: 380px;
            border: 10px solid grey;
            padding: 30px;
            margin: 60px;
            margin-left: 350px;
            background-color: black;
            box-shadow: 10px 5px 7px grey;
            display: none;
        }
    </style>


    <h2>Teachers Information.</h2>
   
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
    


    <div id="teacher1" class="info text-white">

        <h4>Name is : Anik Sen</h4>
        <p>Department : CSE</p>
        <p>Subject : Software Development</p>
    </div>

    <div id="teacher2" class="info text-white">

        <h4>Name is : Minhaz Hossen</h4>
        <p>Department : CSE</p>
        <p>Subject : Data Structure</p>
        
    </div>

    <div id="teacher3" class="info text-white">

        <h4>Name is : Kingshukh Dhar</h4>
        <p>Department : CSE</p>
        <p>Subject : Artificial Intelligence</p>
    </div>

    <div id="teacher4" class="info text-white">

        <h4>Name is : Ashiq Kamal</h4>
        <p>Department : CSE</p>
        <p>Subject : SComputer Network</p>
    </div>
            

    <script>
        $(document).ready(function(){
            $("#tchr1").click(function(){
                $("#teacher1").fadeToggle(2000);
            });
        });
    </script> 
     <script>
        $(document).ready(function(){
            $("#tchr2").click(function(){
                $("#teacher2").fadeToggle(2000);
            });
        });
    </script> 



    <script>
        $(document).ready(function(){
            $("#tchr3").click(function(){
                $("#teacher3").slideToggle(2000);
            });
        });
    </script> 


    <script>
        $(document).ready(function(){
            $("#tchr4").click(function(){
                $("#teacher4").fadeToggle(2000);
            });
        });
    </script> 


@endsection

