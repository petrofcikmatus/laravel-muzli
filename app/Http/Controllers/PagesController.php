<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index(){
        return view('pages/home');
    }

    public function blog(){
        return view('pages/blog');
    }

    public function gallery(){
        return view('pages/gallery');
    }

    public function contact(){
        return view('pages/contact');
    }
}