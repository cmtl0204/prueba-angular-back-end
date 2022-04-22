<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $data = Author::get();
        return response()->json($data);
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

        return response()->json($author);
    }

    public function show(Author $author)
    {
        return response()->json($author);
    }

    public function update(Request $request, Author $author)
    {
        $author->code = $request->input('code');
        $author->name = $request->input('name');
        $author->surname = $request->input('surname');
        $author->address = $request->input('address');
        $author->telephone = $request->input('telephone');
        $author->save();

        return response()->json($author);
    }

    public function destroy(Author $author)
    {
        $author->delete();

        response()->json(['rta' => true]);
    }
}
