<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Magazine;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function index()
    {
        $data = Magazine::get();
        response()->json($data);
    }

    public function store(Request $request)
    {
        $magazine = new Magazine();
        $magazine->area()->associate(Area::find($request->input('areaId')));
        $magazine->title = $request->input('title');
        $magazine->price = $request->input('price');
        $magazine->save();

        response()->json($magazine);
    }

    public function show(Magazine $magazine)
    {
        response()->json($magazine);
    }

    public function update(Request $request, Magazine $magazine)
    {
        $magazine->area()->associate(Area::find($request->input('areaId')));
        $magazine->title = $request->input('title');
        $magazine->price = $request->input('price');
        $magazine->save();

        response()->json($magazine);
    }

    public function destroy(Magazine $magazine)
    {
        $magazine->delete();

        response()->json(['rta' => true]);
    }
}
