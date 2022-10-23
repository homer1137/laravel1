<?php

namespace App\Http\Controllers;

use App\Models\Good;

use Illuminate\Http\Request;

class Hello extends Controller
{
    public function hello(){
        $name = 'Romango';
        $user = Good::find(1);
        echo "hello guys $name";
        dd($user);
    }
}

