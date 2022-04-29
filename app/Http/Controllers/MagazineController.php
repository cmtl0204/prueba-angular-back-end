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
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $magazine = new Magazine();
        $magazine->area()->associate(Area::find($request->input('areaId')));
        $magazine->title = $request->input('title');
        $magazine->price = $request->input('price');
        $magazine->save();

        return response()->json($magazine);
    }

    public function show(Magazine $magazine)
    {
        return response()->json($magazine);
    }

    public function update(Request $request, Magazine $magazine)
    {
        $magazine->area()->associate(Area::find($request->input('areaId')));
        $magazine->title = $request->input('title');
        $magazine->price = $request->input('price');
        $magazine->save();

        return response()->json($magazine);
    }

    public function destroy(Magazine $magazine)
    {
        $magazine->delete();

        return response()->json(['rta' => true]);
    }
}
