<?php

namespace App\Http\Controllers;
use App\Models\Cat;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return view('about');
    }

}
