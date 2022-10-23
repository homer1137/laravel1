<?php

namespace App\Http\Controllers;
use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index() {
        $cat1 = Cat::find(1);
        $cat2 = Cat::find(2);
        dump($cat1->name);
        dump($cat1->description);
        dump($cat2->name);
        dump($cat2->description);
    }

}
