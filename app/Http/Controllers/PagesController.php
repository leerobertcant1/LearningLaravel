<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }
}
