<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $data = Area::get();
        response()->json($data);
    }

    public function store(Request $request)
    {
        $area = new Area();
        $area->name = $request->input('name');
        $area->save();

        response()->json($area);
    }

    public function show(Area $area)
    {
        response()->json($area);
    }

    public function update(Request $request, Area $area)
    {
        $area->name = $request->input('name');
        $area->save();

        response()->json($area);
    }

    public function destroy(Area $area)
    {
        $area->delete();

        response()->json(['rta' => true]);
    }
}
