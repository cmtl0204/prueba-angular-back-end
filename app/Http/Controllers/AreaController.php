<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $data = Area::get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $area = new Area();
        $area->name = $request->input('name');
        $area->save();

        return response()->json($area);
    }

    public function show(Area $area)
    {
        return response()->json($area);
    }

    public function update(Request $request, Area $area)
    {
        $area->name = $request->input('name');
        $area->save();

        return response()->json($area);
    }

    public function destroy(Area $area)
    {
        $area->delete();

        return response()->json(['rta' => true]);
    }
}
