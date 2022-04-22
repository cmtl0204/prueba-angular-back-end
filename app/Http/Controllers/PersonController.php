<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Position;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $data = Person::get();
        response()->json($data);
    }

    public function store(Request $request)
    {
        $person = new Person();
        $person->position()->associate(Position::find($request->input('postitionId')));
        $person->name = $request->input('name');
        $person->lastname = $request->input('lastname');
        $person->identification = $request->input('identification');
        $person->birthdate = $request->input('birthdate');
        $person->image = $request->input('image');
        $person->save();

        response()->json($person);
    }

    public function show(Person $person)
    {
        response()->json($person);
    }

    public function update(Request $request, Person $person)
    {
        $person->position()->associate(Position::find($request->input('postitionId')));
        $person->name = $request->input('name');
        $person->lastname = $request->input('lastname');
        $person->identification = $request->input('identification');
        $person->birthdate = $request->input('birthdate');
        $person->image = $request->input('image');
        $person->save();

        response()->json($person);
    }

    public function destroy(Person $person)
    {
        $person->delete();

        response()->json(['rta' => true]);
    }
}
