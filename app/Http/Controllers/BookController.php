<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = Book::get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->author()->associate(Author::find($request->input('authorId')));
        $book->asin = $request->input('asin');
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->editorial = $request->input('editorial');
        $book->stock = $request->input('stock');
        $book->save();

        return response()->json([
            'msg' => [
                'summary' => 'success',
                'detail' => '',
            ],
            'data' => $book
        ]);
    }

    public function show(Book $book)
    {
        return response()->json($book);
    }

    public function update(Request $request, Book $book)
    {
        $book->author()->associate(Author::find($request->input('authorId')));
        $book->asin = $request->input('asin');
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->editorial = $request->input('editorial');
        $book->stock = $request->input('stock');
        $book->save();

        return response()->json($book);
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json(['rta' => true]);
    }
}
