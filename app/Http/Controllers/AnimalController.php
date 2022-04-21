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
        response()->json([
            'msg' => [
                'summary' => 'Consulta de estudiantes',
                'detail' => '',
            ],
            'data' => $data
        ]);
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

        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $animal
        ]);
    }

    public function show(Animal $animal)
    {
        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $animal
        ]);
    }

    public function update(Request $request, Animal $animal)
    {
        $animal->name = $request->input('name');
        $animal->age = $request->input('age');
        $animal->description = $request->input('description');
        $animal->image = $request->input('image');
        $animal->save();

        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $animal
        ]);
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();

        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $animal
        ]);
    }
}
