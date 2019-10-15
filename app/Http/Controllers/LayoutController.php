<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function projects()
    {
        return view('frontend.pages.project');
    }

    public function contacts()
    {
        return view('frontend.pages.contact');
    }

    public function admin_index()
    {
        return view('backend.pages.index');
    }

    public function admin_chart()
    {
        return view('backend.pages.chart');
    }
}
