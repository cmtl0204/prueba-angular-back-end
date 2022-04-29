<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Zoo;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $data = Animal::get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $animal = new Animal();
        $animal->zoo()->associate(Zoo::find($request->input('zooId')));
        $animal->name = $request->input('name');
        $animal->age = $request->input('age');
        $animal->description = $request->input('description');
        $animal->image = $request->input('image');
        $animal->save();

        return response()->json($animal);
    }

    public function show(Animal $animal)
    {
        return response()->json($animal);
    }

    public function update(Request $request, Animal $animal)
    {
        $animal->name = $request->input('name');
        $animal->age = $request->input('age');
        $animal->description = $request->input('description');
        $animal->image = $request->input('image');
        $animal->save();

        return response()->json($animal);
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();

        return response()->json(['rta' => true]);
    }
}
