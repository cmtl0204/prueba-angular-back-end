<?php

namespace App\Http\Controllers;

use App\Models\Zoo;
use Illuminate\Http\Request;

class ZooController extends Controller
{
    public function index()
    {
        $data = Zoo::get();
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
        $zoo = new Zoo();
        $zoo->name = $request->input('name');
        $zoo->description = $request->input('description');
        $zoo->save();

        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $zoo
        ]);
    }

    public function show(Zoo $zoo)
    {
        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $zoo
        ]);
    }

    public function update(Request $request, Zoo $zoo)
    {
        $zoo->name = $request->input('name');
        $zoo->description = $request->input('description');
        $zoo->save();

        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $zoo
        ]);
    }

    public function destroy(Zoo $zoo)
    {
        $zoo->delete();

        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $zoo
        ]);
    }
}
