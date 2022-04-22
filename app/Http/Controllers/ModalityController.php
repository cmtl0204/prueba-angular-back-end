<?php

namespace App\Http\Controllers;

use App\Models\Modality;
use Illuminate\Http\Request;

class ModalityController extends Controller
{
    public function index()
    {
        $data = Modality::get();
        response()->json($data);
    }

    public function store(Request $request)
    {
        $modality = new Modality();
        $modality->name = $request->input('name');
        $modality->description = $request->input('description');
        $modality->save();

        response()->json($modality);
    }

    public function show(Modality $modality)
    {
        response()->json($modality);
    }

    public function update(Request $request, Modality $modality)
    {
        $modality->name = $request->input('name');
        $modality->description = $request->input('description');
        $modality->save();

        response()->json($modality);
    }

    public function destroy(Modality $modality)
    {
        $modality->delete();

        response()->json(['rta' => true]);
    }
}
