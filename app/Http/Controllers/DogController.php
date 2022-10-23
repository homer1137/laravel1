<?php

namespace App\Http\Controllers;

use App\Models\Dog;

use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index()
    {
        $dog = Dog::find(1);
        dump($dog->petName);
        dd($dog->description);
    }

    public function showDogs(){
        $dogs = Dog::all();
        return view('dog', compact('dogs'));
    }

    public function allDogs()
    {
        $dogs = Dog::all();
        foreach ($dogs as $dog) {
            dump(($dog->petName));
            dump($dog->description);
        }
        dump($dogs);
    }

    public function dogWith4Legs()
    {
        $dogs = Dog::where('legs', 4)->get();
        foreach ($dogs as $dog) {
            dump($dog->petName);
        }
    }

    public function create()
    {
        $dogArray = [
            [
                'petName' => 'hraka44',
                'legs' => 6,
                'description' => 'ugly but, kind dog44',

            ],
            [
                'petName' => 'hraka2',
                'legs' => 6,
                'description' => 'ugly but, kind dog222',

            ],
            [
                'petName' => 'hraka3',
                'legs' => 6,
                'description' => 'ugly but, kind dog333'
            ]
        ];

        foreach ($dogArray as $dog) {
            Dog::create($dog);
        }


        dd('created');
    }

    public function update()
    {
        $dog = Dog::find(4);
        $dog->update([
            'petName' => 'updated',
            'legs' => 55,
            'description' => 'updated'
        ]);
        dd('updated');
    }
    public function delete()
    {
        $dog = Dog::find(1);

        $dog->delete();

        dd('deleted22');
    }

    //first or create
    //update or create

    public function firstOrCreate()
    {

        $anotherDog = [
            'petName' => 'hraka144',
            'legs' => 22,
            'description' => 'long dog'
        ];

        $adddog=Dog::firstOrCreate([
            'petName' => 'hraka144'
        ],
        $anotherDog
        );
        dump($adddog->description);
        dd('finished');
    }
    public function updateOrCreate()
    {
        $anotherDog = [
            'petName' => 'update_or_create hraka144',
            'legs' => 22,
            'description' => 'update_or_create long dog'
        ];

        $adddog=Dog::updateOrCreate([
            'petName' => 'hraka3'
        ],
        $anotherDog
        );
        dump($adddog->description);
        dd('finished udating or creating');

        dd('update or create');
    }



}
