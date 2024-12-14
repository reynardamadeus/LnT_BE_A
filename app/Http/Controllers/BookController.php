<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function getBooks(){
        $books = Book::all();
        return view('welcome', compact('books'));
    }

    public function getCreatePage(){
        return view('createBook');
    }

    public function createBook(Request $request){
        $request->validate([
            'name' => ['required', 'min:1'],
            'description' => ['required', 'min:3'],
            'author' => ['required'],
            'stock' => ['required'],
            'price' => ['required', 'integer', 'min:1'],
            'release_date' => ['required']
        ]);

        Book::create([
            'name' => $request->name,
            'description' => $request->description,
            'author' => $request->author,
            'price' => $request->price,
            'stock' => $request->stock,
            'release_date' => $request->release_date
        ]);

        return redirect()->route('book.view');
    }
}
