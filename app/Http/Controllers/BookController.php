<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function adminBookIndex()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function adminBookEdit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    public function adminBookUpdate(BookRequest $request, Book $book)
    {
        $book->update($request->all());
        return redirect(route('admin.books.index'))->with('success', 'The book has been edited!');
    }

    public function adminBookCreate()
    {
        return view('books.create');
    }

    public function adminBookStore(BookRequest $request)
    {
        $request->addBooks();

        return redirect(route('admin.books.index'))->with('success', 'New book has been added!');
    }
}
