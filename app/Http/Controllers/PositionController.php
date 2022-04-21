<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        $data = Position::get();
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
        $position = new Position();
        $position->name = $request->input('name');
        $position->description = $request->input('description');
        $position->save();

        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $position
        ]);
    }

    public function show(Position $position)
    {
        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $position
        ]);
    }

    public function update(Request $request, Position $position)
    {
        $position->name = $request->input('name');
        $position->description = $request->input('description');
        $position->save();

        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $position
        ]);
    }

    public function destroy(Position $position)
    {
        $position->delete();

        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $position
        ]);
    }
}
