<?php


Route::get('/','AuthController@home');

Route::group(['middleware' => 'checkloggedin'],function(){
   
    Route::group(['middleware' => 'isStudent'], function() {
        Route::get('show','AuthController@show');
        Route::get('student1','StudentController@student1');
        Route::get('student2','StudentController@student2');
    });

    Route::group(['middleware' => 'isTeacher'],function() {
        Route::get('teacher','TeacherController@teacher');
    });

    Route::group(['middleware' => 'isAdmin'], function() {
        Route::get('create','StudentController@create');
        Route::post('store','StudentController@store');
        
    });
    

});

Route::get('login','AuthController@login');
Route::post('loginstore','AuthController@loginstore');
Route::get('registration','AuthController@registration');
Route::post('regstore','AuthController@regstore');
Route::get('logout','AuthController@logout');


//Layout Class

//frontend

Route::get('index','LayoutController@index');
Route::get('about','LayoutController@about');
Route::get('projects','LayoutController@projects');
Route::get('contacts','LayoutController@contacts');

//backend -admin

Route::get('admin','LayoutController@admin_index');
Route::get('admin/chart','LayoutController@admin_chart');