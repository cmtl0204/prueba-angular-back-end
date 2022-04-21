<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $data = Author::get();
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
        $author = new Author();
        $author->code = $request->input('code');
        $author->name = $request->input('name');
        $author->surname = $request->input('surname');
        $author->address = $request->input('address');
        $author->telephone = $request->input('telephone');
        $author->save();

        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $author
        ]);
    }

    public function show(Author $author)
    {
        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $author
        ]);
    }

    public function update(Request $request, Author $author)
    {
        $author->code = $request->input('code');
        $author->name = $request->input('name');
        $author->surname = $request->input('surname');
        $author->address = $request->input('address');
        $author->telephone = $request->input('telephone');
        $author->save();

        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $author
        ]);
    }

    public function destroy(Author $author)
    {
        $author->delete();

        response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $author
        ]);
    }
}
